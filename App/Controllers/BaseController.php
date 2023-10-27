<?php


namespace App\Controllers;

use App\Plugins\Di\Injectable;
use App\Plugins\Http\Response as Status;

class BaseController extends Injectable
{
    protected string $factoryName;
    protected string $boundModelName;
    /**
     * Constructor of this class
     */
    function __construct() {
        $this->factory = new $this->getFactoryName($this->db, $this->getBoundModelName);
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
