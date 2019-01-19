@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">
	@include('inc._msg')

	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<img src="/img/logo/logo.png" alt="Kowloon Logo">
		<div class="arrow-left"></div><span>about us</span>
	</div>
	

	<h1 class="heading h-l uppercase">About us</h1>
	<div class="about-content">

		<!-- Main Content -->
		<div class="about-wrapper">

			<!-- Intro Text -->
			<div class="about-txt">
				<h2 class="heading h-m uppercase">Kowloon</h2>
				<p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<!-- Contact Form -->
			<div class="contact-form">
				<h3 class="heading h-m uppercase">Leave us a message</h3>
				<!-- 
				<form class="form-controller" method="POST" action="">
					@csrf-->

					<!-- Email -->
					<label for="email">E-mail</label>
					<span id="email-error" style="display: block;"></span>
					<input type="email" name="email" placeholder="name@domain.com" required id="email-field">

					<!-- Msg -->
					<label for="message">Your message</label>
					<span id="msg-error"></span>
					<textarea name="message" placeholder="Write your message here" required id="msg-field"></textarea>

					<!-- Submit -->
					<button type="submit" class="btn btn-primary" id="send-btn">Send</button>

				<!--</form>-->
			</div>
		</div>		

		<!-- Aside Content - Contact Details -->
		<div class="contact-info">
			<h4 class="heading h-m uppercase">Contact</h3>
			<ul>
				<li>Deckx Johan</li>
				<li>Bosdreef 7</li>
				<li>2200 Herentals</li>
			</ul>
		</div>
	</div>
	<!-- End of Content -->
	
	<!-- Infite scroller -->
	<div class="infinite-content">
	<h3 class="heading h-m uppercase">Frequently Asked Questions</h3>
	@include('inc.faq')
	</div>
</div>
@endsection