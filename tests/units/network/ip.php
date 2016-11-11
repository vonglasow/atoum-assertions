<?php

namespace atoum\domainAssertions\tests\units\asserters\network;

use atoum;

class ip extends atoum\test
{
    public function testipv4()
    {
        $this->ip('192.168.0.1')->isIpv4();
        $this->ip('255.255.255.255')->isIpv4();
        $this->ip('0.0.0.0')->isIpv4();
        $this->ip('000.000.000.000')->isIpv4();
        $this->ip('010.000.000.000')->isIpv4();
    }

    public function testipv6()
    {
        $this->ip('2001:0db8:0000:85a3:0000:0000:ac1f:8001')->isIpv6();
        $this->ip('2001:db8:0:85a3:0:0:ac1f:8001')->isIpv6();
        $this->ip('2001:db8:0:85a3::ac1f:8001')->isIpv6();
        $this->ip('2001:db8::1:0:0:1')->isIpv6();
        $this->ip('2001:db8:0:0:1::1')->isIpv6();
    }
}
