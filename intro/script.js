window.onload=function() {

TweenMax.from(".slide1", 0.5, {y : -100}).delay(0);
TweenMax.to(".slide1", 1, {display : "none"}).delay(2);
TweenMax.from(".slide2", 0.5, {y : -100}).delay(3);
TweenMax.to(".slide2", 1, {display : "block"}).delay(3);
TweenMax.to(".back", 1, {background : "#ff8a88"}).delay(3);

TweenMax.from(".slide3", 0.5, {y : -100}).delay(7);
TweenMax.to(".slide2", 1, {display : "none"}).delay(6);
TweenMax.to(".slide3", 1, {display : "block"}).delay(7);
TweenMax.to(".back", 1, {background : "#9396ff"}).delay(7);

TweenMax.from(".slide4", 0.5, {y : -100}).delay(12);
TweenMax.to(".slide3", 1, {display : "none"}).delay(11);
TweenMax.to(".slide4", 1, {display : "block"}).delay(12);
TweenMax.to(".back", 1, {background : "#3db97f"}).delay(12);






};