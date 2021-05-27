<head>
		<!--Viewport for the things -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title> <?php 
		switch ($onPage) {
			case "attorney":
				echo "Attorney";
				break;
			case "about":
				echo "About";
				break;
			case "service":
				echo "Services";
				break;
			case "index":
				echo "Benedicto law office";
				break;
			case "sign_up":
				echo "Sign Up";
				break;
			default:
			 echo "No page found";
			 break;
		}
		
		?>
		 </title>
		<!--Icon for the lawfirm-->
		<link rel="shortcut icon" href="dummy/download.png" type="image/x-icon">
		<!-- Loading third party fonts -->
		<script src="https://kit.fontawesome.com/20be9020c0.js" crossorigin="anonymous"></script>
		

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
