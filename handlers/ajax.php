<?php

include($_SERVER['DOCUMENT_ROOT']."/config.php");

if( isset($_REQUEST['action']) ){


	switch( $_REQUEST['action'] ){



		case "SendMessage":

			session_start();

			$query = $db->prepare("INSERT INTO chat SET user=?, message=?");

			$query->execute([$_SESSION['user'], $_REQUEST['message']]);

			echo 1;


		break;




		case "getChat":

			session_start();
			$query = $db->prepare("SELECT * from chat ORDER BY id DESC LIMIT 30");
			$query->execute();

			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			

			$chat = '';
			foreach( $rs as $r ){
				if($r->user == $_SESSION['user'])
				$chat .=  '<div class="siglemessageMe"><small>'.$r->user.' : </small><br>'.$r->message.'</div>';
				else
				$chat .=  '<div class="siglemessage"><small>'.$r->user.' : </small><br>'.$r->message.'</div>';
			}

			echo $chat;


		break;

	}


}


?>