<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/messages/resources/inc/header.php');

if (!isset($_SESSION['user'])) {
	echo"zaloguj się ";
	header("Location: login.blade.php");
}
?>

	<div class="centeralised">
	
	<div class="chathistory"></div>

	<div class="chatbox">

		<form id="myForm" action="" method="POST">
			
			<textarea class="txtarea" id="message" name="message"></textarea>

		</form>

		<button onclick=hide_element()>Wyślij</button>

	</div>

	</div>


	<script>


		$(document).ready(function(){
			loadChat();
		});

		function hide_element() {
			var message = $('#message').val();
			if(message != '')
		$.post('/messages/handlers/ajax.php?action=SendMessage&message='+message, function(response){
		
		loadChat();
		$('#message').val('');

		});

		}
		
		$('#message').keyup(function(e){


			var message = $(this).val();

			if( e.which == 13 ){

				$.post('/messages/handlers/ajax.php?action=SendMessage&message='+message, function(response){
					
					loadChat();
					$('#message').val('');

				});

			}

		});



		function loadChat()
		{
			$.post('/messages/handlers/ajax.php?action=getChat', function(response){
				
				$('.chathistory').html(response);

			});
		}


		setInterval(function(){
			loadChat();
		}, 2000);

	</script>


</body>
</html>