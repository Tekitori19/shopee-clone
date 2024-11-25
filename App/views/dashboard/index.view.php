<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("admin", [
    'users' => $users
]);
loadPartial("footer");
