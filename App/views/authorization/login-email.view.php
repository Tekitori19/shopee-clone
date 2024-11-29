<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("login-email", [
    'errors' => $errors ?? [],
    'user' => $user ?? []
]);
