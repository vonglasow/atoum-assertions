<?php

namespace testify\tests\units\asserters\bank;

use mageekguy\atoum;

class cb extends atoum\test
{
    public function testcb()
    {
        $this->cb('4234567812345678')->isVisa();
        $this->cb('5234567812345678')->isMasterCard();
        $this->cb('378282246310005')->isAmericanExpress();
        $this->cb('30569309025904')->isDinersClub();
        $this->cb('6011111111111117')->isDiscover();
        $this->cb('3530111333300000')->isJcb();
    }
}
