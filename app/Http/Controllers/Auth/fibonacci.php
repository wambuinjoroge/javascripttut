 <?php
//fibonacci series

$num1 = 1;
$num2 = 2;
$sum=0;

 for ($i=0; $i < 100; $i++) { //not working,rekebisha
// 	# code...
	if ($sum=$num1+$num2) {
		# code...
      $sum = $sum +$num2;	                                    
	}
}
	echo $sum;

?>

   </body>
</html>


$div_class = array("left","middle","right");

$input_array = array('a','b','c','d','e','f');

$chunks = array_chunk($input_array,2);

foreach($chunks as $i => $myChunk){
	echo "<div></div>"
	echo "<ul>"

	foreach($myChunk as $newChunk){
	echo "<li>";
	echo $newChunk;
	echo "</li>"
	}
	echo"</ul>"
	echo "</div>"
}



 