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
	
	<!-- Intro Text -->
	<h1 class="heading h-l">About us</h1>
	<div class="about-txt">
		<div class="">
			<h2 class="heading h-m uppercase">Kowloon</h2>
			<p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>

		<!-- Contact Details -->
		<div class="contact-info">
			<h4 class="heading h-m uppercase"></h3>
			<ul>
				<li>Deckx Johan</li>
				<li>Bosdreef 7</li>
				<li>2200 Herentals</li>
			</ul>
		</div>
	</div>
	
	<!-- Contact Form -->
	<div class="contact-form">
		<h3 class="heading h-m uppercase">Leave us a message</h3>
		<form class="form-controller" action="POST">
			<label for="email">E-mail</label>
			<input type="email" name="email" placeholder="name@domain.com">
			<label for="message">Your message</label>
			<textarea name="message" placeholder="Write your message here"></textarea>
			<button type="submit" onClick="validateMsg">Send</button>
		</form>
	</div>

	<!-- Infite scroller -->
	<h3 class="heading h-m uppercase">Frequently Asked Questions</h3>
	@include('inc.faq')
</div>
@endsection