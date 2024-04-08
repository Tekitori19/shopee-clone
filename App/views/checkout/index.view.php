<?php
    loadPartial("head");
    loadPartial("navbar");
    loadPartial("checkout", [
        'in4' => $in4
    ]);