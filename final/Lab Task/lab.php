<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<h1> Welcome to Registration</h1>
 
<?php
$name= "";
$nameerror= "";
$email = "";
$emailerror = "";
$gender = "";
$gendererror = "";

if(isset($_POST["submit"]))
{
if (empty ($_POST["name"]))
{
$nameerror="Name is req"; 
}
else{
$name= test_input($_POST["name"]); 
if (!preg_match("/^[a-zA-Z ]*$/",$name))  
{
    $nameerror ="Only letters and white space allowed";
}
}
if(empty($_POST["email"])){
    $emailerror = "Email is required";
}
else{
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    $emailerror = "Invalid email format";
}
}
if(empty($_POST["gender"])){
    $emailerror = "Gender is required";
}
else{
    $gender = test_input($_POST["gender"]);
}


}
function test_input($data)
{
$data = trim($data); 
return $data;
}
?>
 
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?><br><br>
Email : <input type="text" name ="email" value = "<?php echo $email;?>">
<?php echo $emailerror; ?><br><br>
Gender : <input type ="radio" name ="gender" value = "Female">Female
<input type ="radio" name ="gender" value = "Male">Male
<?php echo $gendererror; ?><br><br>
<input type="submit" name="submit" value="Submit">
 
<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror) && empty($emailerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Email: ".$email. "<br>";
echo "Gender: ".$gender." <br>";

}
?>
 
 </form>
</body>

</html>