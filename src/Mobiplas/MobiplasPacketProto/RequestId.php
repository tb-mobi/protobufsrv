<?php
/**
 * Auto generated from mobi.proto at 2015-07-28 11:05:29
 *
 * mobiplas package
 */
namespace Mobiplas\MobiplasPacketProto {
/**
 * RequestId enum embedded in MobiplasPacketProto message
 */
final class RequestId
{
    const Registration = 0;
    const Login = 1;
    const Pinset = 2;
    const Pinchange = 3;
    const Accounts = 11;
    const Cards = 12;
    const History = 13;
    const Products = 14;
    const Transfer = 21;
    const Payment = 22;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Registration' => self::Registration,
            'Login' => self::Login,
            'Pinset' => self::Pinset,
            'Pinchange' => self::Pinchange,
            'Accounts' => self::Accounts,
            'Cards' => self::Cards,
            'History' => self::History,
            'Products' => self::Products,
            'Transfer' => self::Transfer,
            'Payment' => self::Payment,
        );
    }
}
}