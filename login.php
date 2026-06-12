<?php

require('login/view.php');
require('login/model.php');
require('login/controller.php');

$controller = new controller();
$controller->index();

