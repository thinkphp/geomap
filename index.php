<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
   <title>GeoMapBadge</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/base/base.css" type="text/css">
   <style type="text/css">
   html,body{font-family: helvetica,arial,sans-serif,georgia;}
   h1{ font-size:400%; margin:0; padding-bottom:10px; color:#393;}
   .glob{margin-top: 1em;}
   #ft{font-size:80%;color:#888;text-align:left;margin:2em 0;font-size: 12px}
   #ft p a{color:#93C37D;}
   </style> 
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>GeoMap</h1></div>
   <div id="bd" role="main">
	<div class="yui-g">
         <div id="earth"></div>
	</div>
	</div>
   <div id="ft" role="contentinfo"><p>Created By @<a href="http://twitter.com/thinkphp">thinkphp</a> | <a href="http://thinkphp.ro/apps/geo/geomap/geomap.xml">Open Data Table </a></p></div>
</div>
<script type="text/javascript" src="yqlquery.js"></script>
<script type="text/javascript" src="geomapbadge.js"></script>
<script type="text/javascript">

(function(){

   var badge = document.getElementById('earth');

       badge.innerHTML = '<form id="f"><label for="loc">Enter Location: </label><input type="text" id="loc"><input type="submit" value="Search"></form><div id="badge">Loading...</div>';

       var form = badge.getElementsByTagName('form')[0];

       form.onsubmit = function() {
          
         var inputvalue = document.getElementById('loc').value;
 
         geomapbadge.init({element: 'badge',location: inputvalue,showlist: true});           

         return false;
       }

})();
     geomapbadge.init({element: 'badge',location: 'La Paz, Bolivia',showlist: true});  
</script>
</body>
</html>
