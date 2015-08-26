<?php

namespace inovia\tests\units\asserters;

use mageekguy\atoum;

class iban extends \inovia\test
{
    public function testIban()
    {
        $this->iban('GB87BARC20658244971655')->isValid();
    }
}
