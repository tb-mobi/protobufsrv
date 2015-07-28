<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */

namespace Mobiplas {
/**
 * Response message
 */
class Response extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const REQUEST = 2;
    const NEEDCONFIRM = 3;
    const MESSAGE = 4;
    const TODO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::REQUEST => array(
            'name' => 'request',
            'required' => true,
            'type' => 7,
        ),
        self::NEEDCONFIRM => array(
            'name' => 'needConfirm',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
        self::TODO => array(
            'name' => 'todo',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CODE] = null;
        $this->values[self::REQUEST] = null;
        $this->values[self::NEEDCONFIRM] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::TODO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'request' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRequest($value)
    {
        return $this->set(self::REQUEST, $value);
    }

    /**
     * Returns value of 'request' property
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->get(self::REQUEST);
    }

    /**
     * Sets value of 'needConfirm' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNeedConfirm($value)
    {
        return $this->set(self::NEEDCONFIRM, $value);
    }

    /**
     * Returns value of 'needConfirm' property
     *
     * @return int
     */
    public function getNeedConfirm()
    {
        return $this->get(self::NEEDCONFIRM);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }

    /**
     * Sets value of 'todo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTodo($value)
    {
        return $this->set(self::TODO, $value);
    }

    /**
     * Returns value of 'todo' property
     *
     * @return string
     */
    public function getTodo()
    {
        return $this->get(self::TODO);
    }
}
}