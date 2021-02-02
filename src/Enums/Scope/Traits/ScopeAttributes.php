<?php
namespace JustAuth\Enums\Scope\Traits;

trait ScopeAttributes
{
    private $scope;
    private $description;
    private $isDefault;

    protected final function ListEnum($list)
    {
        list($this->scope, $this->description, $this->isDefault) = $list;
    }

    /**
     * @return int
     */
    public final static function length():int
    {
        return 3;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

}