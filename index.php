<?php

include("keys.php");
include("db_inc.php");
include("dump.php");
include("WufuClass.php");


$wufu = new Wufu($WUFU_KEY, $SUBDOMAIN, $DOMAIN);
do_dump($wufu->getForms(null));





?>
