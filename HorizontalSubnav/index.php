<html>
<head>
<meta charset="utf-8">

<title>Horizontal Subnav w/ CSS &amp; jQuery</title>

<style type="text/css">
body {
	font: 10px normal Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
}

.container {width: 1000px; margin: 0 auto;}



ul#topnav {
	margin: 50px 0px 0px 0px; padding:0px;
	float: left;
	width: 1000px;
	list-style: none;
	position: relative;
	font-size: 1.2em;
	background:url(images/topnav_s.gif) repeat-x;
	background-color:gray;
}

ul#topnav li {
	float: left;
	margin: 0px 10px; padding: 0px;
	border-right: 1px solid #555;
}
ul#topnav li a {
	padding: 8px 25px;
	display: block;
	color: #f0f0f0;
	text-decoration: none;
}
ul#topnav li:hover { background: #1376c9 url (images/topnav_a.gif) repeat-x; }
ul#topnav li span {
	float: left;
	
	padding: 8px 0;
	position: absolute;
	left: 0; top:28px;
	display: none;
	width: 1000px;
	background: #1376c9;
	color: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}

ul#topnav li:hover span { display: block; }
ul#topnav li span a { display: inline; }
ul#topnav li span a:hover {text-decoration: underline;}
</style>


<script type="text/javascript"
src="images/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
$("ul#topnav li").hover(function() { //Hover over event on list item
	$(this).css({ 'background' : '#1376c9 url(topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
	$(this).find("span").show(); //Show the subnav
} , function() { //on hover out...
	$(this).css({ 'background' : 'none'}); //Ditch the background
	$(this).find("span").hide(); //Hide the subnav
});
	
});
</script>

</head>

<body>

<div class="container">	
	
    <ul id="topnav">
        
    	 <li><a href="">Home</a></li>
        <li>
        	<a href="">Fun Run Info</a>
            <span> 
                <a href="">Fun Run details</a> |
                <a href="">Sponsorship form</a> |
                <a href="">Entry form</a>|
                <a href="">Map</a>|
                <a href="">Rules & Trophies</a>|
                <a href="">Stalls & Sideshows</a>
            </span>
        </li>
        <li>
            <a href="">Results</a>
            <span>
                <a href="">Prizes</a> |
                <a href="">10 Mile Run</a> |
                <a href="">6 Mile Run</a>
            </span>
        </li>
        <li>
            <a href="">Donors & Donees</a>
           
        </li>
        <li><a href="">Contact Us</a></li>
    </ul>
	

</div>

</body>
</html>

