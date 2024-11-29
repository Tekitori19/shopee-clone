<?php

$errors = $errors ?? [];
$listing = $listing ?? [];

loadPartial("head");
loadPartial("navbar");
loadPartial("create", [
    'errors' => $errors,
    'listing' => $listing
]);
loadPartial("footer");
