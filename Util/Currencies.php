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
            'AED' => array('name' => 'United Arab Emirates Dirham'),
            'AFN' => array('name' => 'Afghan Afghani'),
            'ALL' => array('name' => 'Albanian Lek'),
            'AMD' => array('name' => 'Armenian Dram'),
            'ANG' => array('name' => 'Netherlands Antillean Guilder'),
            'AOA' => array('name' => 'Angolan Kwanza'),
            'ARS' => array('name' => 'Argentine Peso'),
            'AUD' => array('name' => 'Australian Dollar', 'symbol' => "A$", 'ASCII' => "A&#36;"),
            'AWG' => array('name' => 'Aruban Florin'),
            'AZN' => array('name' => 'Azerbaijani Manat'),
            'BAM' => array('name' => 'Bosnia-Herzegovina Convertible Mark'),
            'BBD' => array('name' => 'Barbadian Dollar'),
            'BDT' => array('name' => 'Bangladeshi Taka'),
            'BGN' => array('name' => 'Bulgarian Lev'),
            'BHD' => array('name' => 'Bahraini Dinar'),
            'BIF' => array('name' => 'Burundian Franc'),
            'BMD' => array('name' => 'Bermudan Dollar'),
            'BND' => array('name' => 'Brunei Dollar'),
            'BOB' => array('name' => 'Bolivian Boliviano'),
            'BRL' => array('name' => 'Brazilian Real'),
            'BSD' => array('name' => 'Bahamian Dollar'),
            'BTC' => array('name' => 'Bitcoin'),
            'BTN' => array('name' => 'Bhutanese Ngultrum'),
            'BWP' => array('name' => 'Botswanan Pula'),
            'BYR' => array('name' => 'Belarusian Ruble'),
            'BZD' => array('name' => 'Belize Dollar'),
            'CAD' => array('name' => 'Canadian Dollar', 'symbol' => "$", 'ASCII' => "&#36;"),
            'CDF' => array('name' => 'Congolese Franc'),
            'CHF' => array('name' => 'Swiss Franc', 'symbol' => "CHF", 'ASCII' => ""),
            'CLF' => array('name' => 'Chilean Unit of Account (UF)'),
            'CLP' => array('name' => 'Chilean Peso'),
            'CNY' => array('name' => 'Chinese Yuan'),
            'COP' => array('name' => 'Colombian Peso'),
            'CRC' => array('name' => 'Costa Rican Colón'),
            'CUP' => array('name' => 'Cuban Peso'),
            'CVE' => array('name' => 'Cape Verdean Escudo'),
            'CZK' => array('name' => 'Czech Republic Koruna', 'symbol' => "Kč", 'ASCII' => ""),
            'DJF' => array('name' => 'Djiboutian Franc'),
            'DKK' => array('name' => 'Danish Krone', 'symbol' => "Kr", 'ASCII' => ""),
            'DOP' => array('name' => 'Dominican Peso'),
            'DZD' => array('name' => 'Algerian Dinar'),
            'EEK' => array('name' => 'Estonian Kroon'),
            'EGP' => array('name' => 'Egyptian Pound'),
            'ERN' => array('name' => 'Eritrean Nakfa'),
            'ETB' => array('name' => 'Ethiopian Birr'),
            'EUR' => array('name' => 'Euro', 'symbol' => "€", 'ASCII' => "&#128;"),
            'FJD' => array('name' => 'Fijian Dollar'),
            'FKP' => array('name' => 'Falkland Islands Pound'),
            'GBP' => array('name' => 'British Pound Sterling', 'symbol' => "£", 'ASCII' => "&#163;"),
            'GEL' => array('name' => 'Georgian Lari'),
            'GGP' => array('name' => 'Guernsey Pound'),
            'GHS' => array('name' => 'Ghanaian Cedi'),
            'GIP' => array('name' => 'Gibraltar Pound'),
            'GMD' => array('name' => 'Gambian Dalasi'),
            'GNF' => array('name' => 'Guinean Franc'),
            'GTQ' => array('name' => 'Guatemalan Quetzal'),
            'GYD' => array('name' => 'Guyanaese Dollar'),
            'HKD' => array('name' => 'Hong Kong Dollar', 'symbol' => "$", 'ASCII' => "&#36;"),
            'HNL' => array('name' => 'Honduran Lempira'),
            'HRK' => array('name' => 'Croatian Kuna'),
            'HTG' => array('name' => 'Haitian Gourde'),
            'HUF' => array('name' => 'Hungarian Forint', 'symbol' => "Ft", 'ASCII' => ""),
            'IDR' => array('name' => 'Indonesian Rupiah'),
            'ILS' => array('name' => 'Israeli New Sheqel', 'symbol' => "₪", 'ASCII' => "&#8361;"),
            'IMP' => array('name' => 'Manx pound'),
            'INR' => array('name' => 'Indian Rupee'),
            'IQD' => array('name' => 'Iraqi Dinar'),
            'IRR' => array('name' => 'Iranian Rial'),
            'ISK' => array('name' => 'Icelandic Króna'),
            'JEP' => array('name' => 'Jersey Pound'),
            'JMD' => array('name' => 'Jamaican Dollar'),
            'JOD' => array('name' => 'Jordanian Dinar'),
            'JPY' => array('name' => 'Japanese Yen', 'symbol' => "¥", 'ASCII' => "&#165;"),
            'KES' => array('name' => 'Kenyan Shilling'),
            'KGS' => array('name' => 'Kyrgystani Som'),
            'KHR' => array('name' => 'Cambodian Riel'),
            'KMF' => array('name' => 'Comorian Franc'),
            'KPW' => array('name' => 'North Korean Won'),
            'KRW' => array('name' => 'South Korean Won'),
            'KWD' => array('name' => 'Kuwaiti Dinar'),
            'KYD' => array('name' => 'Cayman Islands Dollar'),
            'KZT' => array('name' => 'Kazakhstani Tenge'),
            'LAK' => array('name' => 'Laotian Kip'),
            'LBP' => array('name' => 'Lebanese Pound'),
            'LKR' => array('name' => 'Sri Lankan Rupee'),
            'LRD' => array('name' => 'Liberian Dollar'),
            'LSL' => array('name' => 'Lesotho Loti'),
            'LTL' => array('name' => 'Lithuanian Litas'),
            'LVL' => array('name' => 'Latvian Lats'),
            'LYD' => array('name' => 'Libyan Dinar'),
            'MAD' => array('name' => 'Moroccan Dirham'),
            'MDL' => array('name' => 'Moldovan Leu'),
            'MGA' => array('name' => 'Malagasy Ariary'),
            'MKD' => array('name' => 'Macedonian Denar'),
            'MMK' => array('name' => 'Myanma Kyat'),
            'MNT' => array('name' => 'Mongolian Tugrik'),
            'MOP' => array('name' => 'Macanese Pataca'),
            'MRO' => array('name' => 'Mauritanian Ouguiya'),
            'MTL' => array('name' => 'Maltese Lira'),
            'MUR' => array('name' => 'Mauritian Rupee'),
            'MVR' => array('name' => 'Maldivian Rufiyaa'),
            'MWK' => array('name' => 'Malawian Kwacha'),
            'MXN' => array('name' => 'Mexican Peso', 'symbol' => "$", 'ASCII' => "&#36;"),
            'MYR' => array('name' => 'Malaysian Ringgit'),
            'MZN' => array('name' => 'Mozambican Metical'),
            'NAD' => array('name' => 'Namibian Dollar'),
            'NGN' => array('name' => 'Nigerian Naira'),
            'NIO' => array('name' => 'Nicaraguan Córdoba'),
            'NOK' => array('name' => 'Norwegian Krone', 'symbol' => "Kr", 'ASCII' => ""),
            'NPR' => array('name' => 'Nepalese Rupee'),
            'NZD' => array('name' => 'New Zealand Dollar', 'symbol' => "$", 'ASCII' => "&#36;"),
            'OMR' => array('name' => 'Omani Rial'),
            'PAB' => array('name' => 'Panamanian Balboa'),
            'PEN' => array('name' => 'Peruvian Nuevo Sol'),
            'PGK' => array('name' => 'Papua New Guinean Kina'),
            'PHP' => array('name' => 'Philippine Peso', 'symbol' => "₱", 'ASCII' => ""),
            'PKR' => array('name' => 'Pakistani Rupee'),
            'PLN' => array('name' => 'Polish Zloty', 'symbol' => "zł", 'ASCII' => ""),
            'PYG' => array('name' => 'Paraguayan Guarani'),
            'QAR' => array('name' => 'Qatari Rial'),
            'RON' => array('name' => 'Romanian Leu', 'symbol' => "RON", 'ASCII' => ""),
            'RSD' => array('name' => 'Serbian Dinar'),
            'RUB' => array('name' => 'Russian Ruble'),
            'RWF' => array('name' => 'Rwandan Franc'),
            'SAR' => array('name' => 'Saudi Riyal'),
            'SBD' => array('name' => 'Solomon Islands Dollar'),
            'SCR' => array('name' => 'Seychellois Rupee'),
            'SDG' => array('name' => 'Sudanese Pound'),
            'SEK' => array('name' => 'Swedish Krona', 'symbol' => "kr", 'ASCII' => ""),
            'SGD' => array('name' => 'Singapore Dollar', 'symbol' => "$", 'ASCII' => "&#36;"),
            'SHP' => array('name' => 'Saint Helena Pound'),
            'SLL' => array('name' => 'Sierra Leonean Leone'),
            'SOS' => array('name' => 'Somali Shilling'),
            'SRD' => array('name' => 'Surinamese Dollar'),
            'STD' => array('name' => 'São Tomé and Príncipe Dobra'),
            'SVC' => array('name' => 'Salvadoran Colón'),
            'SYP' => array('name' => 'Syrian Pound'),
            'SZL' => array('name' => 'Swazi Lilangeni'),
            'THB' => array('name' => 'Thai Baht', 'symbol' => "฿", 'ASCII' => "&#3647;"),
            'TJS' => array('name' => 'Tajikistani Somoni'),
            'TMT' => array('name' => 'Turkmenistani Manat'),
            'TND' => array('name' => 'Tunisian Dinar'),
            'TOP' => array('name' => 'Tongan Paʻanga'),
            'TRY' => array('name' => 'Turkish Lira'),
            'TTD' => array('name' => 'Trinidad and Tobago Dollar'),
            'TWD' => array('name' => 'New Taiwan Dollar', 'symbol' => "NT$", 'ASCII' => "NT&#36;"),
            'TZS' => array('name' => 'Tanzanian Shilling'),
            'UAH' => array('name' => 'Ukrainian Hryvnia'),
            'UGX' => array('name' => 'Ugandan Shilling'),
            'USD' => array('name' => 'United States Dollar', 'symbol' => "$", 'ASCII' => "&#36;"),
            'UYU' => array('name' => 'Uruguayan Peso'),
            'UZS' => array('name' => 'Uzbekistan Som'),
            'VEF' => array('name' => 'Venezuelan Bolívar Fuerte'),
            'VND' => array('name' => 'Vietnamese Dong'),
            'VUV' => array('name' => 'Vanuatu Vatu'),
            'WST' => array('name' => 'Samoan Tala'),
            'XAF' => array('name' => 'CFA Franc BEAC'),
            'XAG' => array('name' => 'Silver (troy ounce)'),
            'XAU' => array('name' => 'Gold (troy ounce)'),
            'XCD' => array('name' => 'East Caribbean Dollar'),
            'XDR' => array('name' => 'Special Drawing Rights'),
            'XOF' => array('name' => 'CFA Franc BCEAO'),
            'XPF' => array('name' => 'CFP Franc'),
            'YER' => array('name' => 'Yemeni Rial'),
            'ZAR' => array('name' => 'South African Rand'),
            'ZMK' => array('name' => 'Zambian Kwacha (pre-2013)'),
            'ZMW' => array('name' => 'Zambian Kwacha'),
            'ZWL' => array('name' => 'Zimbabwean Dollar'),
        );
    }

    public static function getCurrencyArray()
    {
        $initialCurrenciesArray = self::CurrencyArray();
        $currarray = array();
        foreach ($initialCurrenciesArray as $key => $val) {
            $currarray[$val[$key]] = $key;
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