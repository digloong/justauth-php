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
     * 授权响应状态码
     */
    private int code;

    /**
     * 授权响应信息
     */
    private string msg;

    /**
     * 授权响应数据，当且仅当 code = 2000 时返回
     */
    private array data;

    /**
     * 是否请求成功
     *
     * @return true or false
     */
    public function ok():boolean
    {
//        return this.code == AuthResponseStatus.SUCCESS.getCode();
    }

    public function serialize()
    {
        return serialize($this->attributes);
    }

    public function unserialize($serialized)
    {
        $this->attributes = unserialize($serialized) ?: [];
    }
}