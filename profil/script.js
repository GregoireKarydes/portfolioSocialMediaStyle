window.onload=function() {

  
  
    // HORLOGE
  
      horloge('div_horloge');
  
    
     
    function horloge(el) {
      if(typeof el=="string") { el = document.getElementById(el); }
      function actualiser() {
        var date = new Date();
        var str = date.getHours();
        str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
        el.innerHTML = str;
      }
      actualiser();
      setInterval(actualiser,1000);
    }

    TweenMax.from('.info', 1, { autoAlpha : 0, x:-100}).delay(1);
    TweenMax.from('.picture', 1, { autoAlpha : 0, x:100});

// skill

var NameController1 = new ScrollMagic.Controller();
var NameTween1 = TweenMax.from('.dev', 1, { x : -300, autoAlpha : 0})
var NameScene1 = new ScrollMagic.Scene({
	triggerElement : ".skill",

})

.addTo(NameController1)
.setTween(NameTween1)


var NameController2 = new ScrollMagic.Controller();
var NameTween2 = TweenMax.from('.soft', 1, { x : 300, autoAlpha : 0})
var NameScene2 = new ScrollMagic.Scene({
triggerElement : ".skill",

})

.addTo(NameController2)
.setTween(NameTween2)
      
  
// school

var NameController3 = new ScrollMagic.Controller();
var NameTween3 = TweenMax.from('.lycee', 1, { x : -300, autoAlpha : 0})
var NameScene3 = new ScrollMagic.Scene({
	triggerElement : ".school",

})

.addTo(NameController3)
.setTween(NameTween3)


var NameController4 = new ScrollMagic.Controller();
var NameTween4 = TweenMax.from('.university', 1, { x : 300, autoAlpha : 0})
var NameScene4 = new ScrollMagic.Scene({
triggerElement : ".school",

})

.addTo(NameController4)
.setTween(NameTween4)

};