<?php
/// copy code to .psysh.php
require_once "app/bootstrap.php";

use Mage\DB2\DB2;
DB2::init();
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$om = $bootstrap->getObjectManager();
