<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection($app->config->get('db'));

$capsule->bootEloquent();