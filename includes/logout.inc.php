<?php

require_once 'config_session.inc.php';
session_unset();
session_destroy();

header("Location: ../index.php");
die();