# Slevomat.cz/Zľavomat.sk Partner API PHP knihovna #

Tento repozitář obsahuje jednoduchou PHP knihovnu pro komunikaci s Partner API Slevomat.cz a Zľavomat.sk.

Knihovna vyžaduje PHP verze 5 (nebo vyšší) a rozšíření curl a json.

Podrobný popis Partner API je dostupný na adrese http://www.slevomat.cz/pro-partnery/voucher-api resp. http://www.zlavomat.sk/pre-partnerov/voucher-api.

Použití ve vaší aplikaci
------------------------

Knihovnu je možné nainstalovat pomocí utility [Composer](https://getcomposer.org/) příkazem:

**composer require slevomat/partner-api-php-library**

Po jeho doběhnutí bude ve složce vendor/slevomat/partner-api-php-library vše potřebné naklonováno z Githubu.

A kód kterým vyzkoušíte že vše správně funguje může vypadat nějak takto:

```php
<?php
require_once '../vendor/autoload.php'; // Cesta k souboru autoload.php

$token = '123456789012345'; //token partnera
$voucherCode = '1234-5677-77-111'; // kód voucheru

// Instance klienta API; můžete si zvolit, zda komunikovat se Slevomat.cz nebo Zľavomat.sk
$client = new Slevomat_Client_Partner(Slevomat_Client_Partner::SERVER_CZ, $token);

// Ověření/uplatnění voucheru; návratová hodnota je boolean
// (voucher je/není platný resp. byl/nebyl uplatněn)
// a v proměnné $response je objekt s kompletní odpovědí serveru
$result = $client->checkVoucher($voucherCode, $response);
$result = $client->applyVoucher($voucherCode, $response);

// Obě metody je možné volat i bez druhého parametru,
// pokud vás zajímá pouze odpověď ano/ne
$result = $client->checkVoucher($voucherCode);
$result = $client->applyVoucher($voucherCode);

```



Testování
---------

K dispozici je také sada [PHPUnit](https://phpunit.de/) testů.

V souboru [tests/bootstrap.php](tests/bootstrap.php) můžete nastavit jiný něž ukázkový token a kód voucheru.

Testování se poté spustí příkazem **vendor/bin/phpunit**.
Pokud bude vše v pořádku bude výsledek vypadat takto:

```
PHPUnit 5.7.0 by Sebastian Bergmann and contributors.

.........................                                         25 / 25 (100%)

Time: 291 ms, Memory: 4.00MB

OK (25 tests, 7 assertions)
```

