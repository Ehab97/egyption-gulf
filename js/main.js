document.addEventListener("DOMContentLoaded", function() {
    // const mq = window.matchMedia("(min-width: 500px)");
    var tabColor = document.querySelectorAll('.navigate ul li');
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