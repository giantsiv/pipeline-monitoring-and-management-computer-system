<?php
$level=2;
include('checksession.php');
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css?v=<?=time();?>">
    	<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
		<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/site.webmanifest">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    	<div class="grid-container">
    	<?php include('topbar.php');?>
    		<div class="left">	
 				<?php include('loaduserinfo.php');?>
 			</div>
 			<div class="master">
                
				<font id="bigtext"  size="5px;">Ανάθεση πόστου</font></br>
				<?php include('assignmentoptions.php'); ?>
			
			
			<font id="bigtext"  size="5px;">Κατάσταση λογαριασμού</font></br>
			<form method="get" action="changeaccountstatus.php">
				<?php include('accountstatus.php'); ?>
			</form>
			</div>
				
    		<?php include('footer.php');?>
    	</div>
    </body>
</html>
<script>
	function enabled(){
	 document.getElementById("inputform").disabled=false;
	}
	

</script>

