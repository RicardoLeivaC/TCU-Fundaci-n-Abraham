<!DOCTYPE html>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7">
	<html class="no-js lt-ie9 lt-ie8">
	<html class="no-js lt-ie9"> 
    <html class="no-js" >

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		
		<!-- CSS -->
		{{ HTML::style('http://fonts.googleapis.com/css?family=Arvo:400') }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Lato:400,700') }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/responsive.css') }}
		{{ HTML::script('js/modernizr.js') }}
		<!-- CSS -->
		
		<!-- Styles Slider-->
		<link href="./css/styles.css" type="text/css" media="all" rel="stylesheet" />
		<link href="./css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
		<!-- Styles Slider-->

		<!-- Styles Testimonio-->
		<link rel="stylesheet" type="text/css" href="./css/styleTestimonio.css" />
   		<link rel="stylesheet" type="text/css" href="./css/presentationCycle.css" />
		<!-- Styles Testimonio-->
	</head>
	<body>
	
		
		<!-- WRAPPER -->
		<div class="wrapper">
		
			<!-- HEADER -->
			<header class="cf">
				<div id="logo"><a href="home">{{ HTML::image('img/logo.png') }}</a></div>
				<!-- social-bar -->
				<ul id="social-bar" class="cf">
					<li class="facebook"><a href="https://www.facebook.com/pages/Proyecto-Abraham/229500147106257"  title="Facebook" ></a></li>
					<li class="youtube"><a href="https://www.youtube.com/watch?v=ZQLAZws8AcA"  title="YouTube" ></a></li>
				</ul>
				<!-- ENDS social-bar -->
			</header>
			<!-- ENDS HEADER -->
			
			<!-- NAV -->
			<nav class="cf">
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="home">@yield('home')</a></li>
					<li><a href="#">@yield('events')</a></li>
					<li><a href="#">@yield('help')</a>
						<ul>
							<li><a href="#">@yield('volunteering')</a>
								<ul>
									<li><a href="#">@yield('refuge')</a></li>
									<li><a href="#">@yield('creche')</a></li>
									<li><a href="#">@yield('courses')</a></li>
									<li><a href="#">@yield('medical_offices')</a></li>
									<li><a href="#">@yield('multi_purpose')</a></li>
									<li><a href="#">@yield('building')</a></li>					
								</ul>
							</li>
							<li><a href="#">@yield('economically')</a></li>							
						</ul>	
					</li>
					<li><a href="#">@yield('gallery')</a></li>
					<li><a href="#">@yield('about_us')</a></li>
					<li><a href="#">@yield('contact_us')</a></li>	
					<li><a href="#">@yield('english')</a></li>				
				</ul>
			</nav>
			<!-- ENDS NAV -->
			
			
			<!-- MAIN -->
			<div id="main" class="cf">				

				  <!--Begin Slider -->
				  <div id="page">
					<div id="content">
						<div class="border_box">
							<div class="box_skitter box_skitter_large">
								<ul>
									<li>
										<img src="img/dummies/slides/01.jpg" class="directionTop" />
										<div class="label_text"><p>Centro de cuidado diario (guardería infantil). <a href="#" style="color: #e09402">Leer más</a></p></div>
									</li>
									
									<li>
										<img src="img/dummies/slides/02.jpg" class="directionBottom" />
										<div class="label_text"><p>Albergues infantiles. <a href="#" style="color: #e09402">Leer más</a></p></div>
									</li>

									<li>
										<img src="img/dummies/slides/03.jpg" class="directionTop" />
										<div class="label_text"><p>Consultorios médicos. <a href="#" style="color: #e09402">Leer más</a></p></div>
									</li>

									<li>
										<img src="img/dummies/slides/04.jpg" class="directionBottom" />
										<div class="label_text"><p>Talleres de superación. <a href="#" style="color: #e09402">Leer más</a></p></div>
									</li>

									<li>
										<img src="img/dummies/slides/05.jpg" class="directionTop" />
										<div class="label_text"><p>Salón multiusos. <a href="#" style="color: #e09402">Leer más</a></p></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Slider -->
				    
									
				
				<!-- RECENT POSTS -->
				<div class="one-third-col">
					<div class="line-heading">
						@yield('recent_posts') <a href="#" >@yield('view_all')</a>
					</div>
					<ul class="recent-posts">
						<li>
							<a href="#" class="title">Ejemplo #1</a>
							<span class="date">Jan 22</span>
							<span class="author">by Ricardo</span>
						</li>
						
						<li>
							<a href="#" class="title">Ejemplo #2</a>
							<span class="date">Jan 20</span>
							<span class="author">by Armando</span>
						</li>

						<li>
							<a href="#" class="title">Ejemplo #3</a>
							<span class="date">Jan 19</span>
							<span class="author">by Ricardo</span>
						</li>

						<li>
							<a href="#" class="title">Ejemplo #4</a>
							<span class="date">Jan 12</span>
							<span class="author">by Armando</span>
						</li>					
					</ul>
				</div>
				<!-- ENDS RECENT POSTS -->	
				
				<!-- FEATURED VIDEO-->
				<div class="two-third-col">
					<div class="line-heading">
						@yield('video_title')
					</div>
					{{ HTML::script('/js/slider-video/jquery-1.9.1.min.js') }}
				    {{ HTML::script('/js/slider-video/jssor.core.js') }}
				    {{ HTML::script('/js/slider-video/jssor.utils.js') }}
				    {{ HTML::script('/js/slider-video/jssor.slider.js') }}
				    {{ HTML::script('/js/slider-video/jssor.player.ytiframe.js') }}
				    {{ HTML::script('/js/slider-video/slider-video.js') }}
				 
				    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 640px;
				        height: 390px;">
				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 390px;
				            overflow: hidden;">
				            <div>
				                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
				                <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;" url="//www.youtube.com/embed/ZQLAZws8AcA" frameborder="0" scrolling="no"></iframe>
				                </div>
				            </div>
				           
				            <div>
				                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
				                <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;" url="//www.youtube.com/embed/dHJrR_I2PSY" frameborder="0" scrolling="no"></iframe>
				                </div>
				            </div>

				            <div>
				                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
				                <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;" url="//www.youtube.com/embed/LjFT4QJWLi4" frameborder="0" scrolling="no"></iframe>
				                </div>
				            </div>
				        </div>
				        <!-- Slides Container -->

				        <!-- Slides Footer -->
				        {{ HTML::style('css/slider-video.css') }}
				       
				        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 6px; left: 6px;">
				            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; z-index: 1; text-align:center; line-height:21px; color:White; font-size:12px;">
				            </div>
				        </div>
				        <!-- Slides Footer -->
				    </div>
				</div>
				<!-- ENDS FEATURED VIDEO -->
			</div>

			<div class="line-heading-help-us">
				@yield('help_us')
				<br>
				<a href="#" >
					{{ HTML::image('img/buttons/btn_padrino.png') }}
					<br>
					<p>@yield('sponsorship')</p>
				</a>

				<a href="#" >
					{{ HTML::image('img/buttons/btn_voluntarios.png') }}
					<br>
					<p>@yield('be_volunteer')</p>
				</a>

				<a href="#" >
					{{ HTML::image('img/buttons/btn_donaciones.png') }}
					<br>
					<p>@yield('donate')</p>
				</a>
			</div>
			<br>
			<!-- ENDS MAIN -->
			
			
			<!-- WIDGETS -->
			<ul  class="widget-cols cf">
				<li class="first-col">
					
					<div class="widget-block">
						<h4>@yield('home_widget')</h4>
						<p>@yield('home_widget_text')</p>
		     		</div>
				</li>
				
				<!-- BLOQUE TESTIMONIOS -->
				<li class="second-col" id="licenter">					
					<div class="widget-block">
							<div class="containerTestimony">        
								<div id="presentation_containerTestimony" class="pc_containerTestimony">
								    <div class="pc_itemTestimony">
								        <div class="desc" style="left: 0px;">
								            <h4 style="text-align: center;">TESTIMONIO 1</h4>
								            <p style="font-style: italic;"> "En este lugar se coloca la informacion del primer testimonio.
								            	Texto de prueba"</p>
								        </div>
								    </div>
								    <div class="pc_itemTestimony">
								        <div class="desc" style="left: 0px;">
								            <h4 style="text-align: center;">TESTIMONIO 2</h4>
								            <p style="font-style: italic;"> "En este lugar se coloca la informacion del segundo testimonio.
								                Texto de prueba"</p>
								        </div>
								    </div>
								    <div class="pc_itemTestimony">
								        <div class="desc" style="left: 0px;">
								            <h4 style="text-align: center;">TESTIMONIO 3</h4>
								            <p style="font-style: italic;"> "En este lugar se coloca la informacion del tercer testimonio.
								                Texto de prueba"</p>
								        </div>
								    </div>
								</div> 
							</div>
					</div>
				</li>
				<!-- BLOQUE TESTIMONIOS -->
				
				
				<li class="fourth-col">
					<div class="widget-block">
						<h4>@yield('site_map')</h4>
						<ul>
							<li class="cat-item"><a href="#" >@yield('home')</a></li>
							<li class="cat-item"><a href="#" >@yield('events')</a></li>
							<li class="cat-item"><a href="#" >@yield('help')</a></li>
							<li class="cat-item"><a href="#" >@yield('gallery')</a></li>
							<li class="cat-item"><a href="#" >@yield('about_us')</a></li>
							<li class="cat-item"><a href="#" >@yield('contact_us')</a></li>
						</ul>
					</div>
				</li>
				<li class="scroll"></li>
			</ul>
			<!-- ENDS WIDGETS -->
			
			
			<!-- FOOTER -->
			<div class="footer-divider"></div>
			<footer class="cf">
				Developed by Ricardo Leiva & Armando Vega, TCU,   <a href="http://www.ucr.ac.cr" >Universidad de Costa Rica</a>, 2014
			</footer>
			<!-- ENDS FOOTER -->
		
		</div>
		<!-- ENDS WRAPPER -->
		
		<!-- JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
		<script src="js/custom.js"></script>


			<!-- Skitter JS -->
		<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

		<!-- Testimonios-->
		 <script type='text/javascript' src='js/jquery.cycle.all.min.js'></script>
   		 <script type='text/javascript' src='js/presentationCycle.js'></script>
   		 <script type="text/javascript">			            presentationCycle.init();
						        </script>
						    
		
		<!-- Init Skitter -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('.box_skitter_large').skitter({
					theme: 'minimalist',
					dots: true, 
					preview: true,
					numbers_align: 'center'
				});
			});
		</script>
				
		
		<!-- superfish -->
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<script src="js/css3-mediaqueries.js"></script>
		
		<script src="js/nivoslider.js"></script>
		<script src="js/tabs.js"></script>
	
		<!-- ENDS JS -->
	</body>
</html>
