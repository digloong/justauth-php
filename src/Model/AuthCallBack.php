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
     * 访问AuthorizeUrl后回调时带的参数code
     */
    private string code;

    /**
     * 访问AuthorizeUrl后回调时带的参数auth_code，该参数目前只使用于支付宝登录
     */
    private string auth_code;

    /**
     * 访问AuthorizeUrl后回调时带的参数state，用于和请求AuthorizeUrl前的state比较，防止CSRF攻击
     */
    private string state;

    /**
     * 华为授权登录接受code的参数名
     *
     * @since 1.10.0
     */
    private string authorization_code;

    /**
     * Twitter回调后返回的oauth_token
     *
     * @since 1.13.0
     */
    private string oauth_token;

    /**
     * Twitter回调后返回的oauth_verifier
     *
     * @since 1.13.0
     */
    private string oauth_verifier;

    public function serialize()
    {
        return serialize($this->attributes);
    }

    public function unserialize($serialized)
    {
        $this->attributes = unserialize($serialized) ?: [];
    }
}