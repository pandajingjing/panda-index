<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_TEST);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_WEB);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();

define('PANDA_LOADER', getLoaderName($aLoaderParams, 0));
define('PANDA_CODEPATH', getCodePath(PANDA_BASEPATH, PANDA_ENV_NAME, getCodeVer($aLoaderParams, 1)));
define('PANDA_PAGEPATH', getPagePath(PANDA_BASEPATH, PANDA_ENV_NAME, getPageVer($aLoaderParams, 1)));
define('PANDA_VPATH', getVendorPath(PANDA_BASEPATH, PANDA_ENV_NAME));
define('PANDA_BASEDOMAIN', getBaseDomain($aLoaderParams, 1));
include getLoaderPath(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE);
exit();