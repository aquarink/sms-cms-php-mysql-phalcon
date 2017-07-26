<?php

class TbSigninUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_ulog;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $name_user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $ip_user;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $sign_date;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("smsgw_engine_log");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tb_signin_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbSigninUser[]|TbSigninUser|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TbSigninUser|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
