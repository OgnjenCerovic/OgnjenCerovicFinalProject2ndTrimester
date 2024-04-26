<?php
$heading = 'Menu';
require ('Validator.php');
$config = require ('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $pizzas = $db->query('SELECT * FROM pizza')->fetch();
}

require ('./views/MenuPage.view.php');

