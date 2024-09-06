<?php

use KyteApi\AllowCors;

(new AllowCors)->init();
header('Allow-Access-Control: *');
//header('Content-Type: application/json');
//header('Content-Type: application/json');

