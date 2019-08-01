document.addEventListener("DOMContentLoaded", function() {
    // const mq = window.matchMedia("(min-width: 500px)");
    var tabColor = document.querySelectorAll('.navigate ul li');
    var overlay = document.querySelectorAll('.overlay');
    var body = document.body,
        html = document.documentElement;
    var height = Math.max(body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight);
    // console.log(overlay);
    // for (let i = 0; i < overlay.length; ++i) {
    //     console.log(overlay[i].clientHeight);
    // }
    // console.log(height);
    var newheight = height + 400;
    for (let i = 0; i < overlay.length; ++i) {
        overlay[i].style.height = newheight + 'px';
    }

    // for (let i = 0; i < overlay.length; ++i) {
    //     console.log(overlay[i].clientHeight);
    // }
    // console.log(newheight);
    var ChangeTapColor = function() {
        for (let i = 0; i < tabColor.length; ++i) {
            tabColor[i].onclick = () => {
                var c = 0;
                while (c < tabColor.length) {
                    // tabColor[c].classList.contains('activeTap') ? tabColor.classList.remove('activeTap') : '';
                    if (tabColor[c].classList.contains('liActive')) {
                        tabColor[c].classList.remove('liActive');
                        tabColor[c].style.color = '';
                    }
                    c++;
                }
                tabColor[i].classList.add('liActive');
                tabColor[i].style.color = '#2ED47A';
            }
        }
    }


    ChangeTapColor();

});
new Vue({
    el: '#app',
    data: {
        benfits: true,
        paid: false,
        totalBenfits: false
    },
    methods: {

    },

});