<?php
namespace PandaIndex;

define('PANDA_BASEPATH', '/data/app');
include PANDA_BASEPATH . '/index/inc/func.inc.php';

define('PANDA_ENV_NAME', PANDA_ENV_RELEASE);
define('PANDA_REQUEST_TYPE', PANDA_REQTYPE_CONSOLE);

include PANDA_BASEPATH . '/index/inc/func_' . PANDA_REQUEST_TYPE . '_' . PANDA_ENV_NAME . '.inc.php';

$aLoaderParams = getLoaderParams();

define('PANDA_LOADER', getLoaderName($aLoaderParams));
define('PANDA_CODE_VER', getCodeVer());
define('PANDA_CODEPATH', getCodePath(PANDA_CODE_VER));
define('PANDA_BASECMD', getBaseCmd());
include getLoaderPath($aLoaderParams);
exit();