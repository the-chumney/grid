<html>
<head>
<link rel="stylesheet" href="css/compiled/cagrid.css">
<link rel="stylesheet" href="css/styles.css">
<title>The Grid: Beta 1.0.0</title>
</head>
<body>



<div class="ca-container">

	

	<div class="ca-row">
		<div class="ca-col-10">
			<?php //include("partials/dev.php"); ?>
			<?php include("partials/introduction.php"); ?>
			<?php include("partials/grid.php"); ?>
			<?php include("partials/grid-offsets.php"); ?>

			<?php include("partials/button-colors.php"); ?>

			<?php include("partials/font-sizes.php"); ?>
			<?php include("partials/font-weight.php"); ?>
			<?php include("partials/font-decoration.php"); ?>
			<?php include("partials/font-alignment.php"); ?>
			<?php include("partials/font-colors.php"); ?>

			<?php include("partials/component-background-colors.php"); ?>
			<?php include("partials/component-cards.php"); ?>
			<?php include("partials/component-forms.php"); ?>
			<?php include("partials/component-tables.php"); ?>
			<?php include("partials/component-images.php"); ?>
			<?php //include("partials/component-vertical.php"); ?>
			<?php include("partials/component-iframes.php"); ?>
			<?php include("partials/legacy.php"); ?>
		</div>

	<div class="ca-col-2" id="sidebar">
		<div class="sidebar">
			<div class="ca-row">
				<div class="ca-col-12">
					<ul class="tablecontents ca-text-left">
						<li class="heading">Introduction</li>
						<li class="heading">Layout
							<ul>
								<li><a href="#grid">Grid</a></li>
								<li><a href="#grid-offsets">Grid Offsets</a></li>
							</ul>
						</li>
				
						<li class="heading">Buttons
							<ul>
								<li><a href="#button-colors">Button Colors</a></li>
							</ul>
						</li>

						<li class="heading">Typography
							<ul>
								<li><a href="#font-sizes">Font Sizes</a></li>
								<li><a href="#font-weight">Font Weight</a></li>
								<li><a href="#font-decoration">Text Decoration</a></li>
								<li><a href="#font-alignment">Font Alignment</a></li>
								<li><a href="#font-colors">Font Colors</a></li>
							</ul>
						</li>
				
						<li class="heading">Lists
							<ul>
								<li><a href="#list-unordered">Unordered List</a></li>
								<li><a href="#list-ordered">Ordered List</a></li>
							</ul>
						</li>

						<li class="heading">Components
							<ul>
								<li><a href="#component-background-colors">Background Colors</a></li>
								<li><a href="#component-cards">Cards</a></li>
								<li><a href="#component-forms">Forms</a></li>
								<li><a href="#component-tables">Tables</a></li>
								<li><a href="#component-images">Images</a></li>
								<li><a href="#component-iframes">Iframes</a></li>
							</ul>
						</li>
						<li class="heading"><a href="#list-ordered">Legacy Grid</a></li>
					</ul>
				</div>
			</div>
		
		</div>
	</div>
	





	</div>
</div> <!-- end container -->











<script src="https://www.theautohost.com/_assets/coding/js/jquery-2.1.4.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/dev.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
$('#ca-form').isHappy({
    fields: {
      // reference the field you're talking about, probably by `id`
      // but you could certainly do $('[name=name]') as well.
      '#fullname': {
        required: true,
        message: 'Might we inquire your name'
      },
      '#email': {
        required: true,
        message: 'How are we to reach you sans email??',
        test: happy.email // this can be *any* function that returns true, false, or an instance of Error
      }
    }
  });


    });
</script>

</body>
</html>
