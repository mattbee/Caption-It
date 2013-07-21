

// The bookmarklet trigger code!  Points to the code below
// javascript: (function () {   
// 	var jsCode = document.createElement('script');   
// 	jsCode.setAttribute('src', 'http://localhost/internal/bookmarklet/main.js');                    
// 	document.body.appendChild(jsCode);   
// }()); 


// Wrapper Script taken from http://benalman.com/projects/run-jquery-code-bookmarklet/
// It checks for jQuery and only includes if required - if not it will 
javascript:(function(e,a,g,h,f,c,b,d){if(!(f=e.jQuery)||g>f.fn.jquery||h(f)){
	c = a.createElement("script");
	c.type="text/javascript";
	c.src="http://ajax.googleapis.com/ajax/libs/jquery/"+g+"/jquery.min.js";
	c.onload=c.onreadystatechange=function(){
		if(!b&&(!(d=this.readyState)||d=="loaded"||d=="complete")){h((f=e.jQuery).noConflict(1),b=1);
		f(c).remove()}
	};
	a.getElementsByTagName('body')[0].appendChild(c)}})(window,document,"1",function($,L){
	
	/* YOUR JQUERY CODE GOES HERE */

	// We need the images to find which is the biggest
	var images = $('img');
	// And set the width to be comparable
	var imageHeight = 0, 
		imageWidth = 0;

	for (var i = 0, len = images.length; i < len; i++) {
		
		if( imageWidth < $(images[i]).width() && imageHeight < $(images[i]).height() ) {

			var imageWidth = $(images[i]).width(),
				imageHeight = $(images[i]).height(),
				image = images[i].src,
				pos = $(images[i]).offset();

		}

	};

	// We have the image so let's add some text to make it funny...
	//Some advice and code taken from http://rootcamp.io/?p=1#more-1

	// Here is all the CSS
	var myCSS 	= 	".captionit-field {";
	myCSS 		+=	"background: transparent;";
	myCSS 		+=	"border: 0;";
	myCSS 		+=	"font-family: impact, sans-serif;";
	myCSS 		+=	"text-align: center;";
	myCSS 		+=	"font-size: 50px;";
	myCSS 		+=	"text-shadow:   -3px -3px 0 #fff, 0 -3px 0 #fff, 3px -3px 0 #fff, 3px 0 0 #fff, 3px 3px 0 #fff, 0 3px 0 #fff, -3px 3px 0 #fff, -3px 0 0 #fff;";
	myCSS 		+=	"text-transform: uppercase;";
	myCSS 		+=	"resize: none;";
	myCSS 		+=	"outline: 1px dotted;";
	myCSS 		+=	"}"

	// And insert it into the DOM please.
	ciStyleNode = document.createElement('style');
    ciStyleNode.innerHTML = myCSS;
    document.body.appendChild(ciStyleNode);

	// Create the text areas and stick them in the DOM
	var textTop = document.createElement('textarea'),
		textBottom = document.createElement('textarea');
	textTop.id = "textTop";
	textTop.className = "captionit-field";
	textBottom.id = "textBottom";
	textBottom.className = "captionit-field";
	textBottom.rows = "1";

	// Stick them in
	var textTop = document.getElementsByTagName('body')[0].appendChild(textTop);
	var textBottom = document.getElementsByTagName('body')[0].appendChild(textBottom);

	// Position them both top and bottom of image respectively.
	$(textTop).width(imageWidth - 2).offset({ top: pos.top, left: pos.left });
	$(textBottom).width(imageWidth - 2).offset({ top: pos.top + (imageHeight - $(textBottom).height() ), left: pos.left });

	// Expand the text box if it needs to become 2 lines - just a guess on the length needed.
	//$(textBottom).keyup(function() {
		// Need to work out how to calculate the maximum characters based on width of the image...
		// if( $(textBottom).val().length  >  ) {
		// 	textBottom.rows = "2";
		// }
	//});



});


