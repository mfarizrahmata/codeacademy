<?php
/*
World Traveler

Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.

*/
echo "Calculate Our Expected Amount of USD";
$riel = 2103942;//cambodia
$kyat = 19092;//myanmar
$krones = 109;//norway
$lek = 9094;//albania

echo "riel : $riel\n";
echo "kyat : $kyat\n";
echo "krones : $krones\n";
echo "lek : $lek\n";

/*
Look up the exchange rate for each of those currencies. Save a variable for each exchange rate.
*/
$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;
/*
For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal.
*/
$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones =  $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";
echo "\nYour $kyat kyat were exchanged for $usd_from_kyat usd.";
echo "\nYour $krones krones were exchanged for $usd_from_krones usd.";
echo "\nYour $lek lek were exchanged for $usd_from_lek usd.\n";

/*
The currency exchange business takes a flat $1 fee per conversion. Calculate our final amount of USD and use echo to print it to the terminal
*/

$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek;

$final_amount_pretty = number_format($final_amount, 2, '.', '');
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount_pretty usd.\n";

// $dollars_only = $final_amount % 1000000000;
// echo $dollars_only."\n";;
// $change = $final_amount - $dollars_only;
// echo $change."\n";;
// $rounded_change = $change * 100;
// echo $rounded_change."\n";;
// $rounded_change %= 100;
// echo $rounded_change."\n";;
// $rounded_change /= 100;
// echo $rounded_change."\n";
// $final_amount = $dollars_only + $rounded_change;
// echo "\n".$final_amount;
