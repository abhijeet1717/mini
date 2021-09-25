<?php
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['password'];
$repasswd = $_POST['re_password'];

if($name=='' || $email==''|| $passwd==''||$repasswd==''){
    echo 'Fill the fields';
}

else if($passwd!=$repasswd){
    echo 'Password must be same'; 
}
else{
    $con = mysqli_Connect('localhost','root','');
    mysqli_select_Db($con,'newwebuserdata');
    $query = "Insert into userregistration(name,email,password) values('$name','$email','$passwd');";
    mysqli_query($con,$query);
    echo "Congrats! Account has been created";
    header("Location: http://localhost/mini/index.php");
    

}

?>