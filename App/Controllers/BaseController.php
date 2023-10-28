<?php


namespace App\Controllers;

use App\Plugins\Di\Injectable;

class BaseController extends Injectable
{
    protected string $factoryName;
    protected string $boundModelName;

    /**
     * Constructor of this class
     */
    function __construct() {
        $this->factory = new $this->factoryName($this->db, $this->boundModelName);
    }

    /**
     * returns private property factoryName
     * @return string
     */
    private function getFactoryName(): string {
        return $this->factoryName;
    }
    /**
     * returns private property boundModelName
     * @return string
     */
    private function getBoundModelName(): string {
        return $this->BoundModelName;
    }
}
