<?php

namespace app\api_admin\library;

use app\BaseController;
use app\cigo_admin_core\library\traites\CheckArgs;

/**
 * Api接口基准类
 *
 * Class ApiBase
 * @package app\api_admin\library
 */
class ApiBase extends BaseController
{

    use CheckArgs;

    protected $args = [];

    protected function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub

        $this->checkTimeStamp();
        $this->checkSign();

        $this->args = input();
    }
}