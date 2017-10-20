<?php

namespace Gameserver\Models;

use Phalcon\Mvc\Model;

class Resource extends Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $map_resource_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $x;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $y;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $z;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $type_id;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field map_resource_id
     *
     * @param integer $map_resource_id
     * @return $this
     */
    public function setMapResourceId($map_resource_id)
    {
        $this->map_resource_id = $map_resource_id;

        return $this;
    }

    /**
     * Method to set the value of field x
     *
     * @param integer $x
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Method to set the value of field y
     *
     * @param integer $y
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Method to set the value of field z
     *
     * @param integer $z
     * @return $this
     */
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }

    /**
     * Method to set the value of field type_id
     *
     * @param integer $type_id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field map_resource_id
     *
     * @return integer
     */
    public function getMapResourceId()
    {
        return $this->map_resource_id;
    }

    /**
     * Returns the value of field x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Returns the value of field y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Returns the value of field z
     *
     * @return integer
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Returns the value of field type_id
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("gameserver");
        $this->setSource("resource");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'resource';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Resource[]|Resource|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Resource|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
