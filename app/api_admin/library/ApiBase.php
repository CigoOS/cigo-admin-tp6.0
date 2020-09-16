<?php

namespace app\api_admin\library;

use app\BaseController;

/**
 * Api接口基准类
 *
 * Class ApiBase
 * @package app\api_admin\library
 */
class ApiBase extends BaseController
{
    protected $moduleName = 'admin';

    protected $args = [];

    protected function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub

        $this->args = input();
    }
}