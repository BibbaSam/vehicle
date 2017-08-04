<?php
spl_autoload_register(function ($fileName) {
    include_once  $fileName . '.php';
});
