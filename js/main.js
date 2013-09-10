/*
 *Detect placeholder support
 */
jQuery.support.placeholder = (function(){
    var i = document.createElement('input');
    return 'placeholder' in i;
})();
if($.support.placeholder){
	$("html").addClass("placeholder");
}else{
	$("html").addClass("no-placeholder");
}

/*
 *	remove .less stylesheets for dreamweaver...
 */
var styleSheets = document.styleSheets;
var href1 = '/cdn/css/less.less';
var href2 = '/cdn/css/main.less';
for (var i = 0; i < styleSheets.length; i++) {
    if (styleSheets[i].href == href1 || styleSheets[i].href == href2) {
        styleSheets[i].disabled = true;
				styleSheets[i].addClass("disabledCSS");
        break;
    }
}

/* 
 *	BACKSTRETCH.js 
 */
if($(".no-backgroundsize").length){
	$.backstretch("/cdn/img/cshmyr.jpg"), {centeredY:false};
	$(".jumbotron").backstretch("/cdn/img/1176130_499814596778107_1866146321_n.jpg");
}else if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $.backstretch("/cdn/img/cshmyr.jpg");
}

