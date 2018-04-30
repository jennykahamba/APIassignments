<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/
$string1=<<<WAN
"66.249.72.240".Chirchir,Olesaningo Mosiro.0760387482.KENYA.+254_"192.168.170.25".Wambua,Doe Mumbua.080023450.KENYA.+254_
"113.193.241.186".Vonbora,Katherina Luther.0600990033.GERMANY.+32
_"197.176.231.200".Boromir,Grommit Wallace.0100873901.IRELAND.+98_"113.193.241.186".Faramir,Edwards Jonathan.0200983729.AMERICA.+1_"77.77.7.7".Asaph,Aslan King.02990033.ISRAEL.+2
_"172.53.14.2".Huan,Valinor Hound.02880023.SPAIN.+26_
"113.193.241.18".Otoyo,Wafula Joel.0777799920.KENYA.+254
_"173.190.141.16".Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_
"153.193.241.186".SARATON,DAVID BREINARD.043899292.AMERICA.+1
_"103.153.211.186".Legolas,JOHN OWEN.074749292.ZAMBIA.+267_"123.19.201.186".Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_"163.193.241.156".Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_"150.133.10.23".Beren,Luthien Lovi.028403323.SPAIN.+26
WAN;
$list1 = str_replace("_",".",$string1);
$string2= explode(".",strtoupper($list1));
foreach($string2 as $word){
// echo "{$word}<br/>";
}

$string3=array_splice($string2,4,4);
foreach ($string3 as $word1) {
   echo " "."{$word1}";

}
echo "<br/>";
$string4=array_splice($string2,8,4);
foreach ($string4 as $word2) {
   echo " "."{$word2}";
}
echo "<br/>";
$string5=array_splice($string2,12,4);
foreach ($string5 as $word3) {
   echo " "."{$word3}";
}
echo "<br/>";
$string6=array_splice($string2,16,4);
foreach ($string6 as $word3) {
   echo " "."{$word3}";
}
echo "<br/>";
$string7=array_splice($string2,20,4);
foreach ($string7 as $word4) {
   echo " "."{$word4}";
}
echo "<br/>";
$string8=array_splice($string2,24,4);
foreach ($string8 as $word5) {
   echo " "."{$word5}";
}
echo "<br/>";
$string9=array_splice($string2,28,4);
foreach ($string9 as $word6) {
   echo " "."{$word6}";
}
echo "<br/>";
$string10=array_splice($string2,32,4);
foreach ($string10 as $word7) {
   echo " "."{$word7}";
}
echo "<br/>";
$string11=array_splice($string2,36,4);
foreach ($string11 as $word8) {
   echo " "."{$word8}";
}
echo "<br/>";
$string12=array_splice($string2,40,4);
foreach ($string12 as $word9) {
   echo " "."{$word9}";
}
echo "<br/>";
$string13=array_splice($string2,44,4);
foreach ($string13 as $word10) {
   echo " "."{$word10}";
}
echo "<br/>";
$string14=array_splice($string2,48,4);
foreach ($string14 as $word11) {
   echo " "."{$word11}";
}
echo "<br/>";
$string15=array_splice($string2,52,4);
foreach ($string15 as $word12) {
   echo " "."{$word12}";
}
echo "<br/>";
$string16=array_splice($string2,56,4);
foreach ($string16 as $word13) {
   echo " "."{$word13}";
}
echo "<br/>";
$string17=array_splice($string2,60,4);
foreach ($string17 as $word14) {
   echo " "."{$word14}";
}
echo "<br/>";
 echo "Summary: <p> total names: ";
 echo "<br/>";
 echo "total unique countries ";
 ?>
