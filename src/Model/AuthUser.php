<?php


namespace JustAuth\Models;

/**
 * 授权回调时的参数类
 *
 * @author Digloong.zhang (1020856880(a)qq.com)
 * @since 1.8.0
 */
class AuthCallBack implements \Serializable
{
    /**
     * 用户第三方系统的唯一id。在调用方集成该组件时，可以用uuid + source唯一确定一个用户
     *
     * @since 1.3.3
     */
    private string uuid;
    /**
     * 用户名
     */
    private string username;
    /**
     * 用户昵称
     */
    private string nickname;
    /**
     * 用户头像
     */
    private string avatar;
    /**
     * 用户网址
     */
    private string blog;
    /**
     * 所在公司
     */
    private string company;
    /**
     * 位置
     */
    private string location;
    /**
     * 用户邮箱
     */
    private string email;
    /**
     * 用户备注（各平台中的用户个人介绍）
     */
    private string remark;
    /**
     * 性别
     */
    private AuthUserGender gender;
    /**
     * 用户来源
     */
    private string source;
    /**
     * 用户授权的token信息
     */
    private AuthToken token;
    /**
     * 第三方平台返回的原始用户信息
     */
    private JSONObject rawUserInfo;

    public function serialize()
    {
        return serialize($this->attributes);
    }

    public function unserialize($serialized)
    {
        $this->attributes = unserialize($serialized) ?: [];
    }
}