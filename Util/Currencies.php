<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Currencies
 *
 * @author jedibee-dev
 */

namespace Mrzard\OpenExchangeRatesBundle\Util;

class Currencies
{

    public static function CurrencyArray()
    {
        return array(
            'AED' => array('name' => 'United Arab Emirates Dirham', 'shortName'=>'AE'),
            'AFN' => array('name' => 'Afghan Afghani', 'shortName'=>'AF'),
            'ALL' => array('name' => 'Albanian Lek', 'shortName'=>'AL'),
            'AMD' => array('name' => 'Armenian Dram', 'shortName'=>'AM'),
            'ANG' => array('name' => 'Netherlands Antillean Guilder', 'shortName'=>'NL'),
            'AOA' => array('name' => 'Angolan Kwanza', 'shortName'=>'AO'),
            'ARS' => array('name' => 'Argentine Peso', 'shortName'=>'AR'),
            'AUD' => array('name' => 'Australian Dollar', 'symbol' => "A$", 'ASCII' => "A&#36;", 'shortName'=>'AU'),
            'AWG' => array('name' => 'Aruban Florin', 'shortName'=>'AW'),
            'AZN' => array('name' => 'Azerbaijani Manat', 'shortName'=>'AZ'),
            'BAM' => array('name' => 'Bosnia-Herzegovina Convertible Mark', 'shortName'=>'BA'),
            'BBD' => array('name' => 'Barbadian Dollar', 'shortName'=>'BB'),
            'BDT' => array('name' => 'Bangladeshi Taka', 'shortName'=>'BD'),
            'BGN' => array('name' => 'Bulgarian Lev', 'shortName'=>'BG'),
            'BHD' => array('name' => 'Bahraini Dinar', 'shortName'=>'BH'),
            'BIF' => array('name' => 'Burundian Franc', 'shortName'=>'BI'),
            'BMD' => array('name' => 'Bermudan Dollar', 'shortName'=>'BM'),
            'BND' => array('name' => 'Brunei Dollar', 'shortName'=>'BN'),
            'BOB' => array('name' => 'Bolivian Boliviano', 'shortName'=>'BO'),
            'BRL' => array('name' => 'Brazilian Real', 'shortName'=>'BR'),
            'BSD' => array('name' => 'Bahamian Dollar', 'shortName'=>'BS'),
            'BTN' => array('name' => 'Bhutanese Ngultrum', 'shortName'=>'BT'),
            'BWP' => array('name' => 'Botswanan Pula', 'shortName'=>'BW'),
            'BYR' => array('name' => 'Belarusian Ruble', 'shortName'=>'BY'),
            'BZD' => array('name' => 'Belize Dollar', 'shortName'=>'BZ'),
            'CAD' => array('name' => 'Canadian Dollar', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'CA'),
            'CDF' => array('name' => 'Congolese Franc', 'shortName'=>'CG'),
            'CHF' => array('name' => 'Swiss Franc', 'symbol' => "CHF", 'ASCII' => "", 'shortName'=>'CH'),
            'CLF' => array('name' => 'Chilean Unit of Account (UF)', 'shortName'=>'UF'),
            'CLP' => array('name' => 'Chilean Peso', 'shortName'=>'CL'),
            'CNY' => array('name' => 'Chinese Yuan', 'shortName'=>'CN'),
            'COP' => array('name' => 'Colombian Peso', 'shortName'=>'CO'),
            'CRC' => array('name' => 'Costa Rican Colón', 'shortName'=>'CR'),
            'CUP' => array('name' => 'Cuban Peso', 'shortName'=>'CU'),
            'CVE' => array('name' => 'Cape Verdean Escudo', 'shortName'=>'CV'),
            'CZK' => array('name' => 'Czech Republic Koruna', 'symbol' => "Kč", 'ASCII' => "", 'shortName'=>'CZ'),
            'DJF' => array('name' => 'Djiboutian Franc', 'shortName'=>'DJ'),
            'DKK' => array('name' => 'Danish Krone', 'symbol' => "Kr", 'ASCII' => "", 'shortName'=>'DK'),
            'DOP' => array('name' => 'Dominican Peso', 'shortName'=>'DM'),
            'DZD' => array('name' => 'Algerian Dinar', 'shortName'=>'DZ'),
            'EEK' => array('name' => 'Estonian Kroon', 'shortName'=>'EE'),
            'EGP' => array('name' => 'Egyptian Pound', 'shortName'=>'EG'),
            'ERN' => array('name' => 'Eritrean Nakfa', 'shortName'=>'ER'),
            'ETB' => array('name' => 'Ethiopian Birr', 'shortName'=>'ET'),
            'EUR' => array('name' => 'Euro', 'symbol' => "€", 'ASCII' => "&#128;", 'shortName'=>'EN'),
            'FJD' => array('name' => 'Fijian Dollar', 'shortName'=>'FJ'),
            'FKP' => array('name' => 'Falkland Islands Pound', 'shortName'=>'FK'),
            'GBP' => array('name' => 'British Pound Sterling', 'symbol' => "£", 'ASCII' => "&#163;", 'shortName'=>'GB'),
            'GEL' => array('name' => 'Georgian Lari', 'shortName'=>'GE'),
            'GGP' => array('name' => 'Guernsey Pound', 'shortName'=>'GC'),
            'GHS' => array('name' => 'Ghanaian Cedi', 'shortName'=>'GH'),
            'GIP' => array('name' => 'Gibraltar Pound', 'shortName'=>'GI'),
            'GMD' => array('name' => 'Gambian Dalasi', 'shortName'=>'GM'),
            'GNF' => array('name' => 'Guinean Franc', 'shortName'=>'GN'),
            'GTQ' => array('name' => 'Guatemalan Quetzal', 'shortName'=>'GT'),
            'GYD' => array('name' => 'Guyanaese Dollar', 'shortName'=>'GY'),
            'HKD' => array('name' => 'Hong Kong Dollar', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'HK'),
            'HNL' => array('name' => 'Honduran Lempira', 'shortName'=>'HN'),
            'HRK' => array('name' => 'Croatian Kuna', 'shortName'=>'HR'),
            'HTG' => array('name' => 'Haitian Gourde', 'shortName'=>'HT'),
            'HUF' => array('name' => 'Hungarian Forint', 'symbol' => "Ft", 'ASCII' => "", 'shortName'=>'HU'),
            'IDR' => array('name' => 'Indonesian Rupiah', 'shortName'=>'ID'),
            'ILS' => array('name' => 'Israeli New Sheqel', 'symbol' => "₪", 'ASCII' => "&#8361;", 'shortName'=>'IL'),
            'INR' => array('name' => 'Indian Rupee', 'shortName'=>'IN'),
            'IQD' => array('name' => 'Iraqi Dinar', 'shortName'=>'IQ'),
            'IRR' => array('name' => 'Iranian Rial', 'shortName'=>'IR'),
            'ISK' => array('name' => 'Icelandic Króna', 'shortName'=>'IS'),
            'JEP' => array('name' => 'Jersey Pound', 'shortName'=>'JE'),
            'JMD' => array('name' => 'Jamaican Dollar', 'shortName'=>'JM'),
            'JOD' => array('name' => 'Jordanian Dinar', 'shortName'=>'JO'),
            'JPY' => array('name' => 'Japanese Yen', 'symbol' => "¥", 'ASCII' => "&#165;", 'shortName'=>'JP'),
            'KES' => array('name' => 'Kenyan Shilling', 'shortName'=>'KE'),
            'KGS' => array('name' => 'Kyrgystani Som', 'shortName'=>'KG'),
            'KHR' => array('name' => 'Cambodian Riel', 'shortName'=>'KH'),
            'KMF' => array('name' => 'Comorian Franc', 'shortName'=>'KM'),
            'KPW' => array('name' => 'North Korean Won', 'shortName'=>'KP'),
            'KRW' => array('name' => 'South Korean Won', 'shortName'=>'KR'),
            'KWD' => array('name' => 'Kuwaiti Dinar', 'shortName'=>'KW'),
            'KYD' => array('name' => 'Cayman Islands Dollar', 'shortName'=>'KY'),
            'KZT' => array('name' => 'Kazakhstani Tenge', 'shortName'=>'KZ'),
            'LAK' => array('name' => 'Laotian Kip', 'shortName'=>'LA'),
            'LBP' => array('name' => 'Lebanese Pound', 'shortName'=>'LB'),
            'LKR' => array('name' => 'Sri Lankan Rupee', 'shortName'=>'LK'),
            'LRD' => array('name' => 'Liberian Dollar', 'shortName'=>'LR'),
            'LSL' => array('name' => 'Lesotho Loti', 'shortName'=>'LS'),
            'LTL' => array('name' => 'Lithuanian Litas', 'shortName'=>'LT'),
            'LVL' => array('name' => 'Latvian Lats', 'shortName'=>'LV'),
            'LYD' => array('name' => 'Libyan Dinar', 'shortName'=>'LY'),
            'MAD' => array('name' => 'Moroccan Dirham', 'shortName'=>'MA'),
            'MDL' => array('name' => 'Moldovan Leu', 'shortName'=>'MD'),
            'MKD' => array('name' => 'Macedonian Denar', 'shortName'=>'MK'),
            'MMK' => array('name' => 'Myanma Kyat', 'shortName'=>'MM'),
            'MNT' => array('name' => 'Mongolian Tugrik', 'shortName'=>'MN'),
            'MOP' => array('name' => 'Macanese Pataca', 'shortName'=>'MO'),
            'MRO' => array('name' => 'Mauritanian Ouguiya', 'shortName'=>'MR'),
            'MTL' => array('name' => 'Maltese Lira', 'shortName'=>'MT'),
            'MUR' => array('name' => 'Mauritian Rupee', 'shortName'=>'MU'),
            'MVR' => array('name' => 'Maldivian Rufiyaa', 'shortName'=>'MV'),
            'MWK' => array('name' => 'Malawian Kwacha', 'shortName'=>'MW'),
            'MXN' => array('name' => 'Mexican Peso', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'MX'),
            'MYR' => array('name' => 'Malaysian Ringgit', 'shortName'=>'MY'),
            'MZN' => array('name' => 'Mozambican Metical', 'shortName'=>'MZ'),
            'NAD' => array('name' => 'Namibian Dollar', 'shortName'=>'NA'),
            'NGN' => array('name' => 'Nigerian Naira', 'shortName'=>'NG'),
            'NIO' => array('name' => 'Nicaraguan Córdoba', 'shortName'=>'NI'),
            'NOK' => array('name' => 'Norwegian Krone', 'symbol' => "Kr", 'ASCII' => "", 'shortName'=>'NO'),
            'NPR' => array('name' => 'Nepalese Rupee', 'shortName'=>'NP'),
            'NZD' => array('name' => 'New Zealand Dollar', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'NZ'),
            'OMR' => array('name' => 'Omani Rial', 'shortName'=>'OM'),
            'PAB' => array('name' => 'Panamanian Balboa', 'shortName'=>'PA'),
            'PEN' => array('name' => 'Peruvian Nuevo Sol', 'shortName'=>'PE'),
            'PGK' => array('name' => 'Papua New Guinean Kina', 'shortName'=>'PG'),
            'PHP' => array('name' => 'Philippine Peso', 'symbol' => "₱", 'ASCII' => "", 'shortName'=>'PH'),
            'PKR' => array('name' => 'Pakistani Rupee', 'shortName'=>'PK'),
            'PLN' => array('name' => 'Polish Zloty', 'symbol' => "zł", 'ASCII' => "", 'shortName'=>'PL'),
            'PYG' => array('name' => 'Paraguayan Guarani', 'shortName'=>'PY'),
            'QAR' => array('name' => 'Qatari Rial', 'shortName'=>'QA'),
            'RON' => array('name' => 'Romanian Leu', 'symbol' => "RON", 'ASCII' => "", 'shortName'=>'RO'),
            'RSD' => array('name' => 'Serbian Dinar', 'shortName'=>'RS'),
            'RUB' => array('name' => 'Russian Ruble', 'shortName'=>'RU'),
            'RWF' => array('name' => 'Rwandan Franc', 'shortName'=>'RW'),
            'SAR' => array('name' => 'Saudi Riyal', 'shortName'=>'SA'),
            'SBD' => array('name' => 'Solomon Islands Dollar', 'shortName'=>'SB'),
            'SCR' => array('name' => 'Seychellois Rupee', 'shortName'=>'SC'),
            'SDG' => array('name' => 'Sudanese Pound', 'shortName'=>'SD'),
            'SEK' => array('name' => 'Swedish Krona', 'symbol' => "kr", 'ASCII' => "", 'shortName'=>'SE'),
            'SGD' => array('name' => 'Singapore Dollar', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'SG'),
            'SHP' => array('name' => 'Saint Helena Pound', 'shortName'=>'SH'),
            'SLL' => array('name' => 'Sierra Leonean Leone', 'shortName'=>'SL'),
            'SOS' => array('name' => 'Somali Shilling', 'shortName'=>'SO'),
            'SRD' => array('name' => 'Surinamese Dollar', 'shortName'=>'SR'),
            'STD' => array('name' => 'São Tomé and Príncipe Dobra', 'shortName'=>'ST'),
            'SVC' => array('name' => 'Salvadoran Colón', 'shortName'=>'SV'),
            'SYP' => array('name' => 'Syrian Pound', 'shortName'=>'SY'),
            'SZL' => array('name' => 'Swazi Lilangeni', 'shortName'=>'SZ'),
            'THB' => array('name' => 'Thai Baht', 'symbol' => "฿", 'ASCII' => "&#3647;", 'shortName'=>'TH'),
            'TJS' => array('name' => 'Tajikistani Somoni', 'shortName'=>'TJ'),
            'TMT' => array('name' => 'Turkmenistani Manat', 'shortName'=>'TM'),
            'TND' => array('name' => 'Tunisian Dinar', 'shortName'=>'TN'),
            'TOP' => array('name' => 'Tongan Paʻanga', 'shortName'=>'TO'),
            'TRY' => array('name' => 'Turkish Lira', 'shortName'=>'TR'),
            'TTD' => array('name' => 'Trinidad and Tobago Dollar', 'shortName'=>'TT'),
            'TWD' => array('name' => 'New Taiwan Dollar', 'symbol' => "NT$", 'ASCII' => "NT&#36;", 'shortName'=>'TW'),
            'TZS' => array('name' => 'Tanzanian Shilling', 'shortName'=>'TZ'),
            'UAH' => array('name' => 'Ukrainian Hryvnia', 'shortName'=>'UA'),
            'UGX' => array('name' => 'Ugandan Shilling', 'shortName'=>'UG'),
            'USD' => array('name' => 'United States Dollar', 'symbol' => "$", 'ASCII' => "&#36;", 'shortName'=>'US'),
            'UYU' => array('name' => 'Uruguayan Peso', 'shortName'=>'UR'),
            'UZS' => array('name' => 'Uzbekistan Som', 'shortName'=>'UZ'),
            'VEF' => array('name' => 'Venezuelan Bolívar Fuerte', 'shortName'=>'VE'),
            'VND' => array('name' => 'Vietnamese Dong', 'shortName'=>'VN'),
            'VUV' => array('name' => 'Vanuatu Vatu', 'shortName'=>'VU'),
            'WST' => array('name' => 'Samoan Tala', 'shortName'=>'WS'),
            'YER' => array('name' => 'Yemeni Rial', 'shortName'=>'YE'),
            'ZAR' => array('name' => 'South African Rand', 'shortName'=>'ZA'),
            'ZMW' => array('name' => 'Zambian Kwacha', 'shortName'=>'ZM'),
            'ZWL' => array('name' => 'Zimbabwean Dollar', 'shortName'=>'ZW'),
        );
    }

    public static function getCurrencyArray()
    {
        $initialCurrenciesArray = self::CurrencyArray();
        $currarray = array();
        foreach ($initialCurrenciesArray as $key => $val) {
            $currarray[$key . '-' . $val['shortName']] = $key;
        }
        return $currarray;
    }

    public function getSymbol($code = 'USD')
    {

        if (!empty($this->currencies[$code]['ASCII'])) {

            return (string) $this->currencies[$code]['ASCII'];
        }

        return (string) $this->currencies[$code]['symbol'];
    }

    public static function getCurrencyByIsoCode($code = 'USD')
    {
        return self::CurrencyArray()[$code];
    }

}