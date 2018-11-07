<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OkeAja</title>
		<link rel="shortcut icon" href="assets/img/icon.png">
		<link rel="stylesheet" type="text/css" href="{{url('okeajahome/css/style.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{url('okeajahome/css/normalize.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{url('okeajahome/css/demo.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{url('okeajahome/css/layout-multi.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{url('okeajahome/css/component.css')}}" />
		<script src="{{url('okeajahome/js/modernizr.custom.js')}}"></script>
		
	</head>
	<body>
		<svg class="hidden">
			<g id="icon-grid">
				<rect x="32.5" y="5.5" width="22" height="22"/>
				<rect x="4.5" y="5.5" width="22" height="22"/>
				<rect x="32.5" y="33.5" width="22" height="22"/>
				<rect x="4.5" y="33.5" width="22" height="22"/>
			</g>
			<g id="icon-cross">
				<line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
				<line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
			</g>
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-menu" viewBox="0 0 24 13">
				<title>menu</title>
				<path d="M.75 1.515h22.498a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM23.248 5.265H8.168a.75.75 0 0 0 0 1.5h15.08a.75.75 0 0 0 0-1.5zM23.248 10.514H4.322a.75.75 0 0 0 0 1.5h18.926a.75.75 0 0 0 0-1.5z"/>
			</symbol>
			<symbol id="icon-dot" viewBox="0 0 24 24">
				<title>dot</title>
				<path d="M11.5 9c-.69 0-1.28.244-1.768.732A2.41 2.41 0 0 0 9 11.5c0 .69.244 1.28.732 1.767A2.409 2.409 0 0 0 11.5 14c.69 0 1.28-.244 1.768-.733A2.408 2.408 0 0 0 14 11.5c0-.69-.244-1.28-.732-1.768A2.408 2.408 0 0 0 11.5 9z"/>
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 24 24">
				<title>cross</title>
				<path d="M11.449 11.962l-5.1 5.099a.363.363 0 1 0 .513.512L12 12.436l5.137 5.137a.361.361 0 0 0 .513 0 .363.363 0 0 0 0-.512l-5.099-5.1 5.102-5.102a.363.363 0 1 0-.512-.513L12 11.487l-5.141-5.14a.363.363 0 0 0-.513.512l5.103 5.103z"/>
			</symbol>
			<symbol id="icon-arrowlong" viewBox="0 0 32 11">
				<title>arrow-long</title>
				<path d="M27.166.183a.619.619 0 0 0-.878 0 .619.619 0 0 0 0 .878l2.735 2.735H.768a.624.624 0 0 0 0 1.248h28.254L26.287 7.77a.619.619 0 0 0 0 .878.617.617 0 0 0 .441.183c.163 0 .32-.061.442-.183l3.796-3.796a.623.623 0 0 0-.005-.878L27.166.183z"/>
			</symbol>
			<symbol id="icon-close" viewBox="0 0 24 24">
				<title>close</title>
				<path d="M21 4.565L19.435 3 12 10.435 4.565 3 3 4.565 10.435 12 3 19.435 4.565 21 12 13.565 19.435 21 21 19.435 13.565 12z"/>
			</symbol>
			<symbol id="icon-navup" viewBox="0 0 50 50">
				<title>navup</title>
				<path d="M20.259 28.211l5.07-5.03 5.075 5.034a.36.36 0 0 0 .51 0 .356.356 0 0 0 0-.506l-5.323-5.28a.404.404 0 0 0-.135-.084.364.364 0 0 0-.384.08l-5.324 5.28a.356.356 0 0 0 0 .506c.141.14.37.14.51 0z" />
			</symbol>
			<symbol id="icon-navdown" viewBox="0 0 50 50">
				<title>navdown</title>
				<path d="M20.259 22.43l5.07 5.03 5.075-5.034a.36.36 0 0 1 .51 0c.14.14.14.366 0 .506l-5.323 5.28a.404.404 0 0 1-.135.084.364.364 0 0 1-.384-.081l-5.324-5.28a.356.356 0 0 1 0-.505c.141-.14.37-.14.51 0z" />
			</symbol>
			<symbol id="icon-grid" viewBox="0 0 24 24">
				<title>grid</title>
				<path d="M8.982 8.982h5.988v5.988H8.982zM0 0h5.988v5.988H0zM8.982 17.965h5.988v5.988H8.982zM0 8.982h5.988v5.988H0zM0 17.965h5.988v5.988H0zM17.965 0h5.988v5.988h-5.988zM8.982 0h5.988v5.988H8.982zM17.965 8.982h5.988v5.988h-5.988zM17.965 17.965h5.988v5.988h-5.988z"/>
			</symbol>
		</svg>
	
		<nav class="thumb-nav">
			<a data-container="container-1" class="thumb-nav__item" href="#"><img src="{{url('okeajahome/img/1_thumb.png')}}" alt="thumb01" /><span>1</span></a>
			<a data-container="container-2" class="thumb-nav__item" href="#"><img src="{{url('okeajahome/img/2_thumb.png')}}" alt="thumb02" /><span>2</span></a>
			<a data-container="container-3" class="thumb-nav__item" href="#"><img src="{{url('okeajahome/img/3_thumb.png')}}" alt="thumb03" /><span>3</span></a>
			<a data-container="container-4" class="thumb-nav__item" href="#"><img src="{{url('okeajahome/img/4_thumb.png')}}" alt="thumb04" /><span>4</span></a>

		</nav>	
		
		<div id="container-1" class="container theme-1">
			<header class="intro">
				<img class="intro__image" src="{{url('okeajahome/img/1_home.png')}}" alt="OkeAja"/>
				<div class="intro__content">
					<h1 class="intro__title">OkeAja</h1>
					<h1 class="intro__title"><a href="/logout">LogOut</a></h1>
					<h1 class="intro__title"><a href="/submit/create">Submit</a></h1>
					<div class="intro__subtitle">
						
						<div class="intro__description">
							Menghubungkan pemilik objek wisata dengan masyarakat yang ingin berwisata dalam platform yang interaktif</a>.
							
						</div>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div><!-- /intro__content -->
			</header><!-- /intro -->			
		</div><!-- /container -->
		
		<div id="container-2" class="container theme-2">
			<header class="intro">
				<img class="intro__image" src="{{url('okeajahome/img/2_home.png')}}" alt="Kategori"/>
				<div class="intro__content">
					<h1 class="intro__title">Kategori</h1>
					<div class="intro__subtitle">
						
						<div class="intro__description">
							Cari objek wisata berdasarkan kataegori berupa objek wisata alam, wisata buatan, wisata religi, wisata edukasi, wisata bersejarah, dan sebagainya</a>.
							
						</div>
						<button class="trigger" onclick="window.location.href='#'">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div><!-- /intro__content -->
			</header><!-- /intro -->
			
		</div><!-- /container -->
		<div id="container-3" class="container">
			<header class="intro">
				<img class="intro__image" src="{{url('okeajahome/img/3_home.png')}}" alt="Lokasi"/>
				<div class="intro__content">
					<h1 class="intro__title">Lokasi</h1>
					<div class="intro__subtitle">
						
						<div class="intro__description">
							Cari objek wisata berdasarkan lokasi regional dan cari juga yang terdekat dengan posisimu</a>.
							
						</div>
						<button class="trigger" onclick="window.location.href='#'">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div><!-- /intro__content -->
			</header><!-- /intro -->
			
		</div><!-- /container -->
		<div id="container-4" class="container">
			<header class="intro">
				<img class="intro__image" src="{{url('okeajahome/img/4_home.png')}}" alt="Trending"/>
				<div class="intro__content">
					<h1 class="intro__title">Trending</h1>
					<div class="intro__subtitle">
						
						<div class="intro__description">
							Objek wisata yang sedang ramai dibincangkan oleh visitor dan banyak direview</a>.
							
						</div>
						<button class="trigger" onclick="window.location.href='#'">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div><!-- /intro__content -->
			</header><!-- /intro -->
			
		</div><!-- /container -->
		<script src="{{url('okeajahome/js/classie.js')}}"></script>
		<script>
			(function() {
				var support = { animations : Modernizr.cssanimations },
					animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
					animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
					onEndAnimation = function( el, callback ) {
						var onEndCallbackFn = function( ev ) {
							if( support.animations ) {
								if( ev.target != this ) return;
								this.removeEventListener( animEndEventName, onEndCallbackFn );
							}
							if( callback && typeof callback === 'function' ) { callback.call(); }
						};
						if( support.animations ) {
							el.addEventListener( animEndEventName, onEndCallbackFn );
						}
						else {
							onEndCallbackFn();
						}
					};

				var containers = [].slice.call( document.querySelectorAll( '.container' ) ),
					containersCount = containers.length,
					nav = document.querySelector( 'nav.thumb-nav' ),
					pageTriggers = [].slice.call( nav.children ),
					isAnimating = false, current = 0;

				function init() {
					resetScroll();
					// disable scrolling
					window.addEventListener( 'scroll', noscroll );
					// set current page trigger
					classie.add( pageTriggers[ current ], 'thumb-nav__item--current' );
					// set current container
					classie.add( containers[ current ], 'container--current' );
					// initialize events
					initEvents();
				}

				function initEvents() {
					// slideshow navigation
					pageTriggers.forEach( function( pageTrigger ) {
						pageTrigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							navigate( this );
						} );
					} );

					// open each container's content area when clicking on the respective trigger button
					//containers.forEach( function( container ) {
					//	container.querySelector( 'button.trigger' ).addEventListener( 'click', function() {
					//		toggleContent( container, this );
					//	} );
					//} );

					// keyboard navigation events
					document.addEventListener( 'keydown', function( ev ) {
						var keyCode = ev.keyCode || ev.which,
							isContainerOpen = containers[ current ].getAttribute( 'data-open' ) == 'open';

						switch (keyCode) {
							// left key
							case 37:
								if( current > 0 && !isContainerOpen ) {
									navigate( pageTriggers[ current - 1 ] );
								}
								break;
							// right key
							case 39:
								if( current < containersCount - 1 && !isContainerOpen ) {
									navigate( pageTriggers[ current + 1 ] );
								}
								break;
						}
					} );
				}

				function navigate( pageTrigger ) {
					var oldcurrent = current,
						newcurrent = pageTriggers.indexOf( pageTrigger );

					if( isAnimating || oldcurrent === newcurrent ) return;
					isAnimating = true;

					// reset scroll
					allowScroll();
					resetScroll();
					preventScroll();

					var currentPageTrigger = pageTriggers[ current ],
						nextContainer = document.getElementById( pageTrigger.getAttribute( 'data-container' ) ),
						currentContainer = containers[ current ],
						dir = newcurrent > oldcurrent ? 'left' : 'right';

					classie.remove( currentPageTrigger, 'thumb-nav__item--current' );
					classie.add( pageTrigger, 'thumb-nav__item--current' );

					// update current
					current = newcurrent;

					// add animation classes
					classie.add( nextContainer, dir === 'left' ? 'container--animInRight' : 'container--animInLeft' );
					classie.add( currentContainer, dir === 'left' ? 'container--animOutLeft' : 'container--animOutRight' );

					onEndAnimation( currentContainer, function() {
						// clear animation classes
						classie.remove( currentContainer, dir === 'left' ? 'container--animOutLeft' : 'container--animOutRight' );
						classie.remove( nextContainer, dir === 'left' ? 'container--animInRight' : 'container--animInLeft' );

						// clear current class / set current class
						classie.remove( currentContainer, 'container--current' );
						classie.add( nextContainer, 'container--current' );

						isAnimating = false;
					} );
				}

				// show content section
				function toggleContent( container, trigger ) {
					if( classie.has( container, 'container--open' ) ) {
						classie.remove( container, 'container--open' );
						classie.remove( trigger, 'trigger--active' );
						classie.remove( nav, 'thumb-nav--hide' );
						container.setAttribute( 'data-open', '' );
						preventScroll();
					}
					else {
						classie.add( container, 'container--open' );
						classie.add( trigger, 'trigger--active' );
						classie.add( nav, 'thumb-nav--hide' );
						container.setAttribute( 'data-open', 'open' );
						allowScroll();
					}
				}

				// scroll functions
				function resetScroll() { document.body.scrollTop = document.documentElement.scrollTop = 0; }
				function preventScroll() { window.addEventListener( 'scroll', noscroll ); }
				function allowScroll() { window.removeEventListener( 'scroll', noscroll ); }
				function noscroll() { 
					window.scrollTo( 0, 0 ); 
				}

				init();

				// For Demo purposes only (prevent jump on click)
				[].slice.call( document.querySelectorAll('.items-wrap a') ).forEach( function(el) { el.onclick = function() { return false; } } );
			})();
		</script>
		<script src="{{url('okeajahome/js/jquery-3.3.1.js')}}"></script>
		<script src="{{url('okeajahome/js/bootstrap.miin.js')}}"></script>
		<script src="{{url('okeajahome/js/main.js')}}"></script>
		
	</body>
</html>