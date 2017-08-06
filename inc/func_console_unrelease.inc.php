<?php
namespace PandaIndex;

/**
 * 命令行线下环境通用函数
 */

/**
 * 获取代码版本
 *
 * @param array $p_aLoaderParams            
 * @return string
 */
function getCodeVer($p_aLoaderParams)
{
    return isset($p_aLoaderParams[3]) ? $p_aLoaderParams[3] : '';
}