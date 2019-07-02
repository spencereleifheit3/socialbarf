
<?php

?>

	<body>
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12"><img src="<?php echo IMAGES_DIR; ?>/le_logo.png" width="280"></div>
			</div>

			<div class="row">
				
				<div class="col-md-6">
					
					<table width="100%">
						
						<tr height = "1">
							<td colspan = "4">
							</td>
						</tr>

						<tr>

							<td width="10%" align = "center">
								<div id = "home_nav">
									<a href = "index.php?nav_page=home">Home</a>
								</div>
							</td>

							<td width = "1%" align = "center">
								|
							</td>

							<td width="10%" align = "center">
								<div id = "nav_1">
									<a href = "pages/wp_example/index.php">Wordpress Example</a>
								</div>
							</td>

							<td width = "1%" align = "center">
								|
							</td>

							<td width="10%" align = "center">
								<a href = "#">Link 2</a>
							</td>

							<td width = "1%" align = "center">
								|
							</td>

							<td width="10%" align = "center">
								<a href = "#">Link 3</a>
							</td>

							<td width = "1%" align = "center">
								|
							</td>

							<td width="10%" align = "center">
								<a href = "#">Link 4</a>
							</td>							

							<td width = "1%" align = "center">
								|
							</td>

							<td width="10%">
							
							</td>

							<td width = "1%" align = "center">
								
							</td>

							<td width="10%">
							
							</td>

							<td width = "1%" align = "center">
								
							</td>

							<td width="10%">
							
							</td>

							<td width = "1%" align = "center">
								
							</td>

							<td width="10%" align = "right">
								<a href = "#">
									<img src="<?php echo IMAGES_DIR; ?>/fb_icon.jpeg" height="10">
								</a>
							</td>

						</tr>

					</table>

				</div>

			</div>


		<script type = "text/javascript">			

	        $('#home_nav').bind("mouseover", function(){
	            var color  = $(this).css("background-color");

	            $(this).css("background", "#CCCCCC");

	            $(this).bind("mouseout", function(){
	                $(this).css("background", "#FFFFFF");
	            });    
	        });

	        $('#nav_1').bind("mouseover", function(){
	            var color  = $(this).css("background-color");

	            $(this).css("background", "#CCCCCC");

	            $(this).bind("mouseout", function(){
	                $(this).css("background", "#FFFFFF");
	            });    
	        });



		</script>
