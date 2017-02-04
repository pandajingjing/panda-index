<?php

/**
 * http站点线上环境通用函数
 */

/**
 * 获取代码版本
 *
 * @return string
 */
function getCodeVer()
{
    $sVersionFile = PANDA_BASEPATH . '/version/code_' . PANDA_LOADER . '_' . PANDA_REQUEST_TYPE . '.ver';
    return '1.0';
}

/**
 * 获取页面版本
 *
 * @return string
 */
function getPageVer()
{
    $sVersionFile = PANDA_BASEPATH . '/version/page_' . PANDA_LOADER . '_' . PANDA_REQUEST_TYPE . '.ver';
    return '1.0';
}