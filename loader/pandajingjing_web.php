<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => PANDA_CODEPATH . '/pandajingjing_web',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/pandajingjing_web/config',
    PANDA_CODEPATH . '/config/pandajingjing_web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/pandajingjing_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();