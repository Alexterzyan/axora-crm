<?php

use Api\Simpla;

function smarty_function_api($params, &$smarty)
{
    $simpla = new Simpla();

    if (!isset($params['module']) || !isset($params['method'])) {
        return false;
    }

    $module = $params['module'];
    $method = $params['method'];
    $var = $params['var'];
    unset($params['module']);
    unset($params['method']);
    unset($params['var']);

    if (isset($params['_'])) {
        $res = $simpla->$module->$method($params['_']);
    } else {
        $res = $simpla->$module->$method($params);
    }
    $smarty->assign($var, $res);
}
