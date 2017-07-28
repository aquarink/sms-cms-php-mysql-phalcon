<?php

class TbUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $page;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $user_create;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $user_stat;

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
        return 'tb_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbUser[]|TbUser|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbUser|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
