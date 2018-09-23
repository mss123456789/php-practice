<?php
$cookie_name="cookies";
$cookie_value="Sweta Sengar";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
session_start();
?>
<html>
<body>
<?php
$str="Hello World! How Are You Today";
$str1="Hello World! How Are You Today";
print_r(explode(" ", $str,7));
echo "</br>";

echo bin2hex($str);
$number=20;
$file= fopen("test.txt", "w");
fprintf($file, "This is %s, the number is %u ",$str,$number);
define("constant","Default Constant value",true);
function f1() {
echo Constant;

};
f1();
var_dump($str===$number);
echo "</br>";
$t=date("YYYY");
if($t< 2000) {
	echo "this is epic";
}
else {
	echo "This is phenomenon";
}
$arr=array("roopa"=> "63","hina" => "20", "kajal"=> "30","radha"=>"50");
echo "</br>";
sort($arr);
foreach ($arr as $x => $y) {
	echo "Key is = ".$x.", Value is: ".$y."</br>";
}
echo "</br>";
$a=69;
$b=65;
function add() {
	$GLOBALS['Z']= $GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $Z;
echo "</br>";
echo $_SERVER["HTTP_HOST"];
echo $_SERVER["SCRIPT_NAME"];
if($_SERVER["REQUEST_METHOD"]== "POST") {
	$name= htmlspecialchars($_REQUEST["fname"]);
	$rn= htmlspecialchars($_REQUEST["rname"]);
	$sn= htmlspecialchars($_REQUEST["sname"]);

	if(empty($name)) {
		echo "Enter the name";
	}
	else {
		echo $name;
	}
	if(empty($rn)) {
		echo "Enter here!";
	}
	else {
		echo $rn;
	}
	if(empty($sn)) {
		echo "Enter here now!";
	}
	else {
		echo $sn;
	}
}
echo "</br>";
$d= mktime(11,58,34,8,24,2009);
$d1=strtotime("next Saturday");
echo date("Y-m-d h:i:sa",$d);
echo "</br>".date("Y-m-d h:i:sa",$d1);
echo "</br>";
if(!isset($_COOKIE[$cookie_name])) {
	echo " New Cookie ".$cookie_name." Is Not Set. ";
}
else {
	echo "Cookie ".$cookie_name." Is Set.";
	echo "Value is ".$_COOKIE[$cookie_name];
}
echo "</br>";
$_SESSION['fav']="green";
$_SESSION['food']="pizza";
echo "Session variables are SET"."</br>";
echo $_SESSION['fav']." ".$_SESSION['food'];
print_r($_SESSION);
echo "</br>";

// use session_unset() and session_destroy() when deleting session variables.
// filter in php
$int=100;
if(!filter_var($int,FILTER_VALIDATE_INT)===false) {
	echo "Integer is valid";
}
else {
	echo "Integer is not valid";
}
echo "</br>";
$ar="manish@gmail.com";
$email= filter_var($ar,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
	echo "Email is valid!";
}
else{
	echo "Email is not valid!!";
}
echo "</br>";
// php error handling
$test=2;
if($test>=1) {
	echo "value must be 1 or below";
}
else {
	echo "Value must be greater than 1 ";
}
// exception handling
echo "</br>";
function checkno($no) {
	if($no>1){
		throw new exception("Value must be 1 or below");
	}
}
try {
	checkno(2);
	echo "If u see this , value is 1 or below";
}
catch(Exception $e) {
	echo $e->getMessage();
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	Enter your Name: <input type="text" name="fname">
	Enter your Father's Name: <input type="text" name="rname">
	Enter your Mother's Name: <input type="text" name="sname">
	<input type="submit" value="Submit">
</form>

</body>
</html>