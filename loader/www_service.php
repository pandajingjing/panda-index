<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/www-service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/www-service/config',
    PANDA_CODEPATH . '/config/www-service'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/www-service',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();