<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Db\RawValue;

class TbPartner extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=8, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=8, nullable=true)
     */
    public $id_partner;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $name_partner;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $create_partner;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $update_partner;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("smsgw_engine_db");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tb_partner';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbPartner[]|TbPartner|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbPartner|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public function beforeCreate() {
        $this->create_partner = new RawValue('now()');
        $this->update_partner = new RawValue('now()');
    }
}
