<?php

namespace atoum\domainAssertions\asserters\car;

use atoum;

class license extends atoum\asserters\phpstring
{
    public function isValid($failMessage = null)
    {
        $regex = "/^[A-Z]{2}[\- ]*\d{3}[\- ]*[A-Z]{2}$/";
        return $this->match($regex, $failMessage ?: $this->_('%s is not a valid car license', $this));
    }
}

