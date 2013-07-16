<?
	# EXECUTE YOUR CSS
	$css = 'home';

	# IMPORT YOUR BASE TEMPLATE
	include 'manager/home.php';
?>

<? # CONTENTS BLOCK # ?>
<? startblock('content') ?>

<!--/ Start of Sample Tags # Delete This -->
<article class="container">

		<section>
			<h1 class="welcome">Welcome <small>This is our custom HTML5 Strap Framework v3!</small></h1>
			<div class="hero-unit">
				<h1>HTML5 + BOOTSTRAP</h1>
				<p>Sleek, intuitive, and powerful front-end framework for faster and easier web development.</p>
			</div>
		</section>

</article>
<!--/ End of Sample Tags -->

<? endblock(); ?>



<? # CSS & JAVASCRIPT PLUGINS BLOCK # ?>
<? startblock('head') ?>
<? endblock(); ?>

<? startblock('script') ?>
<? endblock(); ?>