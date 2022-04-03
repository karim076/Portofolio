<form>
	<div class = "frame">
		<button id = "button_open_envelope">
			Email me
		</button>
		<div class = "message">
			<form method="POST" action="backend/contactController.php">
				<input type="text" name="name" id="name" placeholder=" Name* " required>

				<input type="email" name="email" id="email" placeholder=" Email* " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">
				
				<input type="text" name="phone" id="phone" placeholder=" Phone (optional)" autofocus> 
				
				<textarea name="msg" id="messarea" placeholder=" Message* " required></textarea>


				<input type="submit" value="Send" id="send">
			</form>
		</div>
		<div class = "bottom"></div>			
		<div class = "left"></div>
		<div class = "right"></div>
		<div class = "top"></div>
		<script src="js/script.js"></script>
	</div>
</form>
