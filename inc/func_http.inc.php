<?php
namespace PandaIndex;

/**
 * http站点通用函数
 */

/**
 * 获取加载器参数
 *
 * @return array
 */
function getLoaderParams()
{
    return explode('.', $_SERVER['HTTP_HOST']);
}

/**
 * 获取加载器名称
 *
 * 如果无法获取则返回www
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iPosition            
 * @return string
 */
function getLoaderName($p_aLoaderParams, $p_iPosition)
{
    if (isset($p_aLoaderParams[$p_iPosition])) {
        return $p_aLoaderParams[$p_iPosition];
    } else {
        return 'www';
    }
}

/**
 * 获取代码路径
 *
 * 如果路径不存在则返回404错误
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
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Code Path Not Found');
        exit();
    }
}

/**
 * 获取页面路径
 *
 * 如果路径不存在则返回404错误
 *
 * @param string $p_sBasePath            
 * @param string $p_sEnvName            
 * @param string $p_sPageVer            
 * @return string
 */
function getPagePath($p_sBasePath, $p_sEnvName, $p_sPageVer)
{
    $sPagePath = $p_sBasePath . '/page-' . $p_sEnvName . '/' . $p_sPageVer;
    if (is_dir($sPagePath)) {
        return $sPagePath;
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Page Path Not Found');
        exit();
    }
}

/**
 * 获取加载器路径
 *
 * 如果加载器不存在则返回404错误
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
        header('HTTP/1.0 404 Not Found');
        header('Error-Tag:Loader Path Not Found');
        exit();
    }
}

/**
 * 获取基础域名
 *
 * @param array $p_aLoaderParams
 * @param int $p_iPosition
 * @return string
 */
function getBaseDomain($p_aLoaderParams, $p_iPosition)
{
    return join('.', array_slice($p_aLoaderParams, $p_iPosition));
}