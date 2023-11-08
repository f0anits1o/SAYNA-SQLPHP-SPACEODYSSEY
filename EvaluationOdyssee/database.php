<?php
$local = "localhost";
$user = "root";
$password = "";
$db_name = "evaluation";
$options = [PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES=>FALSE];

try {
    $db = new PDO("mysql:host=".$local.";dbname=".$db_name, $user, $password, $options);
    echo 'mande';
}catch(EXCEPTION $e){
    echo $e;
};

?>

