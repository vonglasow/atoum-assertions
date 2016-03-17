<?php

namespace mageekguy\atoum\domainAssertions\tests\units\asserters\car;

use mageekguy\atoum;

class license extends atoum\test
{
    public function testipv4()
    {
        $this->license('AA-123-BE')->isValid();
        $this->license('AA 123 BE')->isValid();
        $this->license('AA123BE')->isValid();
    }
}

