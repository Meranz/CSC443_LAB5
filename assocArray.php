?>

<?php
$monthDays = range(4,30);
print_r ($monthDays); 
foreach($monthDays as $key => $day30)
{
   if($day30 == 30)
   {
       echo "$key $day30 <br>";
   }
}
?>

<?php
function assign_key() { 
return 'd'; 
} 
$month['January'] = 1; 
$month['b'] = 2; 
$month['c'] = 3; 
$month[assign_key()] = 4;
$month['b'] = $month['a'] + $month['c'];

?>




</body>
</html> 