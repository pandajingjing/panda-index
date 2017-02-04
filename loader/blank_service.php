<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/blank_service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/blank_service/config',
    PANDA_CODEPATH . '/system/config'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/bin.php';
bin();