<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新用户注册</title>
    <link rel="shortcut icon" href="images/dang.jpg">
    <link rel="stylesheet" href="css/zhuce.css"/>
</head>
<body>
<!---头文件开始--->
<div class="heard">
    <div class="content">
        <div class="logo fl">
            <a href=""><img src="images/ddnewhead_logo.gif" alt="logo"/></a>
        </div>
        <div class="nav fr">
            <ul>
                <li><a href="">帮助</a></li>
                <li><a href="">销售&nbsp;|</a></li>
                <li><a href="">手机当当&nbsp;|</a></li>
                <li><a href="" target="">礼品卡&nbsp;|</a></li>
                <li><a href="" target="">我的当当&nbsp;|</a></li>
                <li><a href="">我的订单&nbsp;|</a></li>
                <li><a href="">购物车&nbsp;|</a></li>
            </ul>
        </div>
        <p class="fr">欢迎光临当当网，请<a href="">登录</a> <a href="">免费注册</a></p>
    </div>
</div>
<!---登录框---->
<div class="zhong">
    <div class="denglu">
        <div class="nav">
            <div class="zhu"><a href="">新用户注册</a></div>
            <div class="zhu1"><a href="">企业用户注册</a></div>
            <div class="zhu2"><a href="">当当首页</a></div>
            <div class="zhu3"><a href="">注册班助</a></div>
        </div>
        <form action="" method="post">
            <table class="biao">
            <tr>
                <td class="t">邮箱/手机号码</td>
                <td><input type="text" class="text" name="mobile" placeholder="请输入你的邮箱或手机号码"/></td>
            </tr>
            <tr>
                <td class="t">登录密码</td>
                <td><input type="password" class="text" name="password"/></td>
            </tr>
            <tr>
                <td class="t"> 确认密码</td>
                <td><input type="password" class="text" name="repassword"/></td>
            </tr>
            <tr>
                <td class="t">验证码</td>
                <td><input type="text" placeholder="请输入验证码" class="text"/></td>
            </tr>
            <?php
               if(!empty($_POST)){
                   include "connect.php";
//                   $radio =  $_POST['radio'];
//                   echo $radio;
                   $password = $_POST['password'];
                   $repassword = $_POST['repassword'];
                   if($password == ""){
                       echo "用户名和密码不能为空";
                   }else{
//                       echo $password;
                       if($password == $repassword){
                           $mobile = $_POST['mobile'];
                           $re=check_email($mobile);
                           if($re){

                               $createtime = time();
                               $codePW = md5(trim($password));
                               $sql = 'insert into users(mobile,password,createtime) values("'.$mobile.'","'.$codePW.'","'.$createtime.'")';
                               $result = mysqli_query($link,$sql);
                               if($result){
                                  echo '注册成功'.'<br/>';
                               }else{
                                  echo '您已注册';
                               }
                           }else{
                               echo "错误格式!";
                           }
                       }else{
                           exit('两次密码输入不一致');
                       }
                   }
               }
            ?>
             <tr>
                 <td class="t">&nbsp;</td>
                 <td><input type="radio" name="radio"/><span>我已阅读并同意<a href="">《当当交易条款》</a>和<a href="">《当当社区条款》</a></span></td>
             </tr>
                <tr>
                 <td class=t"">&nbsp;</td>
                 <td><input type="submit" class="btn" value="立即注册"/></td>
             </tr>
            </table>
        </form>
    </div>
</div>
<?php
    //封装邮箱验证函数
    function check_email($mobile){
        if(preg_match('/^[a-z0-9]+([\+_\-\.]?[a-z0-9]+)*/i', $mobile)){
             return true;

        }
        if(preg_match("/1[3458]{1}\d{9}$/",$mobile)){
           return true;
        }else{
            return false;
        }
    }
    //调用示例
//    $email="1909970983@qq.com";
//    $re=check_email($email);
//    if($re){
//       echo "邮箱格式正确!";
//    }else{
//       echo "错误格式!";
//    }
?>

<!---尾页开始-->
<div class="footer">
    <div class="footer-box">
        <div class="footer_cop">
            <span>Copyright(c)当当网 2004-2012,All Rights Reserved</span>
            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <span>京ICP证041189号 音像制品经营许可证 京音网8号</span>
        </div>
        <div class="footer_icon">
            <img src="images/validate.gif" alt=""/>
            <img src="images/renz.png" alt="" class="ml"/>
        </div>
    </div>
</div>
</body>
</html>