<?php
 $str1="PHP";
 $str2="Programming";
 echo "Origina : $str1 and $str2<br>";
 $l1=strlen($str1);
 $l2=strlen($str2);
 echo "Length : $l1 and $l2<br>";
 $add=$str1+$str2;
 echo "Addition : $add <br>";
 $ord=ord($add);
 echo "Ord of $add : $ord <br>";
 $chr=chr($ord);
 echo "chr of $ord : $chr <br>";
 echo "strlen of $chr : ".strlen($chr)."<br>";
?>