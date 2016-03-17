<?php

namespace mageekguy\atoum\domainAssertions\asserters\bank;

use mageekguy\atoum;

class cb extends atoum\asserters\phpstring
{
    private $prefix = '/^';
    private $suffix = '$/';
    private $visa = '4[0-9]{12}(?:[0-9]{3})?';
    private $mastercard = '5[1-5][0-9]{14}';
    private $americanExpress = '3[47][0-9]{13}';
    private $dinersClub = '3(?:0[0-5]|[68][0-9])[0-9]{11}';
    private $discover = '6(?:011|5[0-9]{2})[0-9]{12}';
    private $jcb = '(?:2131|1800|35\d{3})\d{11}';
    private $or = '|';

    public function setWith($mixed)
    {
        parent::setWith($mixed);
        $regex = $this->prefix .
            $this->visa . $this->or .
            $this->mastercard . $this->or .
            $this->americanExpress . $this->or .
            $this->dinersClub . $this->or .
            $this->discover . $this->or .
            $this->jcb .
            $this->suffix;

        return $this->match($regex, $this->_('%s is not a valid cb', $this));
    }

    public function isVisa($failMessage = null)
    {
        return $this->match($this->prefix . $this->visa . $this->suffix, $this->_('%s is not a valid Visa', $this));
    }

    public function isMasterCard($failMessage = null)
    {
        return $this->match($this->prefix . $this->mastercard . $this->suffix, $this->_('%s is not a valid Mastercard', $this));
    }

    public function isAmericanExpress($failMessage = null)
    {
        return $this->match($this->prefix . $this->americanExpress . $this->suffix, $this->_('%s is not a valid American Express', $this));
    }

    public function isDinersClub($failMessage = null)
    {
        return $this->match($this->prefix . $this->dinersClub . $this->suffix, $this->_('%s is not a valid Diners Club', $this));
    }

    public function isDiscover($failMessage = null)
    {
        return $this->match($this->prefix . $this->discover . $this->suffix, $this->_('%s is not a valid Discover', $this));
    }

    public function isJcb($failMessage = null)
    {
        return $this->match($this->prefix . $this->jcb . $this->suffix, $this->_('%s is not a valid JCB', $this));
    }
}
