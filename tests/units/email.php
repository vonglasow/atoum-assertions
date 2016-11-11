<?php

namespace atoum\domainAssertions\tests\units\asserters;

use atoum;

class email extends atoum\test
{
    public function testEmail()
    {
        $this->email('sdf@sdf.fr')->isValid();
        $this->email('alexis@vonglasow.com')->isValid();
        $this->email('mail@foo.bar.de')->isValid();
    }
}
