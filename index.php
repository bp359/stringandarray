<!DOCTYPE html>
<html>
<head>
	<h1 align="center"><font color="Purple">10 String Functions</font></h1>
	<title>String and Array Functions</title>
</head>
<body>
	<?php
		echo "<h2>1. Function to count the String Length</h2>";
		echo "<h3> The function is strlen($str)</h3> <br>";
		echo " The string is BIKALPA <br>";
		echo " The output is : ";
		$str= "BIKALPA";
		echo strlen($str);
		echo '<hr>';
	?>

	<?php
	echo "<h2> 2. Function to convert a string into an array </h2>";
	echo "<h3> The function is str_split($str1)</h3><br>";
	echo " The string is Information Systems<br>";
		$str1="Information Systems";
		$array=str_split($str1);
	print_r($array);
	echo "<hr>";
	?>
	<?php
		echo "<h2> 3. Function to format a number with grouped thousand</h2>";
		echo "<h3> The function is number_format()</h3><br>";
		echo " The number is 1322.6188 <br>";
		$var1="1322.6188";
		$var2=number_format($var1);
		echo " The output is : $var2";
		echo "<hr>";
	?>
	<?php
		echo "<h2> 4. Function that wraps a string to a given number of characters</h2>";
		echo "<h3> The function is wordwrap() <br></h3>";
		echo " The string is AAAABBBBCCCCDDDDEEEE <br>";
		echo " The output is : ";
			$str2="AAAABBBBCCCCDDDDEEEE";
			$str3=wordwrap($str2,4,"\n",true);
		echo "$str3\n";
		echo "<hr>";
	?>

	<?php
		echo "<h2> 5. Function to convert uppercase to lowercase </h2>";
		echo "<h3> The function is strtolower()</h3><br>";
		echo " The string is : BIKALPA PAHARI <br>";
			$str4="BIKALPA PAHARI";
			$str5= strtolower($str4);
		echo " The output is : $str5";
		echo"<hr>";
	?>

	<?php
		echo "<h2> 6. Function to return a formatted string </h2>";
		echo "<h3> The function is sprintf()</h3><br>";
		echo " The string is : lucky number is 7 My <br>";
			$var3="7";
			$str7="lucky number";
			$str8=" My %s is %d";
		echo sprintf($str8,$str7,$var3);
		echo"<hr>";
	?>

	<?php
		echo "<h2> 7. Function to calcilate similarity in the strings </h2>";
		echo "<h3> The function is similar_text()</h3>";
		echo " The strings are New York New Jersey North Carolina";
			$str9='New York';
			$str10='New Jersey';
			$str11=' North Carolina';
		echo"<br>";
		echo similar_text($str9,$str10);
		echo"<br>";
		echo similar_text($str9, $str11);
		echo"<br>";
		echo similar_text($str10, $str11);
		echo"<hr>";
	?>

	<?php
		echo "<h2>8.Function to convery first alphabet of a string to uppercase</h2><br>";
		echo "<h3> The function is ucfirst()</h3>";
		echo " The string is : bikalpa <br>";
			$str12='bikalpa';
			$str13=ucfirst($str12);
		echo " The output is : $str13";
		echo "<hr>";
	?>

	<?php
		echo " <h2> 9. Function to convert binary into hexadecimal </h2><br>";
		echo "<h3> The function is dechex()</h3>";
		echo " The binary number is :- 00101 <br>";
			$var4="00101";
			$hex = dechex($var4);
		echo " The output is : $hex";
		echo "<hr>";
	?>

	<?php
		echo "<h2> 10. Function to return part of a string </h2> </br>";
		echo "<h3> The function is substr()</h3>";
		echo " The string is <b>Bikalpa</b> <br>";
			$str14="Bikalpa";
			$str15=substr($str14,0,-2);
		echo " The output is : - <b>$str15</b>";
		echo"<hr>";
	?>

	<h1 align="center"> <font color="Purple"> 10 Array Functions</font></h1>

	<?php
		echo"<h2>1. Function to change array case </h2>";
		echo "<h3> The function is array_change_key_case()</h3>";
		echo " The input is New York New Jersey<br>";
		$input_array = array("New York" => 1, "New Jersey" => 4);
		print_r(array_change_key_case($input_array, CASE_UPPER));
		echo "<hr>";
	?>

	<?php
		echo "<h2> 2. Function to pop the element at the end of array</h2>";
		echo " The function is array_pop()<br> ";
		echo " The input of array is New York, New Jersey , Delaware, Maryland <br>";
		$stack = array("New York", "New Jersey", " Delaware", "Maryland");
		$state = array_pop($stack);
		print_r($stack);
		echo "<hr>";
	?>

	<?php
	
		echo "<h2> 3. Function to sort an array in reverse order</h2>";
		echo " <h3>The function is rsort()</h3>";
		$states = array("New York", "New Jersey", " Delaware", "Maryland");
		rsort($states);
		foreach ($states as $key => $val) {
    	echo "$key = $val\n<br>";
    	;
			}	
		echo "<hr>";
	?>

	<?php 
		echo "<h2> 4. Sorting an array by key in reverse order";
		echo "<h3> The function is krsort()</h3>";
		$states = array("New York", "New Jersey", " Delaware", "Maryland");
		krsort($states);
		foreach ($states as $key => $val) {
    	echo "$key = $val\n<br>";

	
		}	
	echo "<hr>";
	?>

	<?php
		echo "<h2> 5.Function that replaces an element of an array </h2> ";
		echo "<h3> The function is array_replace()</h3>";
		echo " The output is <br>";
			$base=array("New York","New Jersey", " Delaware", "Maryland");
			$rep=array(0=>"North Carolina",4=>"Washington");
			$rep1=array(0=>"Rhode Island");
			$hu=array_replace($base,$rep,$rep1);
		print_r($hu);
		echo "<hr>";
	?>

	<?php
		echo "<h2> 6. Function that fills the array with values</h2>";
		echo "<h3> The function is array_fill()</h3>";
		echo "<h3> The output is :</h3> ";
			$var5=array_fill(5, 6, 'New Jersey');
			$var6=array_fill(-3,4, 'New York');
		print_r($var5);
		print_r($var6);
		echo'<hr>';
	 ?>
	<?php
		echo "<h2> 7. Function that computes the difference of arrays </h2>";
		echo "<h3> The function is array_diff()</h3> ";
		echo " The output is <br>";
		$array1= array("a"=>"Washington", "New Jersey", "New York", "New Hampsire");
		$array2=array("b"=>"Washington","Rhode Island","New Jersey");
		$result=array_diff($array1,$array2);
		print_r($result);
		echo "<hr>";
	?>	

	<?php
		echo "<h2> 8. Function that randomly shuffles an array </h2> ";
		echo "<h3> The function is range () </h3>";
		echo " The output will show randomly shuffled number from 1-50 : <br>";
		$no=range(1,50);
		shuffle($no);
		foreach($no as $number){
			echo"$number";
		}
		echo"<hr>";	
	?>

	<?php
		echo "<h2> 9. Function that removes duplicate values from the array </h2>";
		echo " <h3> The function is array_unique() </h3>";
		echo " <h3> The output is : <br></h3>";
			$i=array("x"=> "Washington", "New Jersey","y"=> "Washington","New Jersey", " New Hampsire ", " Rhode Island");
			$o=array_unique($i);
		print_r($o);
		echo"<hr>";
	?>
	<?php
		echo "<h2> 10. Function that counts the elements in the array </h2>";
		echo "<h3> The function is count()</h3>";
		echo " The output is : <br>";

		$variable[0]= 2;
		$variable[1]= 3;
		$variable[2]= 7;
		$variable[3]= 9;
		$variable[4]= 6;
		$variable[5]=7;

		$result=count($variable);
		echo $result;
		echo"<hr>";
	?>	
</body>
</html>