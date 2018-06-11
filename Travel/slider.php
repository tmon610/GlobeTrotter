<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
mark { 
    background-color: black;
    color: white;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/sl1.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><mark><a href="#">Get Away On This Weekend</a></mark></h2>
							<!--<lable></lable>-->
							<h1><mark><a href="#">MARINE DRIVE</a></mark></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><mark><a href="#">Discover the Universe</a></mark></h2>
							<!--<lable></lable>-->
							<h1><mark><a href="#">NEHRU PLANETARIUM</a></mark></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><mark><a href="#">Go years back</a></mark></h2>
							<!--<lable></lable>-->
							<h1><mark><a href="#">Gateway of India</a></mark></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><mark><a href="#">The bridge over the sea</a></mark></h2>
							<!--<lable></lable>-->
							<h1><mark><a href="#">Bandra-Worli Sea link</a></mark></h1>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/sl4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><mark><a href="#">Seek Spirituality</a></mark></h2>
							<!--<lable></lable>-->
							<h1><mark><a href="#">MOUNT MARY CHURCH</a></mark></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>