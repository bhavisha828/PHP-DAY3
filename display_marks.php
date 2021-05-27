<?php 
 $a = 31;
 $i = 36;
 $c = 30;
 $s = 30;
 $m = 39;

echo "<table border=1px solid>";
echo "<tr>";
echo "<td>";
$total = $a+$i+$c+$s+$m;
$percentage = ($total/500)*100; 

echo "The Total marks   =" . $total . "/500";

echo "<br/>The Percentage    = " . $percentage . "%";




if ($percentage >80) {
	echo "<td bgcolor='pink'><br/>DISTINCTION</td>";
}else if ($percentage >70) {
    echo "<td bgcolor='yellow'><br/>FIRST CLASS</td>";	
} else if ($percentage >60) {
	echo "<td bgcolor='lightblue'><br/>SECOND CLASS</td>";
}else if ($percentage >50) {
	echo "<td bgcolor='grey'><br/>THIRD CLASS</td>";
}else if($percentage <35){
	echo "<td bgcolor='red'><br/>FAIL</td>";
	
}
echo "</td>";
echo "</tr>";
echo "</table>";
?>