	  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="./public/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    
.frame {

    border: 1px solid white;
    padding: 8px;
  
}    
       
html,
body {
   margin:0;
   padding:0;
   height: 100%;
   font-size: 12px;

}
div#header{ 

}

div#footer {
    
    color: white;
    background-color: black;
    
    }
#header {
   background:#ff0;
   padding:10px;
   color: white;
}
#body {
   padding:10px;
   padding-bottom:60px;   /* Height of the footer */
}
#footer {
position: relative;
  margin-top: 0;
  bottom:0;
  /* negative value of footer height */
  height: 70px;
  clear: both;
               border-top: 1px dotted #8A8575;
            border-bottom: 1px dotted #8A8575;

   }
   
   div.static {
    position: static;
    border: 3px solid #73AD21;
}
   div.fixed {
    position: fixed;
    border: 3px solid white;
    bottom:0;

    width: 300px;
}



i.right {
	float: right;
}

p.right {
	float: right;
}

   p {
   margin: 0;
   }
   
   
   
   /* CSS Document */

body {
	background: #212121;
	/*font-size:22px;*/
	line-height: 22px;
	color: #ffffff;
	margin: 0;
	padding: 0;
	word-wrap:break-word !important;

	}

h1 {
	font-size: 60px;
	text-align: center;
	color: #FFF;
}	

h3 {
	font-size: 30px;
	line-height: 34px;
	text-align: center;
	color: #FFF;
}

h3 a {
	color: #FFF;
}

a {
	color: #FFF;
}

h1 {
	margin-top: 100px;
	text-align:center;
	font-size:60px;
	line-height: 70px;
	font-family: 'Bree Serif', 'serif';
	}

#container {
	margin: 0 auto;
	max-width: 890px;
}

.toggle,
[id^=drop] {
	display: none;
}

/* Giving a background-color to the nav container. */
nav { 
	margin:0;
	padding: 0;
	background-color: #000;
}

#logo {
	display: block;
	padding: 0 30px;
	float: left;
	font-size:20px;
	line-height: 60px;
}

/* Since we'll have the "ul li" "float:left"
 * we need to add a clear after the container. */

nav:after {
	content:"";
	display:table;
	clear:both;
}

/* Removing padding, margin and "list-style" from the "ul",
 * and adding "position:reltive" */
nav ul {
	float: right;
	padding:0;
	margin:0;
	list-style: none;
	position: static;
	z-index:100;
	}
	
/* Positioning the navigation items inline */
nav ul li {
	margin: 0px;
	display:inline-block;
	float: left;
	background-color: #000;
	}

/* Styling the links */
nav a {
	display:block;
	padding:14px 20px;	
	color:#FFF;
	font-size:12px;
	text-decoration:none;
}


nav ul li ul li:hover { background: #000000; }

/* Background color change on Hover */
nav a:hover { 
	background-color: #000000; 
}

/* Hide Dropdowns by Default
 * and giving it a position of absolute */
nav ul ul {
	display: none;
	position: absolute; 
	/* has to be the same number as the "line-height" of "nav a" */
	top: 60px; 
}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
}
	
/* Fisrt Tier Dropdown */
nav ul ul li {
	width:170px;
	float:none;
	display:list-item;
	position: relative;
	
}

/* Second, Third and more Tiers	
 * We move the 2nd and 3rd etc tier dropdowns to the left
 * by the amount of the width of the first tier.
*/
nav ul ul ul li {
	position: relative;
	top:-60px;
	/* has to be the same number as the "width" of "nav ul ul li" */ 
	left:170px; 
	
}

	
/* Change ' +' in order to change the Dropdown symbol */
li > a:after { content:  ' +'; }
li > a:only-child:after { content: ''; }


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {

	#logo {
		display: block;
		padding: 0;
		width: 100%;
		text-align: center;
		float: none;
	}

	nav {
		margin: 0;
	}

	/* Hide the navigation menu by default */
	/* Also hide the  */
	.toggle + a,
	.menu {
		display: none;
	}

	/* Stylinf the toggle lable */
	.toggle {
		display: block;
		background-color: #000;
		padding:14px 20px;	
		color:#FFF;
		font-size:12px;
		text-decoration:none;
		border:none;
	}

	.toggle:hover {
		background-color: #000000;
	}

	/* Display Dropdown when clicked on Parent Lable */
	[id^=drop]:checked + ul {
		display: block;
	}

	/* Change menu item's width to 100% */
	nav ul li {
		display: block;
		width: 100%;
		}

	nav ul ul .toggle,
	nav ul ul a {
		padding: 0 40px;
	}

	nav ul ul ul a {
		padding: 0 80px;
	}

	nav a:hover,
 	nav ul ul ul a {
		background-color: #000000;
	}
  
	nav ul li ul li .toggle,
	nav ul ul a,
  nav ul ul ul a{
		padding:14px 20px;	
		color:#FFF;
		font-size:12px; 
	}
  
  
	nav ul li ul li .toggle,
	nav ul ul a {
		background-color: #212121; 
	}

	/* Hide Dropdowns by Default */
	nav ul ul {
		float: none;
		position:static;
		color: #ffffff;
		/* has to be the same number as the "line-height" of "nav a" */
	}
		
	/* Hide menus on hover */
	nav ul ul li:hover > ul,
	nav ul li:hover > ul {
		display: none;
	}
		
	/* Fisrt Tier Dropdown */
	nav ul ul li {
		display: block;
		width: 100%;
	}

	nav ul ul ul li {
		position: static;
		/* has to be the same number as the "width" of "nav ul ul li" */ 

	}

}

@media all and (max-width : 330px) {

	nav ul li {
		display:block;
		width: 94%;
	}

}
   
   
   
   
   
   .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
}
   
   
   
   
   
   
   .preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 99999;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
  background: none repeat scroll 0 0 #ffffff;
}

.sk-spinner-wordpress.sk-spinner {
  background-color: #558cbf;
  width: 40px;
  height: 40px;
  border-radius: 40px;
  position: relative;
  -webkit-animation: sk-innerCircle 1s linear infinite;
  animation: sk-innerCircle 1s linear infinite; 
}
   
   
   .sk-spinner-wordpress .sk-inner-circle {
  display: block;
  background-color: #ffffff;
  width: 16px;
  height: 16px;
  position: absolute;
  border-radius: 8px;
  top: 5px;
  left: 5px; 
}

@-webkit-keyframes sk-innerCircle {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0); }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes sk-innerCircle {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0); }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }




   
   
   
   #home {
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
     display: -ms-flexbox;
    /*display: flex;*/
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
     align-items: center;
    position: relative;
    text-align: center;
}

.main-home {
  background: url('./public/images/1200x1600.png') no-repeat;
  height: 100vh;
}

.main-error{
  background: url('./public/images/404.gif') no-repeat;
  height: 100vh;
}
   
   
   #particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
   
   .overlay {
  background: rgba(0,0,0,0.7 );
  width: 100%;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
   
   
   .parallax-section {
  background-attachment: fixed !important;
  background-size: cover !important;
  overflow: hidden;
}



/* Back top */
.go-top {
  /* background-color: #ffffff; */
  box-shadow: 1px 1.732px 12px 0px rgba( 0, 0, 0, .14 ), 1px 1.732px 3px 0px rgba( 0, 0, 0, .12 );
    transition: all 1s ease;
    bottom: 3.2em;
    right: 1em;
    color: #fff;
    /* font-size: 24px; */
    display: none;
    position: fixed;
    text-decoration: none;
    /* width: 40px; */
    /* height: 40px; */
    /* line-height: 38px; */
    /* text-align: center; */
    border-radius: 100%;
}

</style>