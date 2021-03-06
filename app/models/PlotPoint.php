<?php

namespace Gameserver\Models;

use Phalcon\Mvc\Model;

class PlotPoint extends Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $map_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $x;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
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
     * Method to set the value of field map_id
     *
     * @param integer $map_id
     * @return $this
     */
    public function setMapId($map_id)
    {
        $this->map_id = $map_id;

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
     * Returns the value of field map_id
     *
     * @return integer
     */
    public function getMapId()
    {
        return $this->map_id;
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
        $this->setSource("plot_point");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'plot_point';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlotPoint[]|PlotPoint|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PlotPoint|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
