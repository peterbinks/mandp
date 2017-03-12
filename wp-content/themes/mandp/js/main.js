(function(){
    var main = document.querySelector('.title');
    var mainImg = document.querySelector('.home_hero');
    mainImg.addEventListener('mousemove', function (e) {
        var w = getComputedStyle(document.documentElement).width.slice(0, -2);
        var h = getComputedStyle(document.documentElement).height.slice(0, -2);
        var rx = (h / 2 - e.pageY) / 50;
        var ry = (w / 2 - e.pageX) / 100;
        mainImg.style.transform = 'translate3d(' + ry * 2 + 'px, ' + rx * 2 + 'px, 0)';
    });
}());
