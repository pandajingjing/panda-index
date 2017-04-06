<?php
$G_PHP_DIR = array(
    PANDA_CODEPATH . '/blank-console',
    PANDA_CODEPATH . '/blank-bclient',
    PANDA_CODEPATH . '/blank-service',
    PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-service/config',
    PANDA_CODEPATH . '/blank-bclient/config',
    PANDA_CODEPATH . '/blank-console/config',
    PANDA_CODEPATH . '/config/blank-console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();