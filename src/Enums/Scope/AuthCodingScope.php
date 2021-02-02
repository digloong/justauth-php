<?php

namespace JustAuth\Enums\Scope;

use JustAuth\Enums\Scope\Traits\ScopeAttributes;

/**
 * Class AuthCodingScope
 * @package JustAuth\Enums
 *
 * @method static self USER
 * @method static self USER_EMAIL
 * @method static self USER_PHONE
 * @method static self PROJECT
 * @method static self PROJECT_DEPOT
 * @method static self PROJECT_WIKI
 */

class AuthCodingScope extends \PhpEnum\ListEnum
{
    use ScopeAttributes;
    /**
     * scope含义，以description为准
     */
    const USER = ["user", "读取用户的基本信息", false];
    const USER_EMAIL = ["user:email", "读取用户的邮件", false];
    const USER_PHONE = ["user:phone", "读取用户的手机号", false];
    const PROJECT = ["project", "授权项目信息、项目列表，仓库信息，公钥列表、成员", false];
    const PROJECT_DEPOT = ["project:depot", "完整的仓库控制权限", false];
    const PROJECT_WIKI = ["project:wiki", "授权读取与操作 wiki", false];
}