<body>
	<form action="./procesar.php" method="GET">
		<label for="input_text">
			<span><strong>Texto de entrada</strong></span><br>
			<textarea name="user_text" required></textarea>
			<input type="submit">
		</label>
	</form>
	<?php 
		if (isset($_GET['date_mayus'])) {
			$respuesta_mayus = $_GET['date_mayus'];
			$respuesta_minus = $_GET['date_minus'];

			echo "<p>Mayusculas: $respuesta_mayus</p>";
			echo "<p>Minuscula: $respuesta_minus</p>";
		}
	?>
</body>