<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-witdh, initial scale=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="homestyle.css">

</head>
<body>
    <header >
    <img class="logo" src="logo.png"   alt="logo">
    <nav class="navbar">
     <ul class="nav_links">
            <li><a href="mj.html">HOME</a>  </li>
            <li><a href="product.html">PRODUCT</a>  </li>
            <li><a href="about.html">ABOUT</a>  </li>
            <li><a href="contact.html">CONTACT</a>    </li>
          </ul>
</nav>
     
</header>

<div class="img">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Welcome to M<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Customize your own candle
	<h1>
<p>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Welcome to M, a candle manufacturing in
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Philippines. We offer handmade candles.
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    The candles are now offered in an array
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    of design, shape, and tetures depend on what
	 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	you want.<span id="dots"></span>...<span id="more">As a ethical manufacturer we want
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    you to experience the maximum enjoyment,
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    pleasure and contentment from our candles.
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Standardization, competitive price and
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    quality products are our key to sucess.
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    If youare interested to our product,
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	please contact us and we will gladly
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	send you the informations.
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	We are looking to rceive your value inquires.</span>
	
	<button type="button" id="read" onclick="read()">Read more</button>
	<script type="text/javascript">
	var i=0;
	function read(){
	if(!i){
	document.getElementById("more").style.
	display="inline";
	document.getElementById("dots").style.
	display="none";
	document.getElementById("read").innerHTML="Read less";
	i=1;
	}
	else{
	document.getElementById("more").style.
	display="none";
	document.getElementById("dots").style.
	display="inline";
	document.getElementById("read").innerHTML="Read more";
	i=0;
	}
	}
	
	</script>
</p>

</div>




</body>
</html>
