<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_RELEASE);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_CONSOLE);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();
$iParamsLength = count($aLoaderParams);

define('PANDA_LOADER', getLoaderName($aLoaderParams, $iParamsLength, - 1));
define('PANDA_CODEPATH', getCodePath(PANDA_BASEPATH, PANDA_ENV_NAME, getCodeVer(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE)));
define('PANDA_VPATH', getVendorPath(PANDA_BASEPATH, PANDA_ENV_NAME));
define('PANDA_BASECMD', getBaseCmd(PANDA_ENV_NAME));
include getLoaderPath(PANDA_BASEPATH, PANDA_LOADER, PANDA_REQUEST_TYPE);
exit();