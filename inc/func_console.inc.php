<?php
namespace PandaIndex;

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
 * @param int $p_iParamsLength            
 * @param int $p_iPosition            
 * @return string
 */
function getLoaderName($p_aLoaderParams, $p_iParamsLength, $p_iPosition)
{
    $iPosition = $p_iParamsLength + $p_iPosition;
    if (isset($p_aLoaderParams[$iPosition])) {
        unset($_SERVER['argv'][$iPosition]);
        return $p_aLoaderParams[$iPosition];
    } else {
        echo 'You Miss Loader.', PHP_EOL;
        exit();
    }
}

/**
 * 获取环境基础域名
 *
 * @param string $p_sEnvName            
 * @return string
 */
function getBaseCmd($p_sEnvName)
{
    return 'PATH/launcher_' . $p_sEnvName . '.sh';
}

/**
 * 获取加载器路径
 *
 * 如果加载器不存在则退出
 *
 * @param string $p_sBasePath            
 * @param string $p_sLoaderName            
 * @param string $p_sReqType            
 * @return string
 */
function getLoaderPath($p_sBasePath, $p_sLoaderName, $p_sReqType)
{
    $sLoaderPath = $p_sBasePath . '/index/loader/' . $p_sLoaderName . '_' . $p_sReqType . '.php';
    if (file_exists($sLoaderPath)) {
        return $sLoaderPath;
    } else {
        echo 'Loader does not exist.', PHP_EOL;
        exit();
    }
}

/**
 * 获取代码路径
 *
 * 如果路径不存在则退出
 *
 * @param string $p_sBasePath            
 * @param string $p_sEnvName            
 * @param string $p_sCodeVer            
 * @return string
 */
function getCodePath($p_sBasePath, $p_sEnvName, $p_sCodeVer)
{
    $sCodePath = $p_sBasePath . '/php-' . $p_sEnvName . '/' . $p_sCodeVer;
    if (is_dir($sCodePath)) {
        return $sCodePath;
    } else {
        echo 'Code Path Not Found.', PHP_EOL;
        exit();
    }
}

/**
 * 获取Vendor路径
 *
 * @param string $p_sBasePath            
 * @param string $p_sEnvName            
 * @return string
 */
function getVendorPath($p_sBasePath, $p_sEnvName)
{
    return $p_sBasePath . '/php-' . $p_sEnvName . '/vendor';
}