(function(){

	var button = document.getElementById('cn-button'),
   wrapper = document.getElementById('cn-wrapper'),
   overlay = document.getElementById('cn-overlay'),
   wavesbox = document.getElementById('wavesbox');
   header = document.getElementById('header');

	//open and close menu when the button is clicked
	var open = false;
	button.addEventListener('click', handler, false);
	wrapper.addEventListener('click', cnhandle, false);

	function cnhandle(e){
		e.stopPropagation();
	}

	function handler(e){
		if (!e) var e = window.event;
	 	e.stopPropagation();//so that it doesn't trigger click event on document

	  	if(!open){
	    	openNav();
	  	}
	 	else{
	    	closeNav();
	  	}
	}
	function openNav(){
		open = true;
    button.innerHTML = "-";
    classie.add(button, 'open-sun');
    classie.add(overlay, 'on-overlay');
    classie.add(wrapper, 'opened-nav');
	  classie.add(wavesbox, 'open-sea');
	  classie.add(waveCanvas, 'open-sea');
	  classie.add(header, 'open-sea');
	}
	function closeNav(){
		open = false;
		button.innerHTML = "+";
		classie.remove(button, 'open-sun');
		classie.remove(overlay, 'on-overlay');
		classie.remove(wrapper, 'opened-nav');
		classie.remove(wavesbox, 'open-sea');
		classie.remove(waveCanvas, 'open-sea');
		classie.remove(header, 'open-sea');
	}
	document.addEventListener('click', closeNav);


  document.getElementById('wrapper').onscroll = function() {
    var header = document.getElementById('header');
	  var waveCanvas = document.getElementById('waveCanvas');
	  var button = document.getElementById('cn-button');

	  if (document.body.scrollTop + document.documentElement.scrollTop > 200) {
	    classie.add(header, 'sticky');
	    classie.add(waveCanvas, 'sticky');
	    classie.add(button, 'stickysun');
	  }
	  else {  
	    classie.remove(header, 'sticky');
	    classie.remove(waveCanvas, 'sticky');
	    classie.remove(button, 'stickysun');
	  }

	  var wpadminbar = document.getElementById('wpadminbar');
	  if (wpadminbar != null) {
	    sticky.style.top = "32px";
	  }
  }
  


})();

