<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("login", [
    'errors' => $errors ?? []
]);
