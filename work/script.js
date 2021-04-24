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
      
    TweenMax.to('#titre', 3 ,{ color : "#38abee"});
    TweenMax.from('#sousTitre', 3 ,{ color : "white"});
    TweenMax.from('.site', 1 ,{ autoAlpha : 0}).delay(1);


    };
  
  