<?php
// Set these environment variables on the production host before enabling email.
return [
    "email" => getenv("CONTACT_EMAIL") ?: "farhanamir571@gmail.com",
    "mail_to" => getenv("CONTACT_MAIL_TO") ?: "",
    "mail_from" => getenv("CONTACT_MAIL_FROM") ?: "",
    "phone" => getenv("CONTACT_PHONE") ?: "+61 473 783 004",
];
