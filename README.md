# gridv2.0
Grid v2.0

<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="https://the-chumney.github.io/grid/css/compiled/cagrid.css"/>
<link rel="stylesheet" href="css/styles.css">
<title>The Grid: Beta 1.0.0</title>
</head>
<body>



<div class="ca-container">

	

	<div class="ca-row">
		<div class="ca-col-10">
<div id="introduction">

	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Introduction</h1>
			<p>The structure remains mainly intact. However, as you see below, the naming structure has been tweaked to keep everything more consistent.</p>

			<ul class="ca-list-inline">
				<li>.ca-container</li>
				<li>.ca-row</li>
				<li>.ca-col-*</li>
			</ul>
		
			<p>Some things to note with new grid:</p>

			<ul>
				<li>All &lt;br&gt; tags will be stripped from your code</li>
				<li>If multiple sections need to be in one column (ie: An Image with a button, please place rows inside of columns like below:</li>
				<li>.ca-col-*</li>
			</ul>
		</div>
	</div>

	<div class="demostacked">
		<div class="ca-row">
			<div class="ca-col-12">
				<div class="ca-background-demo">
					<p class="ca-text-center">.ca-col-12 </p>
				</div>

				<div class="ca-row">
					<div class="ca-col-6">
						<div class="ca-background-demo">
							<p class="ca-text-center">.ca-col-6 </p>
						</div>
					</div>
					
					<div class="ca-col-6">
						<div class="ca-background-demo">
							<p class="ca-text-center">.ca-col-6 </p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<p class="ca-text-bold">Structure: Row -> Column -> Row -> Column(s)</p>
			<p>This usage allows for the correct amount of padding to be applied (top and bottom) to the elements.</p>
			<p class="ca-text-bold">You will also notice that nested columns now align left/right with their parent columns.</p>
		</div>
	</div>
</div>






<div id="grid">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Grid</h1>
	
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-12</p></div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-11">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-11</p></div>
		</div>
					
		<div class="ca-col-1">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-1</p></div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-10">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-10</p></div>
		</div>
					
		<div class="ca-col-2">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-2</p></div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-9">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-9</p></div>
		</div>
					
		<div class="ca-col-3">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-3</p></div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-8">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-8</p></div>
		</div>
				
		<div class="ca-col-4">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-4</p></div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-7">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-7</p></div>
		</div>
					
		<div class="ca-col-5">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-5</p></div>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-6">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-7</p></div>
		</div>
					
		<div class="ca-col-6">
			<div class="ca-background-demo"><p class="ca-text-center">.ca-col-5</p></div>
		</div>
	</div>
</div>


<div id="grid-offsets">
<div class="ca-row">
	<div class="ca-col-12">
		<h1>Grid Offsets</h1>
	</div>
</div>

	<div class="ca-row">
		<div class="ca-col-11 ca-offset-1">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-1</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-10 ca-offset-2">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-2</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-9 ca-offset-3">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-3</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-8 ca-offset-4">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-4</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-7 ca-offset-5">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-5</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-6 ca-offset-6">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-6</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-5 ca-offset-7">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-7</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-4 ca-offset-8">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-8</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-3 ca-offset-9">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-9</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-2 ca-offset-10">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-10</p>
			</div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-1 ca-offset-11">
			<div class="ca-background-demo">
				<p class="ca-text-center">.ca-offset-11</p>
			</div>
		</div>			
	</div>
</div>



<div id="button-colors">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Button Colors</h1>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-2"><a href="#" class="ca-btn-acura">Acura</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-audi">Audi</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-bmw">BMW</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-buick">Buick</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-cadillac">Cadillac</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-chevy">Chevrolet</a></div>
	</div>


	<div class="ca-row">
		<div class="ca-col-2"><a href="#" class="ca-btn-fiat">Fiat</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-ford">Ford</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-gmc">GMC</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-honda">Honda</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-hyundai">Hyundai</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-infiniti">Infiniti</a></div>
	</div>


	<div class="ca-row">
		<div class="ca-col-2"><a href="#" class="ca-btn-kia">KIA</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-lexus">Lexus</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-lincoln">Lincoln</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-maserati">Maserati</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-mazda">Mazda</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-mini">Mini</a></div>
	</div>


	<div class="ca-row">
		<div class="ca-col-2"><a href="#" class="ca-btn-mb">Mercedes</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-mitsubishi">Mitsubishi</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-nissan">Nissan</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-subaru">Subaru</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-toyota">Toyota</a></div>
		<div class="ca-col-2"><a href="#" class="ca-btn-vw">Volvo</a></div>
	</div>

	<div class="ca-row">
		<div class="ca-col-2"><a href="#" class="ca-btn-volvo">Volkswagen</a></div>
	</div>

</div>





<div id="font-sizes">
<div class="ca-row">
	<div class="ca-col-12">
		<h1>Font Sizes</h1>

		<table class="ca-table-striped ca-table-2">
			<tr>
				<th class="ca-background-demo">Class Name</th>
				<th class="ca-background-demo">Font Size</th>
			</tr>
			<tr>
				<td>.ca-font-xs</td>
				<td>8px</td>
			</tr>
			<tr>
				<td>.ca-font-sm</td>
				<td>10px</td>
			</tr>
			<tr>
				<td>.ca-font-md</td>
				<td>18px</td>
			</tr>
			<tr>
				<td>.ca-font-lg</td>
				<td>32px</td>
			</tr>
		</table>

	</div>
</div>




</div>


<div id="font-weight">
<div class="ca-row">
	<div class="ca-col-12">
		<h1>Font Weight</h1>

		<table class="ca-table-striped ca-table-2">
			<tr>
				<th class="ca-background-demo ca-text-center">Class Name</th>
				<th class="ca-background-demo ca-text-center">Font Weight</th>
			</tr>
			<tr>
				<td>.ca-font-normal</td>
				<td>normal</td>
			</tr>
			<tr>
				<td>.ca-font-bold</td>
				<td class="ca-font-bold">bold</td>
			</tr>
		</table>

	</div>
</div>




</div>


<div id="font-decoration">
<div class="ca-row">
	<div class="ca-col-12">
		<h1>Text Decoration</h1>

		<table class="ca-table-striped ca-table-2">
			<tr>
				<th class="ca-background-demo">Class Name</th>
				<th class="ca-background-demo">Text Decoration</th>
			</tr>
			<tr>
				<td>.ca-text-overline</td>
				<td class="ca-text-overline">overline</td>
			</tr>
			<tr>
				<td>.ca-text-underline</td>
				<td class="ca-text-underline">underline</td>
			</tr>
			<tr>
				<td>.ca-text-linethrough</td>
				<td class="ca-text-linethrough">linethrough</td>
			</tr>
		</table>

	</div>
</div>




</div>


<div id="font-alignment">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Font Alignment</h1>

		<table class="ca-table-striped ca-table-2">
				<tr>
					<th class="ca-background-demo">Class Name</th>
					<th class="ca-background-demo">Alignment</th>
				</tr>
				
				<tr>
					<td>.ca-text-left</td>
					<td>left</td>
				</tr>
				
				<tr>
					<td>.ca-text-center</td>
					<td>center</td>
				</tr>
				
				<tr>
					<td>.ca-text-right</td>
					<td>right</td>
				</tr>
				<tr>
					<td>.ca-text-justify</td>
					<td>justify</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div id="font-colors">
<div class="ca-row">
	<div class="ca-col-12">
		<h1>Font Colors</h1>

		<ul class="colors">
			<li class="ca-font-color-acura"> <span>Acura:</span> .ca-font-acura</li>
			<li class="ca-font-color-audi"> <span>Audi:</span> .ca-font-audi</li>
			<li class="ca-font-color-bmw"> <span>BMW:</span> .ca-font-bmw</li>
			<li class="ca-font-color-buick"> <span>Buick:</span> .ca-font-buick</li>
			<li class="ca-font-color-cadillac"> <span>Cadillac:</span> .ca-font-cadillac</li>
			<li class="ca-font-color-chevy"> <span>Chevrolet:</span> .ca-font-chevy</li>
			<li class="ca-font-color-fiat"> <span>Fiat:</span> .ca-font-fiat</li>
			<li class="ca-font-color-ford"> <span>Ford:</span> .ca-font-ford</li>
			<li class="ca-font-color-gmc"> <span>GMC:</span> .ca-font-gmc</li>
			<li class="ca-font-color-honda"> <span>Honda:</span> .ca-font-honda</li>
			<li class="ca-font-color-hyundai"> <span>Hyundai:</span> .ca-font-hyundai</li>
			<li class="ca-font-color-infiniti"> <span>Infiniti:</span> .ca-font-infiniti</li>
			<li class="ca-font-color-kia"> <span>KIA:</span> .ca-font-kia</li>
			<li class="ca-font-color-lexus"> <span>Lexus:</span> .ca-font-lexus</li>
			<li class="ca-font-color-lincoln"> <span>Lincoln:</span> .ca-font-lincoln</li>
			<li class="ca-font-color-maserati"> <span>Maserati:</span> .ca-font-maserati</li>
			<li class="ca-font-color-mazda"> <span>Mazda:</span> .ca-font-mazda</li>
			<li class="ca-font-color-mini"> <span>Mini:</span> .ca-font-mini</li>
			<li class="ca-font-color-mb"> <span>Mercedes-Benz:</span> .ca-font-mb</li>
			<li class="ca-font-color-mitsubishi"> <span>Mitsubishi:</span> .ca-font-mitsubishi</li>
			<li class="ca-font-color-nissan"> <span>Nissan:</span> .ca-font-nissan</li>
			<li class="ca-font-color-subaru"> <span>Subaru:</span> .ca-font-subaru</li>
			<li class="ca-font-color-toyota"> <span>Toyota:</span> .ca-font-toyota</li>
			<li class="ca-font-color-volvo"> <span>Volvo:</span> .ca-font-volvo</li>
			<li class="ca-font-color-vw"> <span>Volkswagen:</span> .ca-font-vw</li>
		</ul>

	</div>
</div>




</div>



<div id="component-background-colors">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Background Colors</h1>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-acura"><p class="ca-text-center">.ca-background-acura</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-audi"><p class="ca-text-center">.ca-background-audi</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-bmw"><p class="ca-text-center">.ca-background-bmw</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-buick"><p class="ca-text-center">.ca-background-buick</p></div>
		</div>			
	</div>


	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-cadillac"><p class="ca-text-center">.ca-background-cadillac</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-chevy"><p class="ca-text-center">.ca-background-chevy</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-fiat"><p class="ca-text-center">.ca-background-fiat</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-ford"><p class="ca-text-center">.ca-background-ford</p></div>
		</div>			
	</div>


	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-gmc"><p class="ca-text-center">.ca-background-gmc</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-honda"><p class="ca-text-center">.ca-background-honda</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-hyundai"><p class="ca-text-center">.ca-background-hyundai</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-infiniti"><p class="ca-text-center">.ca-background-infiniti</p></div>
		</div>			
	</div>

	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-kia"><p class="ca-text-center">.ca-background-kia</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-lexus"><p class="ca-text-center">.ca-background-lexus</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-lincoln"><p class="ca-text-center">.ca-background-lincoln</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-maserati"><p class="ca-text-center">.ca-background-maserati</p></div>
		</div>			
	</div>



	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-mazda"><p class="ca-text-center">.ca-background-mazda</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-mini"><p class="ca-text-center">.ca-background-mini</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-mb"><p class="ca-text-center">.ca-background-mb</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-mitsubishi"><p class="ca-text-center">.ca-background-mitsubishi</p></div>
		</div>			
	</div>


	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-nissan"><p class="ca-text-center">.ca-background-nissan</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-mini"><p class="ca-text-center">.ca-background-mini</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-subaru"><p class="ca-text-center">.ca-background-subaru</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-toyota"><p class="ca-text-center">.ca-background-toyota</p></div>
		</div>			
	</div>


	<div class="ca-row">
		<div class="ca-col-3">
			<div class="ca-background-volvo"><p class="ca-text-center">.ca-background-volvo</p></div>
		</div>			
		<div class="ca-col-3">
			<div class="ca-background-vw"><p class="ca-text-center">.ca-background-vw</p></div>
		</div>			
	</div>






</div>


<div id="component-cards">
<div class="ca-row">
	<div class="ca-col-4">
		<div class="ca-card">
			<div class="ca-card-head ca-background-demo"><h2>Card Title</h2></div>
			<div class="ca-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p></div>
		</div>
	</div>

	<div class="ca-col-4">
		<div class="ca-card">
			<div class="ca-card-head ca-background-demo"><h2>Card Title</h2></div>
			<div class="ca-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p></div>
		</div>
	</div>

	<div class="ca-col-4">
		<div class="ca-card">
			<div class="ca-card-head ca-background-demo"><h2>Card Title</h2></div>
			<div class="ca-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisi ut tincidunt ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque tincidunt at urna ut cursus. Quisque et accumsan lorem, nec feugiat risus. Quisque sagittis malesuada mi, eget dignissim leo porttitor sed. Donec malesuada congue metus ut pharetra. Etiam sit amet lacus eget diam dictum condimentum.</p></div>
		</div>
	</div>



</div>

	
</div>


<div id="component-forms">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Forms</h1>
			<p>Labels for forms are not needed. However, if they are, the label will display above the input. Simply use the placeholder attribute on the input itself.</p>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<form class="ca-form" action="#" method="post" id="ca-form">
				<div class="ca-row">
					<div class="ca-col-4">
						<label>First Name</label>
						<input type="text" name="fullname" id="fullname" placeholder="Full Name" />
					</div>

					<div class="ca-col-4">
						<label>Email Address</label>
						<input type="text" name="email" id="email" placeholder="Email Address" />
					</div>

					<div class="ca-col-4">
						<label>Phone Number</label>
						<input type="text" name="phone" id="phone" placeholder="Phone Number" />
					</div>
				</div>
				<div class="ca-row">
					<div class="ca-col-12">
						<label>First Name</label>
						<input type="text" name="fullname" id="fullname" placeholder="Full Name" />
					</div>
				</div>


				<div class="ca-row">
					<div class="ca-col-12 ca-radio-inline">
						<p>What do you wish to select?</p>
						<input type="radio" name="gender" value="male" checked><label>Phone</label>
						<input type="radio" name="gender" value="female"> <label>Email</label>
						<input type="radio" name="gender" value="other"> <label>Other</label>  
					</div>
				</div>
				
				<div class="ca-row">
					<div class="ca-col-12"><textarea placeholder="Comments"></textarea></div>
				</div>

				<div class="ca-row">
					<div class="ca-col-2 ca-offset-10">
						<button type="submit" value="submit" class="ca-btn-demo">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	
</div>


<div id="component-tables">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Tables</h1>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">

			<h3>Normal Table</h3>
			<table class="ca-table">
				<tr>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>
			</table>

			<h3>Striped Table</h3>
			<h5>2 Columns: .ca-table-2 (in addition to ca-table-)</h5>
			<table class="ca-table-striped ca-table-2">
				<tr>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>
			</table>

			<h5>3 Columns: .ca-table-3 (in addition to ca-table-)</h5>
			<table class="ca-table-striped ca-table-3">
				<tr>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>
			</table>

			<h5>4 Columns: .ca-table-4 (in addition to ca-table-)</h5>
			<table class="ca-table-striped ca-table-4">
				<tr>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
					<th class="ca-background-demo">Heading</th>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>

				<tr>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
					<td>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. </td>
				</tr>
			</table>



		</div>
	</div>

</div>


<div id="component-images">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Images</h1>

		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<img src="images/demo.jpg" class="ca-image">
		</div>
	</div>

</div>


<div id="component-vertical">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Vertical Align</h1>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">

			<div class="ca-vertical-wrap">
      			<div class="ca-vertical-align ca-vertical-align-middle">
        			<p>Vertical align middle</p>
      			</div>
    		</div>

		</div>
	</div>

</div>


<div id="component-iframes">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Iframes</h1>
			<p>Please note: The .ca-iframe class is used as a wrapping &lt;div&gt; around your iframe.</p>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<table class="ca-table-striped">
				<tr>
					<th class="ca-background-demo">Class Name</th>
					<th class="ca-background-demo">Attribute</th>
				</tr>
				<tr>
					<td>.ca-iframe</td>
					<td>Full Width Iframe</td>
				</tr>

				<tr>
					<td>.ca-video</td>
					<td>Full Width Video Iframe</td>
				</tr>

			</table>
		</div>
	</div>

	
	<div class="ca-row">
		<div class="ca-col-12">
			<div class="ca-video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/RH3i7qONrT4" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>



	<div class="ca-row">
		<div class="ca-col-12">
			<div class="ca-iframe ">
				<iframe src="https://www.theautohost.com/_assets/coding/copywrite/copywrite.html" height="30" width="100%" border="0" frameborder="0"></iframe>
			</div>
		</div>
	</div>



</div>


<div id="legacy">
	<div class="ca-row">
		<div class="ca-col-12">
			<h1>Legacy Grid</h1>
			
			<p>With the new grid, version 1 is still supported. Past content pages will still be supported.</p>
		</div>
	</div>

	<div class="ca-row">
		<div class="ca-col-12">
			<div class="cacontainer">
				<div class="carow">
					<div class="ca-6 text-center"><p>.ca-6</p></div>
					<div class="ca-6 text-center"><p>.ca-6</p></div>
				</div>
			</div>
		</div>
	</div>
</div>		</div>

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
