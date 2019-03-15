<?php
date_default_timezone_set('Africa/Lagos');
spl_autoload_register(function ($class_name) {
        require_once dirname(__DIR__)."/dev/".$class_name . '.php';

});
?>