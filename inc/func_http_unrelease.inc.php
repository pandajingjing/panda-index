<?php

/**
 * http站点线下环境通用函数
 */

/**
 * 获取代码版本
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @param int $p_iPosition            
 * @return string
 */
function getCodeVer($p_aLoaderParams, $p_iParamsLength, $p_iPosition)
{
    return $p_aLoaderParams[$p_iParamsLength - $p_iPosition];
}

/**
 * 获取页面版本
 *
 * @param array $p_aLoaderParams            
 * @param int $p_iParamsLength            
 * @param int $p_iPosition            
 * @return string
 */
function getPageVer($p_aLoaderParams, $p_iParamsLength, $p_iPosition)
{
    return getCodeVer($p_aLoaderParams, $p_iParamsLength, $p_iPosition);
}