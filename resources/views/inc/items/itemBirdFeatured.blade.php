<section class="item-section">
	<!-- The dots/circles -->
	<div class="item-dots">
		@for ($i = 0; $i < 3; $i++)
			<span class="dot"></span>
		@endfor
	</div>
		
	<!-- Hover -->
	<div class="item-img">
		<a href="/birds/details">
			<!-- Hover -->
			<div class="item-hover bird">
				<img src="/img/content/hover.png" alt="hover overlay">
				<span>view details</span>
			</div>

			<!-- Img -->
			<img src="/img/content/birds/cage-details.jpg" alt="Cage for birds">
		</a>
	</div>
	<div class="featured-article-txt">
		<h4>Bird's Cage</h4>
		<p class="txt-m">Lorem ipsum dolor sit amet, consectetur adipi sicing elit. Repellat repudiandae, placeat ...</p>
		<div>
			<p>&euro; 27,49</p>
			<a href="/birds/details" class="btn btn-primary bird">Want to know more?</a>
		</div>
</section>