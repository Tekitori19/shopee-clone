<?php

loadPartial("head");
loadPartial("navbar");
loadPartial("detail", [
    'product' => $product
]);
loadPartial("bottom-banner");
loadPartial("footer");
