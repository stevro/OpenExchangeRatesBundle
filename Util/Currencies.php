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

class Currencies {

    public static function CurrencyArray() {
        return array(
            'AUD' => array('name' => "Australian Dollar", 'symbol' => "A$", 'ASCII' => "A&#36;"),
            'CAD' => array('name' => "Canadian Dollar", 'symbol' => "$", 'ASCII' => "&#36;"),
            'CZK' => array('name' => "Czech Koruna", 'symbol' => "Kč", 'ASCII' => ""),
            'DKK' => array('name' => "Danish Krone", 'symbol' => "Kr", 'ASCII' => ""),
            'EUR' => array('name' => "Euro", 'symbol' => "€", 'ASCII' => "&#128;"),
            'HKD' => array('name' => "Hong Kong Dollar", 'symbol' => "$", 'ASCII' => "&#36;"),
            'HUF' => array('name' => "Hungarian Forint", 'symbol' => "Ft", 'ASCII' => ""),
            'ILS' => array('name' => "Israeli New Sheqel", 'symbol' => "₪", 'ASCII' => "&#8361;"),
            'JPY' => array('name' => "Japanese Yen", 'symbol' => "¥", 'ASCII' => "&#165;"),
            'MXN' => array('name' => "Mexican Peso", 'symbol' => "$", 'ASCII' => "&#36;"),
            'NOK' => array('name' => "Norwegian Krone", 'symbol' => "Kr", 'ASCII' => ""),
            'NZD' => array('name' => "New Zealand Dollar", 'symbol' => "$", 'ASCII' => "&#36;"),
            'PHP' => array('name' => "Philippine Peso", 'symbol' => "₱", 'ASCII' => ""),
            'PLN' => array('name' => "Polish Zloty", 'symbol' => "zł", 'ASCII' => ""),
            'GBP' => array('name' => "Pound Sterling", 'symbol' => "£", 'ASCII' => "&#163;"),
            'SGD' => array('name' => "Singapore Dollar", 'symbol' => "$", 'ASCII' => "&#36;"),
            'SEK' => array('name' => "Swedish Krona", 'symbol' => "kr", 'ASCII' => ""),
            'CHF' => array('name' => "Swiss Franc", 'symbol' => "CHF", 'ASCII' => ""),
            'TWD' => array('name' => "Taiwan New Dollar", 'symbol' => "NT$", 'ASCII' => "NT&#36;"),
            'THB' => array('name' => "Thai Baht", 'symbol' => "฿", 'ASCII' => "&#3647;"),
            'USD' => array('name' => "U.S. Dollar", 'symbol' => "$", 'ASCII' => "&#36;")
        );
    }

    public static function getCurrencyArray() {
        $initialCurrenciesArray = self::CurrencyArray();
        $currarray = array();
        foreach ($initialCurrenciesArray as $key => $val) {
            $currarray[$val['symbol']] = $key;
        }
        return $currarray;
    }

    public function getSymbol($code = 'USD') {

        if (!empty($this->currencies[$code]['ASCII'])) {

            return (string) $this->currencies[$code]['ASCII'];
        }

        return (string) $this->currencies[$code]['symbol'];
    }

}
