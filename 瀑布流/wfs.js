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
                // ����ÿ�μ��ض����ڴ���һ��div
                var oPin = document.createElement("div");
                // ����� div ������ʽ
                oPin.className = "pin";
                // ������������
                oParent.appendChild(oPin);
                var oBox = document.createElement("div");
                oBox.className = "box";
                oPin.appendChild(oBox);
                var oImg = document.createElement("img");
                // ������Ϊimg �Ѿ����ú�����ʽ,����Ҫ������ʽ
                oImg.src = "images/" + dataImg.data[i].src;
                oBox.appendChild(oImg);
            }
            waterfall();
        }
    }
}
function get(){
    // ��ȡ����ÿ��ͼƬ�ĺ���
    var obj = document.getElementById("main").getElementsByClassName("pin");
    var pins =[];
    for(var i = 0; i < obj.length; i++){

        pins.push(obj[i]);
    }
    return pins;
}
function waterfall(){
    // ���ȼ�����Ļ���������ɶ���ͼƬ
    // ʹ��get���� ��ȡ��� pin ������
    var apin = get();
    var ipinW = apin[0].offsetWidth;
    console.log(ipinW);
    // Math.floor ȡ���� �����Ļ��Ŀ
    var num = Math.floor(document.documentElement.clientWidth / ipinW);
    var oparent = document.getElementById("main");
    // �������ٲ������о���  // ʵ�������Ч,��Ϊ main û�и߶�
    oparent.style.cssText = "width" + ipinW * num + "px;margin: 0 auto";
    // ��ȡ������Ƭ�ĸ߶�,���ҵ���С�߶�
    var pinHarr = [];
    for(var i = 0; i < apin.length; i++){
        var pinH = apin[i].offsetHeight;
        console.log(i);
        if(i < num){
            pinHarr[i] = pinH;
        }else{
            // �ҵ���С�߶�
            var minH = Math.min.apply(null,pinHarr);
            // ���ú��� ��ȡ��С��Ԫ���±�
            var minHIndex = getMinHIndex(pinHarr , minH);
            // ����һ��ͼƬ���ڵ�һ������С�߶ȵ�����,�Դ����������߾����Լ���������
            apin[i].style.position = "absolute";
            apin[i].style.top = minH + "px";
            apin[i].style.left = apin[minHIndex].offsetLeft + "px";
            // ���ƺ���С��Ƭ�Լ�����������ĸ߶�,�����Ͳ������е�ͼƬ������������Ƭ����
            // ͬʱ�� waterfall �������� window.onload ����
            // **** ����ͼƬ��һֱ�൱��ֻ������ ����һֱ�Ƚϸ߶�
            pinHarr[minHIndex] += apin[i].offsetHeight;
        }
    }
}

// �ҵ�arr �����ڵ���С�߶ȵ�Ԫ�ص��±�
function getMinHIndex(arr, minH){
    for(var i = 0; i < arr.length; i++){
        if(arr[i] == minH){
            return i;
        }
    }
}
function checkScrollSlide(){
    var apin = document.getElementsByClassName("pin");
    // �ж�ʲôʱ��ʼ���ص��µ���Ƭ
    // ��ʼ���ص�ʱ�������һ��ͼƬ�������ľ����ȥ���һ��ͼƬ�߶ȵ�һ��
    var lastPinH = apin[apin.length - 1].offsetTop - (parseFloat(apin[apin.length - 1].offsetHeight / 2));
    // �����������ľ���
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    // ��ǰҳ��ĸ߶�
    var documentH = document.documentElement.clientHeight;
    // �����һ��ͼƬ���붥���ټ�ȥ�����һ��ľ���С�ڵ�ǰҳ����ܸ߶�ʱ��ʼ���� ����ִ��
    return (lastPinH < scrollTop + documentH)? true: false;
}