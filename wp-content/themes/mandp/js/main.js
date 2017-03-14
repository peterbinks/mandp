(function(){
    var main = document.querySelector('.wrapper');
    var mainImg = document.querySelector('.home_hero');
    document.addEventListener('mousemove', function (e) {
        var w = getComputedStyle(document.documentElement).width.slice(0, -2);
        var h = getComputedStyle(document.documentElement).height.slice(0, -2);
        var rx = (h / 2 - e.pageY) / 50;
        var ry = (w / 2 - e.pageX) / 100;
        mainImg.style.transform = 'translate3d(' + ry * 2 + 'px, ' + rx * 2 + 'px, 0)';
    });
}());

(function(){
    var end = new Date('5/28/2017 10:1 AM');

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var _week = _day * 7;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById('countdown').innerHTML = 'EXPIRED!';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          document.getElementById('days').innerHTML = days + ' days';
          document.getElementById('hrs').innerHTML = hours + ' hours';
          document.getElementById('mins').innerHTML = minutes + ' minutes';
          document.getElementById('sec').innerHTML = seconds + ' seconds';
        }

        timer = setInterval(showRemaining, 1000);
}());
