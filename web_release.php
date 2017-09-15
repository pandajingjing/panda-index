<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_RELEASE);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_WEB);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();

define('PANDA_LOADER', getLoaderName($aLoaderParams, 0));
define('PANDA_CODEPATH', getCodePath(PANDA_BASEPATH, PANDA_ENV_NAME, getCodeVer(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE)));
define('PANDA_PAGEPATH', getPagePath(PANDA_BASEPATH, PANDA_ENV_NAME, getPageVer(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE)));
define('PANDA_BASEDOMAIN', getBaseDomain($aLoaderParams, 1));
// echo getLoaderPath(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE);
exit();