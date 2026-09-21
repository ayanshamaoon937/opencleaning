<?php
declare(strict_types=1);
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        "httponly" => true,
        "secure" => !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off",
        "samesite" => "Lax",
    ]);
    session_start();
}
$config = require __DIR__ . "/config.php";
function e($s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES, "UTF-8");
}
function icon(string $name): string
{
    $paths = [
        "arrow" => '<path d="M5 12h14m-5-5 5 5-5 5"/>',
        "spark" =>
            '<path d="m12 3 2.5 6.5L21 12l-6.5 2.5L12 21l-2.5-6.5L3 12l6.5-2.5Z"/>',
        "home" => '<path d="m3 10 9-7 9 7v11H3Zm6 11v-8h6v8"/>',
        "check" => '<path d="m5 12 4 4L19 6"/>',
        "shield" =>
            '<path d="m12 3 8 3v6c0 5-8 9-8 9s-8-4-8-9V6Z"/><path d="m8 12 3 3 5-6"/>',
        "clock" => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        "pin" =>
            '<path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z"/><circle cx="12" cy="10" r="2"/>',
        "mail" =>
            '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 6 9 7 9-7"/>',
        "office" =>
            '<path d="M4 21V3h12v18M16 9h4v12M8 7h4M8 11h4M8 15h4M2 21h20"/>',
    ];
    return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' .
        ($paths[$name] ?? $paths["spark"]) .
        "</svg>";
}
$services = [
    "Residential cleaning",
    "Commercial cleaning",
    "Deep cleaning",
    "End-of-lease cleaning",
    "Bathroom cleaning — $80",
    "Kitchen cleaning — $70",
    "Living room / bedroom — $60",
    "Additional room — $50",
];

// Version local assets so browsers refresh them whenever their contents change.
function asset(string $path): string
{
    $file = dirname(__DIR__) . "/" . $path;
    return $path . "?v=" . (is_file($file) ? filemtime($file) : "1");
}
