<?php
$db = "localhost";
$login = "nttu94507";
$password = "xwzdtxzj7";
$db_name = "yuchih";
$db_link = mysqli_connect($db,$login,$password,$db_name);
if(@!$db_link){
    echo "連接失敗";
}
    else{
    echo "連接成功";
    

}

mysqli_query("set character set utf8",$db_link);

$sql_postname = $_POST['nameinput'];
$sql_postgender = $_POST['gender'];
$sql_postphone = $_POST['phone'];
$sql_postemail = $_POST['email'];

$sqlinput ="SELECT * FROM student";
$sqlinput_1 ="insert into student(name,gender,phone,email) value('$sql_postname','$sql_postgender','$sql_postphone','$sql_postemail')";
mysqli_query($db_link,$sqlinput);
mysqli_query($db_link,$sqlinput_1);

mysqli_close($db_link);
echo "輸入完成";

$name = $_POST['nameinput'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email']
?>

<html>
姓名：<?php echo $name?>;
性別：<?php echo $gender?>;
電話：<?php echo $phone?>;
Email:<?php echo $email?>;
</html>