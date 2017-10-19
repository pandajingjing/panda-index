<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/blank-console',
    'blank-bclient\\' => PANDA_CODEPATH . '/blank-bclient',
    'blank-service\\' => PANDA_CODEPATH . '/blank-service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/blank-service/config',
    PANDA_CODEPATH . '/blank-bclient/config',
    PANDA_CODEPATH . '/blank-console/config',
    PANDA_CODEPATH . '/config/blank-service',
    PANDA_CODEPATH . '/config/blank-bclient',
    PANDA_CODEPATH . '/config/blank-console'
);

include PANDA_CODEPATH . '/system/bin.php';
bin_cmd();