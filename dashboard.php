<?php
require('index/view.php');
require('index/model.php');
require('index/controller.php');

$controller = new controller();
$controller->index();
