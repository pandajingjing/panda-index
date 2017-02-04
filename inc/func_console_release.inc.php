<?php

/**
 * 命令行线上环境通用函数
 */

/**
 * 获取代码版本
 *
 * @return string
 */
function getCodeVer()
{
    $sVersionFile = PANDA_BASEPATH . '/version/' . PANDA_LOADER . '_' . PANDA_REQUEST_TYPE . '.ver';
    return '1.0';
}