<?php
var_dump($_POST);
$table = $_GET["table"];
$class = ucfirst($table);
$data = $class::all();