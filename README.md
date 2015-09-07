inovia-team/atoum-assertions
=======

Provide another assertions to verify more complex elements.

How to use it
=======

Add inovia-team/atoum-assertions in your composer.json and extends your class
tests from `\inovia\test` instead of `atoum\test` and that's all

```
    "require-dev": {
         "atoum/atoum": "~2.0",
         "inovia-team/atoum-assertions": "~0.0"
     },
     "repositories": [
         {
           "type": "git",
           "url": "git@gitlab.inovia.fr:inovia-team/atoum-assertions.git"
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
