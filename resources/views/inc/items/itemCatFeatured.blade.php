<section class="item-section">
	<!-- The dots/circles -->
	<div class="item-dots">
		@for ($i = 0; $i < 3; $i++)
			<span class="dot"></span>
		@endfor
	</div>
		
	<!-- Hover -->
	<div class="item-img">
		<a href="/cats/details">
			<!-- Hover -->
			<div class="item-hover cat">
				<img src="/img/content/hover.png" alt="hover overlay">
				<span>view details</span>
			</div>

			<!-- Img -->
			<img src="/img/content/cats/cat.jpg" alt="Cooling Mat for a cat">
		</a>
	</div>
	<div class="featured-article-txt">
		<h4>Cooling Mat</h4>
		<p class="txt-m">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Repellat repudiandae, placeat ...</p>
		<div>
			<p>&euro; 12,49</p>
			<a href="/cats/details" class="btn btn-primary cat">Want to know more?</a>
		</div>
</section>