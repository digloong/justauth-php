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

class AuthResponseStatus extends \PhpEnum\ArrayEnum
{
    /**
     * 2000：正常；
     * other：调用异常
     */
    const SUCCESS = [2000, "Success"];
    const FAILURE = [5000, "Failure"];
    const NOT_IMPLEMENTED = [5001, "Not Implemented"];
    const PARAMETER_INCOMPLETE = [5002, "Parameter incomplete"];
    const UNSUPPORTED = [5003, "Unsupported operation"];
    const NO_AUTH_SOURCE = [5004, "AuthDefaultSource cannot be null"];
    const UNIDENTIFIED_PLATFORM = [5005, "Unidentified platform"];
    const ILLEGAL_REDIRECT_URI = [5006, "Illegal redirect uri"];
    const ILLEGAL_REQUEST = [5007, "Illegal request"];
    const ILLEGAL_CODE = [5008, "Illegal code"];
    const ILLEGAL_STATUS = [5009, "Illegal state"];
    const REQUIRED_REFRESH_TOKEN = [5010, "The refresh token is required; it must not be null"];
}