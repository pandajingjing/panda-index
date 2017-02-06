<?php

/**
 * 命令行通用函数
 */

/**
 * 获取加载器参数
 *
 * @return array
 */
function getLoaderParams()
{
    return $_SERVER['argv'];
}

/**
 * 获取加载器名称
 *
 * @param array $p_aLoaderParams            
 * @return string
 */
function getLoaderName($p_aLoaderParams)
{
    return isset($p_aLoaderParams[2]) ? $p_aLoaderParams[2] : '';
}

/**
 * 获取代码路径
 *
 * 如果路径不存在则退出
 *
 * @param string $p_sBranchName            
 * @return string
 */
function getCodePath($p_sBranchName)
{
    $sCodePath = PANDA_BASEPATH . '/php_' . PANDA_ENV_NAME . '/' . $p_sBranchName;
    if (is_dir($sCodePath)) {
        return $sCodePath;
    } else {
        echo 'Version does not exist.', PHP_EOL;
        exit();
    }
}

/**
 * 获取环境基础域名
 *
 * @param string $p_sEnvName            
 * @return string
 */
function getBaseCmd($p_sEnvName = PANDA_ENV_NAME)
{
    return 'PATH/launcher_' . $p_sEnvName . '.sh';
}

/**
 * 获取加载器路径
 *
 * 如果加载器不存在则退出
 *
 * @param array $p_aLoaderParams            
 * @return string
 */
function getLoaderPath($p_aLoaderParams)
{
    $sLoaderPath = PANDA_BASEPATH . '/index/loader/' . PANDA_LOADER . '_' . PANDA_REQUEST_TYPE . '.php';
    if (file_exists($sLoaderPath)) {
        return $sLoaderPath;
    } else {
        echo 'Loader does not exist.', PHP_EOL;
        exit();
    }
}