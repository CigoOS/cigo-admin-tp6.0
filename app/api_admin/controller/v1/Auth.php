<?php
declare (strict_types=1);

namespace app\api_admin\controller\v1;

use app\api_admin\controller\CommonV1;
use app\cigo_admin_core\controller\AuthSetting;
use app\cigo_admin_core\validate\AddAuth;

/**
 * Class Auth
 * @package app\api_admin\controller\v1
 */
class Auth extends CommonV1
{
    use AuthSetting;

    /**
     * 添加权限节点
     */
    public function addRule()
    {
        return $this->addAuthRule();
    }

    /**
     * 修改权限节点
     */
    public function editRule()
    {
        return $this->editAuthRule();
    }

    /**
     * 获取权限节点级联列表
     */
    public function getRuleList()
    {
        return $this->getAuthRuleTreeList();
    }


    /**
     * 添加权限分组
     */
    public  function addGroup()
    {
        return $this->addAuthGroup();
    }

    /**
     * 修改权限分组
     */
    public function editGroup()
    {

        return $this->editAuthGroup();
    }

    /**
     * 配置权限分组权限
     */
    public function configGroupRule()
    {
        return $this->configAuthGroupRule();
    }

    /**
     * 获取权限分组列表
     */
    public function getGroupList()
    {
        return $this->getAuthGroupList();
    }
}
