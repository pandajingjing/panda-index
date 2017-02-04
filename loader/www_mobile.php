<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/www-mobile',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/www-mobile/config',
    PANDA_CODEPATH . '/config/www-mobile'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/www-mobile',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();