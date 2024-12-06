<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("reset", [
    'errors' => $errors ?? []
]);
