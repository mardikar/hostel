<?php
include ("session.php");
require_once("config.php");
$db_handle = new ConfigController();
$query ="SELECT * FROM userpost order by timee desc";
$result = mysql_query($query);
$email=$_SESSION["login_user"];
$user = mysql_query("select * from userdata where emai ='". $email."'");
$userrow = mysql_fetch_array($user);
?>
<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
		<script type="text/javascript" src="js/post.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/material.css">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

		<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.2.6.pack.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            
			<script>
    
                function like_post(id,pid,action){
                    
                    $.ajax({
					type : "POST",
					url : "postlike.php",
					data :"userid="+id+"&postid="+pid,
                    beforeSend: function(){
                        $('.voting-'+pid+' .btn-likes').html("<img src='likeloader.gif' />");
	                },
					success : function(response) {
						document.getElementById("count-"+pid).innerHTML=response;
                        switch(action){
                                case "like":
                                $('.voting-'+pid+' .btn-likes').html('<input type="button"  class="unlike" onClick="like_post('+id+','+pid+',\'unlike\')" />');
                                break;
                                case "unlike":
                                $('.voting-'+pid+' .btn-likes').html('<input type="button"  class="like"  onClick="like_post('+id+','+pid+',\'like\')" />')
                                break;
                        }
					}
				    });
                }
            </script>
		
		<title>VJTI Hostel</title>
		<link rel="stylesheet" href="css/home.css">
	</head>
	<body>
		<header class="header-fixed">

	<div class="header-limiter">

		<h1>Welcome,</h1>

		<nav>
			<a href="about.php" >About</a>
			<a href="admission.php" >Admission</a>
			<a href="home.php" class="selected">Home</a>
			<button id="show-dialog" type="button" class="mdl-button" style="color: white;">
							Compose Story
						</button>
						<a id="userdetails" class="mdl-navigation__link" href=""><?php echo($_SESSION['login_user']); ?></a>
			<a href="logout.php">Logout</a>

			
		</nav>

	</div>

</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>
	

	
		<dialog class="mdl-dialog" style="width:60%; margin-left: 18%; position:fixed;">
			<h2 class="mdl-dialog__title" style="font-size: 24px; margin-left: 1%; margin-top:0;">What's your story?</h2>

			<form action="uploadpost.php" method="post">
				<div class="mdl-dialog__content">
					<textarea cols="100" id="aboutDescription" name="aboutDescription" placeholder="Enter Your Story Here............" style="resize: none; "></textarea>
					<p id="alert" style="color:red; "><p>

				</div>
				<div class="mdl-dialog__actions">
					<button type="submit"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" 	>
						Post
						<script type="text/javascript">
							post();
						</script>
					</button>
					<button type="button" class="mdl-button close">
						Close
					</button>
				</div>
			</form>
		</dialog>
		<script>
			var dialog = document.querySelector('dialog');
			var showDialogButton = document.querySelector('#show-dialog');
			if (!dialog.showModal) {
				dialogPolyfill.registerDialog(dialog);
			}
			showDialogButton.addEventListener('click', function() {
				dialog.showModal();
			});
			dialog.querySelector('.close').addEventListener('click', function() {
				dialog.close();
			});
		</script>


	<div id="list">
        <?php
        if(!empty($result)) {
            //$id = $userrow["id"];
                while($row = mysql_fetch_array($result)) {
                    $image = mysql_query("select * from userdata where emai ='". $row["email"]."'");
		              $img = mysql_fetch_array($image);
        ?>
		
		<div class="post">
			<div class="post_header"><img src="data:image/jpeg;base64,<?php echo base64_encode($img['image']) 
                ?>" height = 90; width = 60;/>
				<div class="personal">
					<p>
						<b><?php echo $img["fname"]; ?></b>
					</p>
					<p>
						<?php echo $row["timee"]; ?>
					</p>
				</div>
			</div>
        <?php
            $query ="SELECT * FROM userlike WHERE pid = " . $row["pid"] . " and cid = " . $userrow["cid"] . "";
            $count = mysql_query($query);
            $str_like = "unlike";
            if(!empty($count)) {
            $str_like = "like";
            }
         ?>
            <div class="voting-<?php echo $row["pid"]; ?>">
                 <div class="btn-likes"><input type="button" class="<?php echo $str_like; ?>" onClick="like_post(<?php echo $userrow["cid"];?>,<?php echo $row["pid"]; ?>,'<?php echo $str_like; ?>')" /></div>
                    <span id="count-<?php echo $row["pid"]; ?>"><?php echo $row["upvote"]; ?></span>
                
                   </div> 
    
            <input type="hidden" id="pid-<?php echo $row["pid"]; ?>" value="<?php echo $row["pid"]; ?>">
        <input type="hidden" id="id-<?php echo $row["pid"]; ?>" value="<?php echo $userrow["cid"]; ?>">
			<div class="post_data">
				<p id="data">
			<?php echo $row["post"]; ?>
				</p>
			</div>
</div>
<?php		
}
}
?>
	</div>

	
	<?php
	include_once ("footer.php");
	?>
		</body>
		<script>
			$(document).ready(function() {

				var showHeaderAt = 150;

				var win = $(window),
				    body = $('body');

				// Show the fixed header only on larger screen devices

				if (win.width() > 600) {

					// When we scroll more than 150px down, we set the
					// "fixed" class on the body element.

					win.on('scroll', function(e) {

						if (win.scrollTop() > showHeaderAt) {
							body.addClass('fixed');
						} else {
							body.removeClass('fixed');
						}
					});

				}

			});

</script>


</html>
