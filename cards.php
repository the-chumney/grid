<html>
<head>
<link rel="stylesheet" href="css/compiled/cagrid.css">
<link rel="stylesheet" href="css/styles.css">
<title>The Grid: Cards</title>
</head>
<body>



<div class="ca-container">

	<div class="ca-row">
		
		<div class="ca-col-4">
			<div class="ca-card">
				<div class="ca-card-head-center ca-background-demo">
					<h3>Card title</h3>
				</div>
				<div class="ca-card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p>
				</div>
			</div>
		
		</div>
	

		<div class="ca-col-4">
			<div class="ca-card">
				<div class="ca-card-head-center ca-background-demo">
					<h3>Card title</h3>
				</div>
				<div class="ca-card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p>
				</div>
			</div>
		
		</div>
	

		<div class="ca-col-4">
			<div class="ca-card">
				<div class="ca-card-head-center ca-background-demo">
					<h3>Card title</h3>
				</div>
				<div class="ca-card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p>
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
