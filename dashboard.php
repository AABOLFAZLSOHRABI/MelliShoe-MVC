<?php
require('dashboard/view.php');
require('dashboard/model.php');
require('dashboard/controller.php');

$controller = new controller();
$controller->index();
