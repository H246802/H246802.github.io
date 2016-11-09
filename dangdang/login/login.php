<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录-当当网</title>
    <link rel="shortcut icon" href="images/dang.jpg">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-size: 12px;
            font-family: "Microsoft Yahei";
        }
        a{
            text-decoration: none;
        }
        .clearfix{
            zoom: 1;
        }
        body{
            background-color: #f6f9fb;
        }
        li{
            list-style: none;
        }


        .head{
            width: 865px;
            height: 60px;
            padding: 40px 0 24px 0;
            margin: 0 auto 20px;
        }
        .head img{
            float: left;
            margin: 7px 0 0 13px;
        }
        .head ul{
            line-height: 24px;
            float: right;
            list-style: none;
        }
        .head ul li{
            float: left;
            margin-right: 16px;
            background: url("images/login_icon.png") no-repeat;
            padding-top: 42px;
            overflow: hidden;
        }
        .head .n1{
            background-position: 5px 0;
        }
        .head .n2{
            background-position: -65px 0;
        }
        .head .n3{
            background-position: -136px 0;
        }
        .head li a{
            color: #787878;
        }
        /* 头部设置结束 */

        /* 主要部分设置开始 */
        .wrap{
            background-color: #fff;
            padding: 15px 25px 15px 15px;
            width: 825px;
            height: 390px;
            color: #6e6e6e;
            margin: 0 auto;
            position: relative;
            border: 1px solid #eefaf4;
            box-shadow: 0 1px 2px #eee;
        }
        .new_tip{
            line-height: 24px;
            color: #828282;
            padding-left: 22px;
            background: url("images/new_tip.png") 3px 5px no-repeat #fef7f5;
            border: 1px solid #fedbd1;
            position: absolute;
            right: 0;
            top: -30px;
        }
        .wrap .pic{
            width: 480px;
            height: 384px;
            float: left;
        }
        .infro{
            width: 311px;
            float: right;
        }
        .infro .username{
            margin-top: 32px;
            position: relative;

        }
        .username, .infro .password, .infro .code{
            height: 36px;
            border: 1px solid #e6e6e6;
            width: 310px;
            border-radius: 2px;
        }
        input, .infro .password input, .infro .code input{
            float: left;
            height: 34px;
            line-height: 34px;
            border: 0;
            color: #333;
            font-family: "Microsoft Yahei";
            padding: 0;
        }
        input, .infro .password input{
            width: 270px;
        }
        .username span{
            width: 30px;
            margin-right: 10px;
            height: 36px;
            float: left;
            background: url("images/icon_20150706.png") 10px -110px no-repeat;
        }
        .tips{
            height: 30px;
            line-height: 30px;
            padding-left: 10px;
        }
        .password span{
            width: 30px;
            margin-right: 10px;
            height: 36px;
            float: left;
            background: url("images/icon_20150706.png") 10px -150px no-repeat;
        }
        .Captch{
            background-color: #f6f9fb;
            border: 1px solid #e6e6e6;
            font-size: 14px;
            margin-bottom: 10px;
            padding: 5px 5px 0;
            width: 300px;
        }
        .Captch .Captch-operate{
            color: #555;
            height: 16px;
            line-height: 16px;
            margin: 0 10px 5px;
            position: relative;
        }
        .Captch .Captch-prompt{
            font-size: 14px;
            opacity: 1;
            position: absolute;
            transform: translate(0px, 0px);
            transition: all 0.25s ease-out 0s;
            vertical-align: middle;
            visibility: visible;
        }
        label{
            cursor: default;
        }
        .Captch .ucc{
            background: url("images/captch_icon.png") 0 0 no-repeat;
            float: right;
            height: 16px;
            width: 16px;
        }
        .Captch .Captch-imageConatiner{
            margin: auto;
            position: relative;
            width: 200px;
        }
        .Captch .Captch-image{
            display: block;
            height: 44px;
            margin: auto;
            width: 200px;
        }
        .auto_login{
            width: 310px;
            height: 27px;
            line-height: 22px;
            padding-top: 7px;
            overflow: hidden;
        }
        .auto_login a{
            float: right;
        }
        .auto_login input{
            vertical-align: middle;
            margin-top: -5px;
            float: left;
            width: 12px;
        }
        .infro .btn input{
            width: 100%;
            border-radius: 5px;
            color: #fff;
            display: inline-block;
            height: 44px;
            text-align: center;
            font: normal 20px/44px "Microsoft Yahei";
            background-color: #ff2832;
        }
        .infro .text_del {
            width: 10px;
            height: 11px;
            top: 12px;
            left: 290px;
            position: absolute;
            background: url("images/icon_20150706.png") 0 -230px no-repeat;
        }
        .register{
            height: 24px;
            line-height: 24px;
            padding-top: 6px;
        }
        .register .register_btn{
            float: right;
            color: #6e6e6e;
        }
        dt{
            display: block;
        }
        .partner dt a{
            width: 20px;
            height: 20px;
            display: block;
            background: url("images/icon_20150706.png") 0 -260px no-repeat;
            text-indent: 99em;
            overflow: hidden;
            float: left;
        }
        .partner dt a.wx{
            background-position: 0 -280px;
        }
        .partner dt a.wb{
            background-position: 0 -300px;
        }
        .partner dt a.alpay{
            background-position: 0 -320px;
        }
        .partner dd{
            padding-left: 10px;
            position: relative;
            float: left;
            line-height: 20px;
        }
        .partner dd a{
            color: #969696;
        }
        .partner dd a em{
            width: 8px;
            height: 20px;
            display: inline-block;
            background: url("images/icon_20150706.png") 0 -340px no-repeat;
            vertical-align: text-bottom;
            margin-left: 5px;
        }
        .emicon{
            background-position: -33px -340px !important;
        }
        .partner dd ul{
            position: absolute;
            width: 190px;
            padding: 5px 0 1px 10px;
            background-color: #fafafa;
            border: 1px solid #eaeaea;
            border-radius: 2px;
            left: 10px;
            top: 24px;
        }
        .partner dd li a{
            color: #6e6e6e;
        }
        .partner dd ul li.arrow{
            position: absolute;
            width: 10px;
            height: 6px;
            top: -5px;
            left: 7px;
            background: url("images/more_arr.png") 0 0 no-repeat;
        }
        .partner dd ul li{
            float: left;
            margin-right: 18px;
            height: 18px;
            line-height: 18px;
        }
        /* 主要部分设置结束 */

        /* 页尾设置开始 */
        .public_footer_box{
            width: 100%;
            margin: 0 auto;
            font: 12px "\5b8b\4f53", Arial, Helvetica, sans-serif;
            clear: both;
        }
        .public_footer{
            margin: 0 auto;
            width: 960px;
            padding: 32px 5px 0;
            font-size: 12px;
            color: #666;
            overflow: hidden;
        }
        .public_footer a{
            color: #666 !important;
            text-decoration: none;
            font-size: 12px;
        }
        .public_footer a:hover{
            color: #f60 !important;
            text-decoration: underline;
        }

        .public_footer .sep{
            display: inline-block;
            padding: 0 18px;
        }
        .public_footer .footer_copyright{
            padding-left: 168px;
            margin: 0 auto;
            width: 800px;
        }
        .public_footer .footer_copyright span {
            float: left;
            display: inline;

        }
        .public_footer .footer_copyright span{
            padding-top: 10px;
        }
        .public_footer .footer_copyright a {
            padding-right: 4px;
        }
        .public_footer .footer_icon {
            margin: 10px 0 0 335px;
            width: 300px;
            height: 57px;
        }
        .public_footer .validator, .public_footer .kent{
            float: left;
            display: inline;
            padding: 0 5px;
            width: 135px;
            height: 47px;
        }
        /* 页尾设置结束 */

        /* 防诈骗弹窗设置开始 */
        .masks{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10010;
        }
        .masks .masks_bg{
            border: 0;
            height: 100%;
            width: 100%;
            background-color: #000;
            opacity: 0.1;
        }
        .pop_cheat {
            position: absolute;
            padding-bottom: 30px;
            overflow: hidden;
            border: 1px solid #e6e6e6;
            font-size: 12px;
            color: #646464;
            background-color: #fff;
            top: 50%;
            left: 50%;
            width: 492px;
            margin-left: -246px;
            margin-top: -141px;
        }
        .pop_cheat h3 {
            text-align: center;
            height: 40px;
            line-height: 40px;
            font-size: 14px;
            background-color: #f5f5f5;
        }
        .pop_cheat_info{
            padding: 16px 15px 0 20px;
            line-height: 24px;
            font-size: 12px;
        }
        .pop_cheat_info .right{
            float: left;
            width: 435px;
            padding-left: 5px;
        }
        .pop_cheat_info b{
            color: #ff2832;font-weight: bold;
        }
        .pop_cheat .btn{
            display: block;
            margin: 25px auto 0;
            height: 24px;
            text-align: center;
            clear: both;
        }
        .pop_cheat .btn a, .pop_cheat .btn a:hover{
            display: inline-block;
            color: #fff;
            text-decoration: none;
            height: 24px;
            line-height: 24px;
            background-color: #ff2832;
            padding: 0 10px;
            border-radius: 3px;
        }
        .pop_cheat .btn a:hover{
            background-color: #f00000;
        }
        .partner{
           width: 150px;
           height: 20px;
           position: absolute;
           right: 185px;
           bottom: 0;
        }
        /* 防诈骗弹窗设置结束 */
    </style>


</head>
<body>
<!-- 登录页面头部设置开始 -->
<div class="head">
    <a href="javascript:;">
        <img src="images/logo_login.png" alt=""/>
    </a>
    <ul class="clearfix">
        <li class="n1"><a href="javascript:;">货到付款</a></li>
        <li class="n2"><a href="javascript:;">正品保障</a></li>
        <li class="n3"><a href="javascript:;">上门退款</a></li>
    </ul>
</div>
<!-- 登录页面头部设置结束 -->

<!-- 登陆主要部分设置开始 -->
<div class="wrap clearfix">
    <div id="J_chearProofTop" class="new_tip" style="display: block">
        <div id="component"></div>
        <div>为保障账户安全,请勿设置与邮箱及其他网站相同的账户登录密码或支付密码,<a href="javascript:;">谨防诈骗</a>!</div>
    </div>
    <div class="pic">
        <a href="javascript:;"><img src="images/login_pic.jpg" alt=""/></a>
    </div>
    <form action="" method="post">
    <div class="infro">
        <div class="username" id="username">
            <span></span>

                <input style="display: none"/>
                <input class="user" id="txtUsername" name="username" type="text" value="邮箱/昵称/手机号码" style="color: rgb(176,176,176);"/>

            <a href="javasccript:void(0);" class="text_del" id="clearUser" style="display: none"></a>
            <!--<span id="placeholder" class="placeholder" style="position: absolute; z-index: 20; color: rgb(176,176,176); width: 270px; height: 34px; font-size: 13.3333px; padding-left: 0px; font-family: 'Microsoft Yahei'; top: 0px; left: 40px; line-height: 34px; display: block; background:none;">邮箱/昵称/手机号码</span>-->
        </div>
        <p id="user_mindstyle" class="tips"></p>
        <div class="password">
            <span></span>

                <input class="pass" id="txtPassword" name="password" type="password"/>

            <span id="pwd" class="placeholder" style="position: absolute; z-index: 20; color: rgb(176,176,176); width: 270px; height: 34px; font-size: 13.3333px; padding-left: 0px; font-family: 'Microsoft Yahei'; top: 116px; left: 570px; line-height: 34px; display: block; background:none;">密码</span>
        </div>

        <p class="tips" id="password_tips"></p>
        <div class="Captch">
            <div class="Captch-operate">
                <label class="Captch-prompt">请点击图中所有的倒立文字</label>
                <span class="ucc"></span>
            </div>
            <div class="Captch-imageConatiner">
                <img src="images/show.png" alt="" class="Captch-image" />
            </div>
        </div>

        <p class="auto_login">
            <a href="javascript:;">忘记密码?</a>
            <input type="checkbox" id="auto_box" class="auto_box" checked />
            <!--<span style="display: none;">七天内自动登录</span>-->
            <span id="safe" class="safe" style="display: inline-block;">请勿在公共电脑上勾选此选项</span>
        </p>
        <p class="btn">
            <input type="submit" value="登&nbsp;录"/>
        </p>
        <p class="register">
            <a href="javascript:;" class="register_btn">立即注册</a>
            <span>使用合作网站登录</span>
        </p>
        <div class="partner clearfix" style="overflow:hidden; height:40px;position:absoution">
            <dl>
                <dt><a href="javascript:;" class="qq" title="QQ">QQ</a></dt>
                <dt><a href="javascript:;" class="wx" title="微信">微信</a></dt>
                <dt><a href="javascript:;" class="wb" title="新浪微博">新浪微博</a></dt>
                <dt><a href="javascript:;" class="alpay" title="支付宝">支付宝</a></dt>
                <dd id="showShareMore">
                    <a href="javascript:;" class="more" id="more">更多<em id="emicon" ></em></a>
                    <ul id="shareMore" style="display: none;">
                        <li class="arrow"></li>
                        <li><a href="javascript:;">豆瓣</a></li>
                        <li><a href="javascript:;">百度</a></li>
                        <li><a href="javascript:;">飞信</a></li>
                        <li><a href="javascript:;">人人网</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    </form>

</div>
    <?php
       function redirect($url){
           //用js方法实现页面延迟跳转
           echo "<script language=\"javascript\">setTimeout(\"window.location.href='".$url."'\",50)</script>";
       }
    ?>
    <?php
        if(!empty($_POST)){
            include "connect.php";
            $mobile = $_POST['username'];
            $password = $_POST['password'];
            $codePW = md5(trim($password));
            $url = "redirect.php";
//            echo $codePW;
//            echo $mobile;
            $sql = "select * from users where mobile=".$mobile;
            $result = mysqli_query($link,$sql);
            $data = mysqli_fetch_assoc($result);
//            var_dump($data);
            if($data['password'] ==($codePW)){
//                echo "登录成功 五秒钟后跳转";
                 echo "<script language=\"javascript\">setTimeout(\"window.location.href='".$url."'\",1000)</script>";
            }else{
                echo "登录失败";
            }
        }
    ?>
<script>
    var txtUsername = document.getElementById("txtUsername");
    var userMindstyle = document.getElementById("user_mindstyle");
    var txtPassword = document.getElementById("txtPassword");
    var passwordTips = document.getElementById("password_tips");
    var pwd = document.getElementById("pwd");
    var autoBox = document.getElementById("auto_box");
    var safe = document.getElementById("safe");
    var more = document.getElementById("more");
    var shareMore = document.getElementById("shareMore");
    var emIcon = document.getElementById("emicon");
    var clearUser = document.getElementById("clearUser");
    txtUsername.onfocus = function () {
        if(txtUsername.value == "邮箱/昵称/手机号码"){
            txtUsername.value = "";
            userMindstyle.innerHTML = "请输入邮箱/昵称/手机号码";
            clearUser.style.display = "block";
        }
    }
    txtUsername.onblur = function () {
        if(txtUsername.value == ""){
            txtUsername.value = "邮箱/昵称/手机号码";
            userMindstyle.innerHTML = "";
            clearUser.style.display = "none";
        }
    }
    pwd.onclick = function () {
        txtPassword.focus();
        pwd.style.display = "none";
        passwordTips.innerHTML = "请填写长度为6-20个字符的密码";
    }
//    txtPassword.onfocus = function () {
//        if(txtPassword.value == "密码"){
//            txtPassword.value = "";
//            passwordTips.innerHTML = "请填写长度为6-20个字符的密码";
//        }
//    }
    txtPassword.onblur = function () {
        if(txtPassword.value == ""){
            pwd.style.display = "block";
            passwordTips.innerHTML = "";
        }
    }
    autoBox.onclick = function () {
        if(autoBox.checked){
            safe.innerHTML = "请勿在公共电脑上勾选此选项";
        }else{
            safe.innerHTML = "七天内自动登录";
        }
    }
    more.onclick = function () {
        if(shareMore.style.display == "none"){
            shareMore.style.display = "block";
            emIcon.setAttribute("class","emicon");
        }else if(shareMore.style.display == "block"){
            shareMore.style.display = "none";
            emIcon.setAttribute("class","");
        }

    }
    clearUser.onclick = function () {
        txtUsername.value = "";
        txtUsername.value = "邮箱/昵称/手机号码";
        userMindstyle.innerHTML = "";
        clearUser.style.display = "none";
    }
</script>
<!-- 登录主要部分设置结束 -->

<!-- 页尾设置开始 -->
<div class="public_footer_box">
    <div class="public_footer">
        <div class="footer_copyright">
            <span>Copyright (C) 当当网 2004-2012, All Rights Reserved</span>
            <span class="sep">|</span>
            <span><a href="javascript:;">京ICP证041189号</a></span>
            <span><a href="javascript:;">音像制品经营许可证 京音网8号</a></span>
            <div class="clear"></div>
        </div>
        <div class="footer_icon">
            <div class="validator">
                <a href="javascript:;" class="footer_img">
                    <img src="images/validate.gif" alt=""/>
                </a>
            </div>
            <div class="kent">
                <a href="javascript:;">
                    <img width="128" height="47" src="images/kxwl.png" alt=""/>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- 页尾设置结束 -->

<!-- 防诈骗弹窗设置开始 -->
<div class="masks" id="J_loginmask" style="display: inline-block;">
    <iframe class="masks_bg">
        #document
        <html>
            <head style="display: none;"></head>
            <body style="display: block; margin: 8px;"></body>
        </html>
    </iframe>
    <div class="pop_cheat">
        <h3>安全提醒</h3>
        <div class="pop_cheat_info clearfix">
            <div id="compoent_2731728"></div>
            <div>
                <span class="right">
                    当当平台销售商
                    <b>不会以任何理由，要求您点击任何网址链接进行退款或支付操作。</b>
                    当当客服电话400-106-6666，0527-80878888。
                </span>
            </div>
        </div>
        <div class="btn">
            <a href="javascript:void(0);" id="J_loginMaskClose">知道了</a>
        </div>
    </div>
</div>
<script>
    var jLoginmask = document.getElementById("J_loginmask");
    var btn = document.getElementById("J_loginMaskClose");
    btn.onclick = function () {
        jLoginmask.style.display = "none";
    }
</script>
<!-- 防诈骗弹窗设置结束 -->
</body>
</html>