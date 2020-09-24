//JQuery Modal Message Dialog Box
$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
		$( "#dialog-message" ).dialog({
			modal: true,
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
				}
			}
		});
	});
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//web.archive.org/web/20190120024034/http://connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.onload=function(){
Nifty("div.curvebox");
}

function MM_swapImgRestore() {            //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() {               //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) {                     //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() {                    //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

/*This is an alert that opens the page with a message:

       //<![CDATA[
alert("Welcome to the Law Office of Christina Fox. \n\nWe are MOVING to a larger facility in\nColleyville on JUNE 1st, and we are\nincreasing our staff to better support our\nclients' needs.\n\n\tOur new address is:\n\n\t1205 HALL JOHNSON ROAD\n\tSUITE 3\n\tCOLLEYVILLE, TEXAS 76034\n\nThis office suite is located at Tivoli Court.")
      //]]>
 
From: Dynamic Web Programming by Marty Matthews, et.al., MclGraw-Hill, 2010, p. 148

*/

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//web.archive.org/web/20190120024034/http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
/*
     FILE ARCHIVED ON 02:40:34 Jan 20, 2019 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:19:16 Mar 11, 2020.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  exclusion.robots: 0.352
  esindex: 0.014
  CDXLines.iter: 13.096 (3)
  exclusion.robots.policy: 0.336
  RedisCDXSource: 1.487
  PetaboxLoader3.resolve: 90.626 (2)
  captures_list: 65.836
  PetaboxLoader3.datanode: 89.591 (5)
  load_resource: 196.207
  LoadShardBlock: 48.329 (3)
*/