function addLoadEvent (func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	}else {
		window.onload = function(){
			oldonload();
			func();
		}
	}; 
}

addLoadEvent(preGallery);

function preGallery () {
	if (!document.getElementsByTagName || !document.getElementById) {return false;};
	if (!document.getElementById("accordion2")) {return false;};

	var gallery = document.getElementById("accordion2");
	var links = gallery.getElementsByTagName("a");
	var placeholder = document.getElementById("feaPlaceholder");
	
	links[0].onclick = function () {
		var source = "pictures/p/床1.jpg";
		placeholder.setAttribute("src",source);
	}
	links[1].onclick = function () {
		var source = "pictures/p/风景14.jpg";
		placeholder.setAttribute("src",source);
	}
	links[2].onclick = function () {
		var source = "pictures/p/风景5.jpg";
		placeholder.setAttribute("src",source);
	}
	links[3].onclick = function () {
		var source = "pictures/p/风景4.jpg";
		placeholder.setAttribute("src",source);
	}
}