vonglasow/atoum-assertions
=======

Provide another assertions to verify more complex elements.

How to use it
=======

```
    "require-dev": {
         "atoum/atoum": "~2.0",
         "vonglasow/atoum-assertions": "~0.0"
     },
     "repositories": [
         {
           "type": "git",
           "url": "git@github.com:vonglasow/atoum-assertions.git"
         }
     ],
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

