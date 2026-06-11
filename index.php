<?php

require('view.php');
require('model.php');
require('controller.php');

$controller = new controller();
$controller->index();

