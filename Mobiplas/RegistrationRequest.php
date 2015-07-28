<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */

namespace Mobiplas {
/**
 * RegistrationRequest message
 */
class RegistrationRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FIRSTNAME = 1;
    const MIDDLENAME = 2;
    const LASTNAME = 3;
    const PHONE = 4;
    const EMAIL = 5;
    const CHANNEL = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FIRSTNAME => array(
            'name' => 'firstName',
            'required' => true,
            'type' => 7,
        ),
        self::MIDDLENAME => array(
            'name' => 'middleName',
            'required' => true,
            'type' => 7,
        ),
        self::LASTNAME => array(
            'name' => 'lastName',
            'required' => true,
            'type' => 7,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'required' => true,
            'type' => 7,
        ),
        self::EMAIL => array(
            'name' => 'email',
            'required' => true,
            'type' => 7,
        ),
        self::CHANNEL => array(
            'name' => 'channel',
            'required' => false,
            'type' => 5,
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
        $this->values[self::FIRSTNAME] = null;
        $this->values[self::MIDDLENAME] = null;
        $this->values[self::LASTNAME] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::EMAIL] = null;
        $this->values[self::CHANNEL] = null;
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
     * Sets value of 'firstName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstName($value)
    {
        return $this->set(self::FIRSTNAME, $value);
    }

    /**
     * Returns value of 'firstName' property
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->get(self::FIRSTNAME);
    }

    /**
     * Sets value of 'middleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMiddleName($value)
    {
        return $this->set(self::MIDDLENAME, $value);
    }

    /**
     * Returns value of 'middleName' property
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->get(self::MIDDLENAME);
    }

    /**
     * Sets value of 'lastName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastName($value)
    {
        return $this->set(self::LASTNAME, $value);
    }

    /**
     * Returns value of 'lastName' property
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->get(self::LASTNAME);
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->get(self::PHONE);
    }

    /**
     * Sets value of 'email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->get(self::EMAIL);
    }

    /**
     * Sets value of 'channel' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::CHANNEL, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return int
     */
    public function getChannel()
    {
        return $this->get(self::CHANNEL);
    }
}
}