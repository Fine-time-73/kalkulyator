<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>kalkulyator</title>
    </head>

    <body>
		<?php
			echo "Умножаемое, множитель";
		?>
		<form name="clg" action="ucheck.php" method="post">
			<hr />
			<input type="text" name="umn" placeholder="Умножаемое" />
			<input type="text" name="mn" placeholder="Множитель" />
			<input type="submit" name="proiz" value="Ответ" />
		</form>
    </body>

</html>