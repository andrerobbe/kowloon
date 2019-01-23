<section class="item-section">
	<!-- The dots/circles -->
	<div class="item-dots">
		@for ($i = 0; $i < 3; $i++)
			<span class="dot"></span>
		@endfor
	</div>
		
	<!-- Hover -->
	<div class="item-img">
		<a href="/fish/details">
			<!-- Hover -->
			<div class="item-hover fish">
				<img src="/img/content/hover.png" alt="hover overlay">
				<span>view details</span>
			</div>

			<!-- Img -->
			<img src="/img/content/fish/fish-detail.png" alt="Fish Food">
		</a>
	</div>
	<div class="featured-article-txt">
		<h4>Fish Food</h4>
		<p class="txt-m">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Repellat repudiandae, placeat ...</p>
		<div>
			<p>&euro; 2,49</p>
			<a href="/fish/details" class="btn btn-primary fish">Want to know more?</a>
		</div>
</section>