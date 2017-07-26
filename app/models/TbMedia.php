<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Db\RawValue;

class TbMedia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=8, nullable=false)
     */
    public $id_media;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $name_media;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $code_media;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $create_media;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $update_media;

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
        return 'tb_media';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbMedia[]|TbMedia|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbMedia|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public function beforeCreate() {
        $this->create_media = new RawValue('now()');
        $this->update_media = new RawValue('now()');
    }

}
