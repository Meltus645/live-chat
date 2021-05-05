<!doctype html>
<html lang="en-KE" dir="ltr">
	<head>
		<title>chat-App</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<?php
			require './class.config.php';

			class Chats extends DbConfig{
				protected function getChats(){
					$sql ="SELECT * FROM chats";
					$conn =$this->connect();
					if($conn){
						$query =$conn->query($sql);
						$num_rows =$query->num_rows;
						if($num_rows > 0){
							echo $num_rows;
						}
					}else{
						echo 'err';
					}
				}
			}
			$chats =new Chats();
			$chats->getChats();
		?>
	</body>
</html>
