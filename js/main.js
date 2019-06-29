//document.addEventListener("DOMContentLoaded",func(){};
//$(document).ready(func(){});
document.addEventListener("DOMContentLoaded", function() {
    // const mq = window.matchMedia("(min-width: 500px)");
    var tabColor = document.querySelectorAll('.navigate ul li');
    var over = document.querySelectorAll('.overlay');

    var rent = document.querySelector('#rent');
    var renter = document.querySelector('#renter');
    var data = document.querySelector('#data');
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
    rent.onclick = () => {
            // console.log(`${rent} clicked height is ${ renter.style.height} `);
            if (renter.style.visibility === 'visible') {
                renter.style.height = `${350}vh`;
                console.log(`${renter} height is ${ renter.style.height} `);
            } else {
                renter.style.height = '0';
                console.log(`${renter} height is ${ renter.style.height} `);
            }
        }
        // var overlay = (x) => {
        //     if (x.style.visibility === 'visible') {
        //         x.style.height = `${350}vh`;
        //         console.log(`${x} height is ${ x.style.height} `);
        //     } else {
        //         x.style.height = '0';
        //         console.log(`${x} height is ${ x.style.height} `);
        //     }

    // }
    // overlay(renter);
    // overlay(data);
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