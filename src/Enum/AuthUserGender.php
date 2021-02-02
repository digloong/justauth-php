<?php

namespace JustAuth\Enums;

/**
 * Class AuthResponseStatus
 * @package JustAuth\Enums
 *
 * @method static self OK
 * @method static self FAILURE
 * @method static self NOT_IMPLEMENTED
 * @method static self PARAMETER_INCOMPLETE
 * @method static self UNSUPPORTED
 * @method static self NO_AUTH_SOURCE
 * @method static self UNIDENTIFIED_PLATFORM
 * @method static self ILLEGAL_REDIRECT_URI
 * @method static self ILLEGAL_REQUEST
 * @method static self ILLEGAL_CODE
 * @method static self ILLEGAL_STATUS
 * @method static self REQUIRED_REFRESH_TOKEN
 */

class AuthUserGender extends \PhpEnum\ArrayEnum
{
    /**
     * MALE/FAMALE为正常值，通过{@link AuthUserGender#getRealGender = [String)}方法获取真实的性别
     * UNKNOWN为容错值，部分平台不会返回用户性别，为了方便统一，使用UNKNOWN标记所有未知或不可测的用户性别信息
     */
    const MALE = ["1", "男"];
    const FEMALE = ["0", "女"];
    const UNKNOWN = ["-1", "未知"];

    /**
     * 获取用户的实际性别，常规网站
     *
     * @param string originalGender 用户第三方标注的原始性别
     * @return AuthUserGender
     */
    public static function getRealGender(string $originalGender) {
        if (null == $originalGender || self::UNKNOWN()->getKey()->equals($originalGender)) {
            return self::UNKNOWN;
        }
        $males = ["m", "男", "1", "male"];
        if (in_array(strtolower($originalGender), $males)) {
            return self::MALE;
        }
        return self::FEMALE;
    }
}