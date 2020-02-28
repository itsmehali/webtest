<?php

spl_autoload_register(static function ($className) {
    include __DIR__ . "/$className.php";
});
