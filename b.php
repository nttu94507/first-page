<?php

//phpinfo();
echo "member=".$_POST['member'];
echo "<br>";
echo "post=".$_POST['post'];
?>




<br>
HTML
<BR>
MEMBER=<?php echo $_POST['member']?>
<BR>
POST=<?php echo $_POST['post']?>
<BR>

CREATE TABLE `abcd`.`member` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT  , 
    `name` VARCHAR(255) NOT NULL COMMENT 'user name' , 
    `email` VARCHAR(255) NOT NULL DEFAULT 'jason@mores.com.tw' COMMENT 'user email' , 
    gender int(11) not null default 0, 
    unique(name,gender),
    PRIMARY KEY (`id`)
) ENGINE = InnoDB COMMENT = 'member table';