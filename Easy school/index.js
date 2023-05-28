
var alfa = document.getElementById('alfa'); 
var corpo3 = document.getElementById('body3');

var emailN = document.getElementById('emailN');
var senhaN = document.getElementById('senhaN');
var entrarN = document.getElementById('entrarN');

var pro1 = document.getElementById('processe1');
var pro2 = document.getElementById('processe2');
var logo = document.getElementById('gira');



function load() {

    setTimeout(function() {
        logo.classList.toggle('giro');
    }, 1500);
    
    setInterval(function() {


            logo.classList.toggle('giro');
    
        setTimeout(function() {
            pro2.style.display = "block";
            pro1.style.display = "none";
        }, 500);

        setTimeout(function() {
            pro2.style.display = "none";
            pro1.style.display = "block";
        }, 500);

        setTimeout(function() {
            pro2.style.display = "block";
            pro1.style.display = "none";
        }, 1000);
        
    }, 1000);

     
}


function marcaE() {
    let marcaEasy = document.getElementById('marcaE');

    setInterval( function() {
        
        setTimeout( function() {
        marcaEasy.classList.toggle('on');
    }, 1000);

    setTimeout( function() {
        marcaEasy.classList.remove('on');
    }, 1500);
    
}, 1000);

}