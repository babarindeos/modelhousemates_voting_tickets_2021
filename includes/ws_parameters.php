<?php
//Parameters

//Parameters for building Invoice Number
$idPrefix = "FUN/HOS";
//$collectionSession = date("Y") . (date('y')+1); //Application Academic Session
$acadaSession = "2019/2020";
$resultAcadaSession = "2017/2018"; //Session to use for HighFlyers

$collectionSession = "201920";

$fpyAcadaSession = "2018/2019";
$cadeseAcadaSession = "2018/2019";
$batchBAcadaSession = "2017/2018";
$utmePrefix = "8"; //Current prefix of UTME for this year to avoid illegal entry

$freshersMatricPattern = '#^2018[0-9]{4}$#';
$ugPattern = '#^8[0-9]{7}[A-Z]{2}$|^20[0-9]{6}$#';
$returningPattern = '#^20[0-9]{6}$#';
$pgPattern = '#^PG/[0-9]{2}/[1|2]/[0-9]{4}$#';
//$pgPattern = '#^(PG/[0-9]{2}/[0-9]{4})|(PG/[0-9]{2}/[1|2]/[0-9]{4})$#';

$collectionAPP = "APP"; //Collection Purpose (cellection1 = APP (Application)
//$collection2 = "$hostelCode"; //(Hostel Initials set in application)
$batch1 = "1";
$batch2 = "2";

$title = "$acadaSession Academic Session: Hostel Accommodation";

$payPrefix = "FUN/FEE";

$gracePeriod = 3; //Number of days given for payment to be made

?>
