<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>

</head>

<body>
 <h1> Hello World!</h1>
<?php
//strings behave strange way- b is entity for BOLD in html
echo htmlentities("a<b>c");
?>
<hr>
<?php
$countrycode = 'DK';
switch  ($countrycode) {
	case 'SE';
		echo 'Sweeden';
		break;
		
	case 'DK';
		echo 'Denmark';
		break;
		
	default:
		echo 'Unknown countrycode';
	
	
	}
	?>
<hr>
<?php
$petlist = array('dog', 'cat', 'lion', 'parrot');

$r = rand(0,count($petlist)-1);
echo 'pet number'. $r. 'is'.$petlist[$r]. '<br>';

foreach ($petlist  as $pet) {
	echo 'Pet is'.$pet.'<br>';
	}
?>
<?php
function myFunction($str) {
	echo 'Weee - myFunction was called with the parameter '.$str.'<br>’.PHP_EQL';
}

myFunction('Test');

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	...
</form>

</body>
</html>