<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>kalkulyator</title>
    </head>

    <body>
		<?php
			echo "Выберите действие";
		?>
		<form name="+-*/" action="check.php" method="post">
			<hr />
			<input type="submit" name="+" value="+" />
			<input type="submit" name="-" value="-" />
			<input type="submit" name="*" value="*" />
			<input type="submit" name="/" value="/" />
		</form>
    </body>

</html>
