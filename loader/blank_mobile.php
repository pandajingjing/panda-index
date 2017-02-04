<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/blank-mobile',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-mobile/config',
    PANDA_CODEPATH . '/config/blank-mobile'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();