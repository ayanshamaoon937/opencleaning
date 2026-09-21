<?php
require __DIR__ . "/includes/bootstrap.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Allow: POST");
    http_response_code(405);
    exit("Method not allowed.");
}
function finish(string $type, string $message, array $old = []): never
{
    $_SESSION["flash"] = ["type" => $type, "message" => $message];
    $_SESSION["old"] = $old;
    header("Location: contact.php#quote", true, 303);
    exit();
}
if (
    !is_string($_POST["csrf"] ?? null) ||
    !hash_equals($_SESSION["csrf"] ?? "", $_POST["csrf"]) ||
    empty($_SESSION["csrf"])
) {
    finish("error", "Your session has expired. Please try again.");
}
$values = [];
foreach (
    [
        "name",
        "email",
        "phone",
        "suburb",
        "service",
        "frequency",
        "message",
        "consent",
    ]
    as $key
) {
    $values[$key] = is_string($_POST[$key] ?? null) ? trim($_POST[$key]) : "";
}
if (!empty($_POST["website"])) {
    finish(
        "error",
        "Unable to submit this request. Please contact us by email.",
    );
}
if (time() - ($_SESSION["last_attempt"] ?? 0) < 30) {
    finish(
        "error",
        "Please wait 30 seconds before sending another request.",
        $values,
    );
}
if (
    strlen($values["name"]) < 2 ||
    strlen($values["name"]) > 100 ||
    !filter_var($values["email"], FILTER_VALIDATE_EMAIL) ||
    strlen($values["email"]) > 254 ||
    preg_match('/[\r\n]/', $values["email"]) ||
    !preg_match('/^[+0-9() .-]{7,30}$/', $values["phone"]) ||
    strlen($values["suburb"]) < 2 ||
    strlen($values["suburb"]) > 100 ||
    !in_array($values["service"], $services, true) ||
    !in_array(
        $values["frequency"],
        ["One-off", "Weekly", "Fortnightly", "Monthly", "Not sure yet"],
        true,
    ) ||
    strlen($values["message"]) < 10 ||
    strlen($values["message"]) > 5000 ||
    $values["consent"] !== "1"
) {
    finish(
        "error",
        "Please check your contact details, select a service, and include a message of at least 10 characters.",
        $values,
    );
}
$_SESSION["last_attempt"] = time();
$to = $config["mail_to"];
$from = $config["mail_from"];
if (
    !filter_var($to, FILTER_VALIDATE_EMAIL) ||
    !filter_var($from, FILTER_VALIDATE_EMAIL) ||
    preg_match('/[\r\n]/', $to . $from)
) {
    finish(
        "error",
        "Online enquiries are not available just yet. Please email " .
            $config["email"] .
            " so we can help.",
        $values,
    );
}
$body = "New PerthCleaner quote request\n\n";
foreach ($values as $key => $value) {
    if ($key !== "consent") {
        $body .= ucfirst($key) . ": " . $value . "\n\n";
    }
}
$headers = [
    "From" => $from,
    "Reply-To" => $values["email"],
    "MIME-Version" => "1.0",
    "Content-Type" => "text/plain; charset=UTF-8",
];
$sent = @mail(
    $to,
    "PerthCleaner: " . $values["service"] . " enquiry",
    $body,
    $headers,
);
if (!$sent) {
    error_log("PerthCleaner: mail transport did not accept quote request.");
    finish(
        "error",
        "We couldn’t send your request. Please try again later or email " .
            $config["email"] .
            ".",
        $values,
    );
}
$_SESSION["csrf"] = bin2hex(random_bytes(32));
finish(
    "success",
    "Thank you! Your quote request has been sent. We’ll be in touch to discuss your clean.",
);
