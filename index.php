<?php

set_include_path("/var/www/zasoby/library/");
require("Zend/Db/Adapter/Pdo/Pgsql.php");
require("/var/www/zasoby/smarty/Smarty.class.php");
$smarty = new Smarty();

$db = new Zend_Db_Adapter_Pdo_Pgsql(array(
    "dbname" => "test",
    "username" => "test",
    "password" => "IeTi9mae"
));

$ekran = "start";
if (isset($_GET["ekran"])) {
    $ekran = $_GET["ekran"];
}

function loader($klasa) {
    require "ekrany/$klasa.php";
}
spl_autoload_register("loader");

$ekran = ucfirst($ekran);
$e = new $ekran();
if ($e instanceof Ekran) {
    $e->db = $db;
    $e->smarty = $smarty;
    print $e->wypisz();
} else {
    print "Ekran $ekran nie dziedziczy po klasie Ekran, a powinien";
}
