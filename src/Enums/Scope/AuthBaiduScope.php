<?php

namespace JustAuth\Enums\Scope;

use JustAuth\Enums\Scope\Traits\ScopeAttributes;

/**
 * Class AuthResponseStatus
 * @package JustAuth\Enums
 *
 * @method static self BASIC
 * @method static self SUPER_MSG
 * @method static self NETDISK
 * @method static self PUBLIC
 * @method static self HAO123
 */

class AuthBaiduScope extends \PhpEnum\ListEnum
{
    use ScopeAttributes;
    /**
     * scope含义，以description为准
     */
    const BASIC = ["basic", "用户基本权限，可以获取用户的基本信息 。", true];
    const SUPER_MSG = ["super_msg", "往用户的百度首页上发送消息提醒，相关API任何应用都能使用，但要想将消息提醒在百度首页显示，需要第三方在注册应用时额外填写相关信息。", false];
    const NETDISK = ["netdisk", "获取用户在个人云存储中存放的数据。", false];
    const PUBLIC = ["public", "可以访问公共的开放API。", false];
    const HAO123 = ["hao123", "可以访问Hao123 提供的开放API接口。该权限需要申请开通，请将具体的理由和用途发邮件给tuangou@baidu.com。", false];
}