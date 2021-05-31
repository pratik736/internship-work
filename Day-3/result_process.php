<?php
$s[0] = $_POST['s1'];
$m[0] = $_POST['m1'];
$s[1] = $_POST['s2'];
$m[1] = $_POST['m2'];
$s[2] = $_POST['s3'];
$m[2] = $_POST['m3'];
$s[3] = $_POST['s4'];
$m[3] = $_POST['m4'];
$s[4] = $_POST['s5'];
$m[4] = $_POST['m5'];

$total = $percentage = 0;

echo "<center> <h1> Result </h1> <table>";

for($i=0;$i<5;$i++){
	echo "<tr>";
	echo "<td bgcolor='skyblue' width='100px' align='center'>$s[$i] </td>";
	echo "<td bgcolor='lightblue' width='100px' align='center'>$m[$i] </td>";
	$total = $total + $m[$i];
	echo "</tr>";
}

$percentage = $total/7.5;


if ($percentage >= 80) {
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>$total </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#75FF33' width='100px' align='center'>High Distinction </td>";
} elseif ($percentage >=60 && $percentage < 80) {
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#DBFF33' width='100px' align='center'>Distinction </td>";
}elseif ($percentage >=40 && $percentage < 60) {
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Total Marks </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#FFBD33' width='100px' align='center'>Pass </td>";
}else {
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Total Marks  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Percentage  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>$percentage </td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' align='center'>Grades  </td> 
			<td bgcolor='#FF5733' width='100px' align='center'>Fail </td>";
}
echo "</tr> </table> </center>";
?>