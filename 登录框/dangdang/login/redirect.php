<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>跳转页面</title>
</head>
<body>
<div style="width:300px;height:100px;margin:100px auto;">
    <?php
         $url = "http://localhost/dangdang/";
         echo "登录成功";
         echo "<br>";
         echo "<a href=\"".$url."\">如果没有跳转，请点这里跳转</a>\n";
         echo "<script language=\"javascript\">setTimeout(\"window.location.href='".$url."'\",5000)</script>";
     ?>
</div>
</body>

</html>