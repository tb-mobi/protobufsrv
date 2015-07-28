<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */

namespace Mobiplas {
/**
 * PinchangeRequest message
 */
class PinchangeRequest extends \ProtobufMessage
{
    /* Field index constants */
    const PHONE = 1;
    const PIN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONE => array(
            'name' => 'phone',
            'required' => true,
            'type' => 7,
        ),
        self::PIN => array(
            'name' => 'pin',
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
        $this->values[self::PIN] = null;
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
     * Sets value of 'pin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPin($value)
    {
        return $this->set(self::PIN, $value);
    }

    /**
     * Returns value of 'pin' property
     *
     * @return string
     */
    public function getPin()
    {
        return $this->get(self::PIN);
    }
}
}