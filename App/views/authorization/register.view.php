<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("register", [
    'errors' => $errors ?? [],
    'user' => $user ?? []
]);
