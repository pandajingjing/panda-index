<?php
namespace PandaIndex;

$G_APP_DIR = array(
    'app\\' => [
        PANDA_CODEPATH . '/api_web',
        PANDA_CODEPATH . '/member_api'
    ],
    'api_service\\' => PANDA_CODEPATH . '/api_service',
    'member_service\\' => PANDA_CODEPATH . '/member_service',
    'panda\\' => PANDA_CODEPATH . '/system'
);

$G_CONFIG_DIR = array(
    PANDA_CODEPATH . '/system/config',
    PANDA_CODEPATH . '/member_service/config',
    PANDA_CODEPATH . '/api_service/config',
    PANDA_CODEPATH . '/member_api/config',
    PANDA_CODEPATH . '/api_web/config',
    PANDA_CODEPATH . '/config/member_service',
    PANDA_CODEPATH . '/config/api_service',
    PANDA_CODEPATH . '/config/member_api',
    PANDA_CODEPATH . '/config/api_web',
    PANDA_BASEPATH . '/index/config/member_service',
    PANDA_BASEPATH . '/index/config/api_service',
    PANDA_BASEPATH . '/index/config/member_api',
    PANDA_BASEPATH . '/index/config/api_web'
);

$G_PAGE_DIR = array(
    PANDA_PAGEPATH . '/api_web',
    PANDA_PAGEPATH . '/system'
);

include PANDA_CODEPATH . '/system/bin.php';
bin();