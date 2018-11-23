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