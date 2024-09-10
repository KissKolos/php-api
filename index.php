<?php
session_start();
include "./vendor/autoload.php";

use src\Html\Request;

Request::handle();