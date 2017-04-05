<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/spider-service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/spider-service/config',
    PANDA_CODEPATH . '/config/spider-service'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();