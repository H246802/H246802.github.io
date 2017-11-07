function step() {

    var time = new Date()
    var hours = time.getHours()
    var minutes = time.getMinutes()
    var seconds = time.getSeconds()

    if (hours > 12) {
        hours -= 12
    }

    var secondDeg = seconds / 60 * 360
    var minuteDeg = (minutes + seconds / 60) / 60 * 360
    var hourDeg = (hours + minutes / 60 + seconds / 3600) / 12 * 360

    document.querySelector('.second_hand').style.transform = 'rotate(' + secondDeg + 'deg)'     /* 设置旋转角度 */

    document.querySelector('.minute_hand').style.transform = 'rotate(' + minuteDeg + 'deg)'       /* 设置旋转角度 */

    document.querySelector('.hour_hand').style.transform = 'rotate(' + hourDeg + 'deg)'         /* 设置旋转角度 */

}
step()
setInterval(function () {
    step()
}, 1000)