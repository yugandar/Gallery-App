<?php include '_database/database.php' ?>
<?php include 'controllers/base/head.php' ?>
<style type="text/css">


/* ================================================================
This copyright notice must be untouched at all times.

The original version of this stylesheet and the associated (x)html
is available at http://www.cssplay.co.uk/menu/lightbox.html
Copyright (c) 2005-2007 Stu Nicholls. All rights reserved.
This stylesheet and the associated (x)html may be modified in any
way to fit your requirements.
=================================================================== */
/* common styling */

a {color:#000;}
a:hover {text-decoration:none;}
a:visited {color:#000;}

/* slides styling */

.photo {width:635px; text-align:left; position:relative; margin:0 auto;}

.photo ul.topic {padding:0; margin:0; list-style:none; width:635px; height:auto; position:relative; z-index:10;}

.photo ul.topic li {display:block; width:125px; height:31px; float:left;}
.photo ul.topic li a.set {display:block; font-size:11px; width:124px; height:30px; text-align:center; line-height:30px; color:#000; text-decoration:none; border:1px solid #fff; border-width:1px 1px 0 0; background:#ccc; font-family:verdana, arial, sans-serif;}

.photo ul.topic li a ul,
.photo ul.topic li ul
{display:none;}

.photo ul.topic li.active a
{color:#000; background:#bbb;}

.photo ul.topic li a:hover,
.photo ul.topic li:hover a
{color:#fff; background:#aaa;}

.photo ul.topic li.active ul
{display:block; position:absolute; left:0; top:31px; list-style:none; padding:0; margin:0; height:375px; background:#ddd; width:464px; padding:40px 60px; border:20px solid #bbb; z-index:1;}

.photo ul.topic li a:hover ul,
.photo ul.topic li:hover ul
{display:block; position:absolute; left:0; top:31px; list-style:none; padding:0; margin:0; height:375px; background:#ddd; width:464px; padding:40px 60px; border:20px solid #aaa; z-index:100;}

.photo ul.topic li ul li
{display:inline; width:112px; height:87px; float:left; border:1px solid #fff; margin:1px;}

.photo ul.topic li ul li a
{display:block; width:110px; height:85px; cursor:default; float:left; text-decoration:none; background:#444; border:1px solid #888;}

.photo ul.topic li ul li a img
{display:block; width:100px; height:75px; border:5px solid #eee;}

.photo ul.topic li a:hover ul li a:hover,
.photo ul.topic li:hover ul li a:hover
{white-space:normal; position:relative;}

.photo ul.topic li a:hover ul li a:hover img,
.photo ul.topic li:hover ul li a:hover img
{position:absolute; left:-50px; top:-32px; width:200px; height:150px; border-color:#fff;}
</style>


</head>

<body>

<div class="photo">
<ul class="topic">
	<li><a class="set" href="#Portraits">Portraits<!--[if gte IE 7]><!--></a><!--<![endif]-->
	<!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul>
			<li><a href="lbox/portrait1.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/portrait2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/portrait3.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>
      <li><a href="lbox/portrait4.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/portrait3.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/portrait3.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/portrait1a.jpg" alt="" title="" /></a></li>

		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>

	<li class="active"><a class="set" href="#Landscapes">Landscapes<!--[if gte IE 7]><!--></a><!--<![endif]-->
	<!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul>
			<li><a href="lbox/landscape1.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/landscape2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/landscape2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/landscape2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/landscape2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>
			<li><a href="lbox/landscape2.jpg"><img src="http://www.cssplay.co.uk/menu/lbox/landscape1a.jpg" alt="" title="" /></a></li>


		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>
	<li><a class="set" href="#Flowers">Flowers<!--[if gte IE 7]><!--></a><!--<![endif]-->
	<!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul>
			<li><a href="#flower1"><img src="http://www.cssplay.co.uk/menu/lbox/flower1.jpg" alt="" title="" /></a></li>
			<li><a href="#flower1"><img src="http://www.cssplay.co.uk/menu/lbox/flower1.jpg" alt="" title="" /></a></li>
			<li><a href="#flower1"><img src="http://www.cssplay.co.uk/menu/lbox/flower1.jpg" alt="" title="" /></a></li>
			<li><a href="#flower1"><img src="http://www.cssplay.co.uk/menu/lbox/flower1.jpg" alt="" title="" /></a></li>
			<li><a href="#flower1"><img src="http://www.cssplay.co.uk/menu/lbox/flower1.jpg" alt="" title="" /></a></li>


		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->

	</li>
	<li><a class="set" href="#Trees">Trees<!--[if gte IE 7]><!--></a><!--<![endif]-->
	<!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>
			<li><a href="#tree1"><img src="http://www.cssplay.co.uk/menu/lbox/tree1.jpg" alt="" title="" /></a></li>


		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>
	<li><a class="set" href="#Birds">Birds<!--[if gte IE 7]><!--></a><!--<![endif]-->
	<!--[if lte IE 6]><table><tr><td><![endif]-->

		<ul>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			<li><a href="#bird1"><img src="http://www.cssplay.co.uk/menu/lbox/bird1.jpg" alt="" title="" /></a></li>
			
		</ul>

	<!--[if lte IE 6]></td></tr></table></a><![endif]-->
	</li>
</ul>
<br class="clear" />
</div>


</body>
</html>
