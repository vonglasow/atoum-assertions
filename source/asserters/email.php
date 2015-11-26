<?php

namespace testify\asserters;

use mageekguy\atoum;

class email extends atoum\asserters\phpstring
{
    public function isValid($failMessage = null)
    {
        $regex = "/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/";
        return $this->match($regex, $failMessage ?: $this->_('%s is not a valid email', $this));
    }
}
