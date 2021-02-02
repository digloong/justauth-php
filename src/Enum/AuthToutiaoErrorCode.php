<?php

namespace JustAuth\Enums;

/**
 * Class AuthResponseStatus
 * @package JustAuth\Enums
 *
 * @method static self EC0
 * @method static self EC1
 * @method static self EC2
 * @method static self EC3
 * @method static self EC4
 * @method static self EC5
 * @method static self EC6
 * @method static self EC7
 * @method static self EC8
 * @method static self EC9
 * @method static self EC10
 * @method static self EC11
 * @method static self EC12
 * @method static self EC13
 * @method static self EC21
 * @method static self EC999
 */

class AuthToutiaoErrorCode extends \PhpEnum\ArrayEnum
{
    /**
     * 0：正常；
     * other：调用异常，具体异常内容见{@code desc}
     */
    const EC0 = [0, "接口调用成功"];
    const EC1 = [1, "API配置错误，未传入Client Key"];
    const EC2 = [2, "API配置错误，Client Key错误，请检查是否和开放平台的ClientKey一致"];
    const EC3 = [3, "没有授权信息"];
    const EC4 = [4, "响应类型错误"];
    const EC5 = [5, "授权类型错误"];
    const EC6 = [6, "client_sconst ECret错误"];
    const EC7 = [7, "authorize_code过期"];
    const EC8 = [8, "指定url的scheme不是https"];
    const EC9 = [9, "接口内部错误，请联系头条技术"];
    const EC10 = [10, "access_token过期"];
    const EC11 = [11, "缺少access_token"];
    const EC12 = [12, "参数缺失"];
    const EC13 = [13, "url错误"];
    const EC21 = [21, "域名与登记域名不匹配"];
    const EC999 = [999, "未知错误，请联系头条技术"];
}