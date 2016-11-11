atoum/domain-assertions [![Build Status](https://travis-ci.org/vonglasow/domain-assertions.svg?branch=master)](https://travis-ci.org/vonglasow/domain-assertions)
=======

Provide another assertions to verify more complex elements.

How to use it
=======

```
    "require-dev": {
         "atoum/atoum": "~2.0",
         "atoum/domain-assertions": "~0.0"
     }
```

How to contribute
======

Clone the project and run `make all` now you can add class and test then make a PR ;)
To check all tests just run `make test`

Assertions
=======

- iban:
    * isValid
- email:
    * isValid
- cb:
    * isVisa
    * isMasterCard
    * isAmericanExpress
    * isDinersClub
    * isDiscover
    * isJcb
- ip:
    * isIpv4
    * isIpv6

