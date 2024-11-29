<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("forget", [
    'errors' => $errors ?? []
]);
