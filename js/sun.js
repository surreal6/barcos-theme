(function(){

  var wrapper = document.getElementById('cn-wrapper');
  var header = document.getElementById('header');
  var sunDiv = document.getElementById('sun');
	var button = document.getElementById('cn-button');
  var overlay = document.getElementById('cn-overlay');
  var sidebar = document.getElementById('sidebar-div');

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
    classie.add(wrapper, 'opened-nav');
	  classie.add(header, 'open-sea');
	  classie.add(sunDiv, 'open-sun-div');
    classie.add(button, 'open-sun');
    classie.add(overlay, 'on-overlay');
	  classie.add(sidebar, 'open-header');
	}
  
	function closeNav(){
		open = false;
		classie.remove(wrapper, 'opened-nav');
		classie.remove(header, 'open-sea');
		classie.remove(sunDiv, 'open-sun-div');
		classie.remove(button, 'open-sun');
		classie.remove(overlay, 'on-overlay');
		classie.remove(sidebar, 'open-header');
	}
	document.addEventListener('click', closeNav);

  

})();

