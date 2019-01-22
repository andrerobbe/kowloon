<div class="slideshow-container">
	
	<!-- Logo -->
	<div class="logo-big"><a href="/"><img src="/img/logo/kowloon-big.png" alt="Kowloon Logo"></a></div>

	<!-- Full-width images -->
	<div class="mySlides active">
		<img src="../img/header/dog-with-diving-glasses.jpg" alt="A dog that has swimming glasses equipped">
		<div class="slide-timer"><div></div></div>		
	</div>
	<div class="mySlides">
		<img src="../img/header/dog-with-woman.jpg" alt="A dog that has swimming glasses equipped">
		<div class="slide-timer"><div></div></div>
	</div>
	<div class="mySlides">
		<img src="../img/header/party-dog.jpg" alt="A labrador dog that is in a party">
		<div class="slide-timer"><div></div></div>
	</div>

	<!-- The dots/circles -->
	<div class="slide-controls">
		@for ($i = 0; $i < 3; $i++)
			<span class="dot dot-slides {{ $i == 0 ? 'active' : '' }}" id="dot-{{ $i + 1 }}"></span>
		@endfor
	</div>
</div>