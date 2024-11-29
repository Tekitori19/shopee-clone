<?Php
loadPartial("head");
loadPartial("navbar");
loadPartial("reset", [
    'errors' => $errors ?? [],
    'user' => $user ?? []
]);

