<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');

if (!isset($_SESSION['user'])) {
	echo"zaloguj się ";
	header("Location: login.blade.php");
}
?>

	<div class="centeralised">
	
		<div class="chathistory" id="mes"></div>

		<div class="chatbox">

			<form class="messagesform" action="" method="POST">
				<textarea oninput="auto_grow(this)" class="textareaMes" id="message" name="message" placeholder="Wiadomość..."></textarea>
				<button type="button" class="send-btn btn btn-primary " onclick=hide_element()>Wyślij</button>
			</form>
		</div>

	</div>


	<script>

		function auto_grow(element) {
			element.style.height = "20px";
			element.style.height = (element.scrollHeight)+"px";
		}

		$(document).ready(function(){
			loadChat();
		});

		function hide_element() {
			var message = $('#message').val();
			if(message != '')
		$.post('/handlers/ajax?action=SendMessage&message='+message, function(response){
		
		loadChat();
		$('#message').val('');

		});

		}
		
		$('#message').keyup(function(e){


			var message = $(this).val();

			if( e.which == 13 ){

				$.post('/handlers/ajax?action=SendMessage&message='+message, function(response){
					
					loadChat();
					$('#message').val('');

				});

			}

		});



		function loadChat()
		{
			var x = $.post('/handlers/ajax?action=getChat', function(response){
				
				$('.chathistory').html(response);
				
			});
		}

		setInterval(function(){
			loadChat();
		}, 2000);

	</script>


</body>
</html>