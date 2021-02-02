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
    private string accessToken;
    private int expireIn;
    private string refreshToken;
    private int refreshTokenExpireIn;
    private string uid;
    private string openId;
    private string accessCode;
    private string unionId;

    /**
     * Google附带属性
     */
    private string scope;
    private string tokenType;
    private string idToken;

    /**
     * 小米附带属性
     */
    private string macAlgorithm;
    private string macKey;

    /**
     * 企业微信附带属性
     *
     * @since 1.10.0
     */
    private string code;

    /**
     * Twitter附带属性
     *
     * @since 1.13.0
     */
    private string oauthToken;
    private string oauthTokenSecret;
    private string userId;
    private string screenName;
    private Boolean oauthCallbackConfirmed;
    public function serialize()
    {
        return serialize($this->attributes);
    }

    public function unserialize($serialized)
    {
        $this->attributes = unserialize($serialized) ?: [];
    }
}