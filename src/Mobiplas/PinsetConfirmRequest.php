<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */

namespace Mobiplas {
/**
 * PinsetConfirmRequest message
 */
class PinsetConfirmRequest extends \ProtobufMessage
{
    /* Field index constants */
    const PHONE = 1;
    const NEWPIN = 2;
    const DYNPASS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONE => array(
            'name' => 'phone',
            'required' => true,
            'type' => 7,
        ),
        self::NEWPIN => array(
            'name' => 'newpin',
            'required' => true,
            'type' => 7,
        ),
        self::DYNPASS => array(
            'name' => 'dynpass',
            'required' => true,
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
        $this->values[self::PHONE] = null;
        $this->values[self::NEWPIN] = null;
        $this->values[self::DYNPASS] = null;
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
     * Sets value of 'newpin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewpin($value)
    {
        return $this->set(self::NEWPIN, $value);
    }

    /**
     * Returns value of 'newpin' property
     *
     * @return string
     */
    public function getNewpin()
    {
        return $this->get(self::NEWPIN);
    }

    /**
     * Sets value of 'dynpass' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDynpass($value)
    {
        return $this->set(self::DYNPASS, $value);
    }

    /**
     * Returns value of 'dynpass' property
     *
     * @return string
     */
    public function getDynpass()
    {
        return $this->get(self::DYNPASS);
    }
}
}