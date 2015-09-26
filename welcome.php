<html>
<head>
<title>Load screen</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php 
		$pass = $_POST["bame"]; 
		if($pass == "Hyperion"){
			session_start();
			$_SESSION["Access"] = "True";
			
		}
	?>
	
	<h1 id="check">
	
	</h1>

	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.ui.js'></script>
	<script src="js/welcome.js"></script>
	
	<script>
		var password = "<?php echo $pass; ?>";
		
		$("#check").html("> ");
		//console.log(password.length);
		
		var temp = 0;
		
		$("#check").velocity(
			{opacity: 1},
			{
				duration: 2000,
				progress: function(elements, complete, remaining, start, tweenValue) {
					//console.log(complete);
					if(((1/password.length)*temp) <= complete){
						$("#check").html("> " + password.substring(0, temp+1));
						temp++;
					}
				}
			}
		)
		if(<?php if($pass == "Hyperion"){echo "1";} else {echo "0";}; ?>==1){
			$("body").velocity(
			{
				backgroundColor: "#90D49A",
				color: "#000000"
			},
			{
				duration: 1000,
				delay: 2000
			}
			);
			$("html").velocity(
			{
				backgroundColor: "#FFFFFF",
				color: "#000000"
			},
			{
				duration: 1000,
				delay: 2000
			}
			);
		} else {
			$("body").velocity(
			{
				backgroundColor: "#FA5C5C",
				color: "#000000"
			},
			{
				duration: 1000,
				delay: 2000
			}
			);
			$("html").velocity(
			{
				backgroundColor: "#000000",
				color: "#000000"
			},
			{
				duration: 1000,
				delay: 2000
			}
			);
		}
	</script>
</body>
</html>