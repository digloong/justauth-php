<?php


namespace JustAuth\Exceptions;


use JustAuth\Config\AuthSource;
use JustAuth\Enums\AuthResponseStatus;
use Throwable;

class AuthException extends \RuntimeException
{
    private $errorCode;
    private $errorMsg;
    private $previous;

    public function __construct()
    {
        $fun_args = func_get_args();
        if($fun_args[0] instanceof AuthResponseStatus){
            $this->errorCode = $fun_args[0]->getKey();
            $this->errorMsg = $fun_args[0]->getvalue();
            $this->previous = null;
            if(isset($fun_args[1]) && $fun_args[1] instanceof AuthSource){
                $this->previous = $fun_args[1];
            }
        }elseif ($fun_args[0] instanceof Throwable){
            $this->errorCode = 0;
            $this->errorMsg = "";
            $this->previous = $fun_args[0];
        }elseif (is_int($fun_args[0])){
            $this->errorCode = $fun_args[0];
            $this->errorMsg = $fun_args[1] ?? "";
            $this->previous = $fun_args[2] ?? ($fun_args[2] instanceof Throwable ? $fun_args[2] : null);
        }else{
            $this->errorMsg = $fun_args[0];
            $this->errorCode = AuthResponseStatus::FAILURE()->getKey();
            $this->previous = null;
            if(isset($fun_args[1]) && ($fun_args[1] instanceof AuthSource || $fun_args[1] instanceof Throwable)){
                $this->previous = $fun_args[1];
            }
        }
    }

    public function getErrorCode() {
        return $this->getCode();
    }

    public function getErrorMsg() {
        return $this->getMessage();
    }
}