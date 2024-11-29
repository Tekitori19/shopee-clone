<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("error", [
    'status' => $status,
    'message' => $message
]);
loadPartial("footer");
