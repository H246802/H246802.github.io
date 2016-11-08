/**
 * Created by Administrator on 2016/8/17.
 */
window.onload = function(){
    waterfall();
    var dataImg = {"data":[{src:"1.jpg"}, {src:"2.jpg"}, {src:"3.jpg"}, {src:"4.jpg"}, {src:"5.jpg"},
        {src:"6.jpg"}, {src:"7.jpg"}, {src:"8.jpg"}, {src:"9.jpg"}, {src:"10.jpg"},
        {src:"11.jpg"}, {src:"12.jpg"}, {src:"13.jpg"}, {src:"14.jpg"}, {src:"15.jpg"},
        {src:"16.jpg"}, {src:"17.jpg"}, {src:"18.jpg"}, {src:"19.jpg"}, {src:"20.jpg"}]}
    window.onscroll = function(){
        if(checkScrollSlide()){
            var oParent = document.getElementById("main");
            for(var i = 0; i < dataImg.data.length; i++){
                // 后面每次加载都是在创建一个div
                var oPin = document.createElement("div");
                // 给这个 div 设置样式
                oPin.className = "pin";
                // 将它加入其中
                oParent.appendChild(oPin);
                var oBox = document.createElement("div");
                oBox.className = "box";
                oPin.appendChild(oBox);
                var oImg = document.createElement("img");
                // 这里因为img 已经设置好了样式,不需要加入样式
                oImg.src = "images/" + dataImg.data[i].src;
                oBox.appendChild(oImg);
            }
            waterfall();
        }
    }
}
function get(){
    // 获取包含每个图片的盒子
    var obj = document.getElementById("main").getElementsByClassName("pin");
    var pins =[];
    for(var i = 0; i < obj.length; i++){

        pins.push(obj[i]);
    }
    return pins;
}
function waterfall(){
    // 首先计算屏幕横向能容纳多少图片
    // 使用get函数 获取这个 pin 的数组
    var apin = get();
    var ipinW = apin[0].offsetWidth;
    console.log(ipinW);
    // Math.floor 取整数 求出屏幕数目
    var num = Math.floor(document.documentElement.clientWidth / ipinW);
    var oparent = document.getElementById("main");
    // 对整个瀑布流进行居中  // 实测居中无效,因为 main 没有高度
    oparent.style.cssText = "width" + ipinW * num + "px;margin: 0 auto";
    // 获取所有照片的高度,以找到最小高度
    var pinHarr = [];
    for(var i = 0; i < apin.length; i++){
        var pinH = apin[i].offsetHeight;
        console.log(i);
        if(i < num){
            pinHarr[i] = pinH;
        }else{
            // 找到最小高度
            var minH = Math.min.apply(null,pinHarr);
            // 调用函数 获取最小的元素下标
            var minHIndex = getMinHIndex(pinHarr , minH);
            // 让下一个图片放在第一排内最小高度的下面,以此求出距离左边距离以及顶部距离
            apin[i].style.position = "absolute";
            apin[i].style.top = minH + "px";
            apin[i].style.left = apin[minHIndex].offsetLeft + "px";
            // 限制好最小照片以及放在它下面的高度,这样就不会所有的图片都挤在这张照片下面
            // 同时把 waterfall 函数放在 window.onload 下面
            // **** 这样图片就一直相当于只有五张 可以一直比较高度
            pinHarr[minHIndex] += apin[i].offsetHeight;
        }
    }
}

// 找到arr 数组内的最小高度的元素的下标
function getMinHIndex(arr, minH){
    for(var i = 0; i < arr.length; i++){
        if(arr[i] == minH){
            return i;
        }
    }
}
function checkScrollSlide(){
    var apin = document.getElementsByClassName("pin");
    // 判断什么时候开始加载底下的照片
    // 开始加载的时候是最后一张图片到顶部的距离减去最后一张图片高度的一半
    var lastPinH = apin[apin.length - 1].offsetTop - (parseFloat(apin[apin.length - 1].offsetHeight / 2));
    // 滚动条滑动的距离
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    // 当前页面的高度
    var documentH = document.documentElement.clientHeight;
    // 当最后一张图片距离顶部再减去自身的一半的距离小于当前页面的总高度时开始加载 否则不执行
    return (lastPinH < scrollTop + documentH)? true: false;
}