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
?>

<html>
姓名：<?php echo $_POST['nameinput']?>;
性別：<?php echo $_POST['gender']?>;
電話：<?php echo $_POST['phone']?>;
Email:<?php echo $_POST['email']?>;
</html>