<?php
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