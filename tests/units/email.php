<?php

namespace inovia\tests\units\asserters;

use mageekguy\atoum;

class email extends \inovia\test
{
    public function testEmail()
    {
        $this->email('sdf@sdf.fr')->isValid();
        $this->email('alexis@vonglasow.com')->isValid();
        $this->email('mail@foo.bar.de')->isValid();
    }
}
