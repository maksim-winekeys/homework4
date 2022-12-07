<?php
include "../src/ServiceInterface.php";
include "../src/TariffInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDopDriver.php";
include "../src/TariffHour.php";

/** @var TariffInterface $tariff */
//$tariff = new TariffHour(5,15);
$tariff = new TariffBasic(5,60);
$tariff->addService(new ServiceGPS(15));
//$tariff->addService(new ServiceDopDriver(100));
echo $tariff -> countPrice();