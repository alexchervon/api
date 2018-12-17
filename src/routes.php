<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/students/[{id}]', '\App\Controllers\StudentController:index');


