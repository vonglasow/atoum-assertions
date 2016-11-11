<?php

namespace atoum\domainAssertions\tests\units\asserters\bank;

use atoum;

class iban extends atoum\test
{
    public function testIban()
    {
        $this->iban('GB87BARC20658244971655')->isValid();
    }
}
