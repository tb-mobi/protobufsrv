<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */

namespace Mobiplas {
/**
 * Fault message
 */
class Fault extends \ProtobufMessage
{
    /* Field index constants */
    const INTERNALCODE = 1;
    const EXTERNALCODE = 2;
    const EXTERNALMESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INTERNALCODE => array(
            'name' => 'internalCode',
            'required' => true,
            'type' => 5,
        ),
        self::EXTERNALCODE => array(
            'name' => 'externalCode',
            'required' => true,
            'type' => 5,
        ),
        self::EXTERNALMESSAGE => array(
            'name' => 'externalMessage',
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
        $this->values[self::INTERNALCODE] = null;
        $this->values[self::EXTERNALCODE] = null;
        $this->values[self::EXTERNALMESSAGE] = null;
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
     * Sets value of 'internalCode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInternalCode($value)
    {
        return $this->set(self::INTERNALCODE, $value);
    }

    /**
     * Returns value of 'internalCode' property
     *
     * @return int
     */
    public function getInternalCode()
    {
        return $this->get(self::INTERNALCODE);
    }

    /**
     * Sets value of 'externalCode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExternalCode($value)
    {
        return $this->set(self::EXTERNALCODE, $value);
    }

    /**
     * Returns value of 'externalCode' property
     *
     * @return int
     */
    public function getExternalCode()
    {
        return $this->get(self::EXTERNALCODE);
    }

    /**
     * Sets value of 'externalMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternalMessage($value)
    {
        return $this->set(self::EXTERNALMESSAGE, $value);
    }

    /**
     * Returns value of 'externalMessage' property
     *
     * @return string
     */
    public function getExternalMessage()
    {
        return $this->get(self::EXTERNALMESSAGE);
    }
}
}