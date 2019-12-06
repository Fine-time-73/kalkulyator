<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>kalkulyator</title>
    </head>

    <body>
		<?php
			echo "Делимое, делитель";
		?>
		<form name="clg" action="dcheck.php" method="post">
			<hr />
			<input type="text" name="delim" placeholder="Делимое" />
			<input type="text" name="delit" placeholder="Делитель" />
			<input type="submit" name="otvd" value="Ответ" />
		</form>
    </body>

</html>