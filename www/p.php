<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>kalkulyator</title>
    </head>

    <body>
		<?php
			echo "Слогаемые";
		?>
		<form name="clg" action="pcheck.php" method="post">
			<hr />
			<input type="text" name="clg1" placeholder="слогаемое 1" />
			<input type="text" name="clg2" placeholder="слогаемое 2" />
			<input type="submit" name="sum" value="Ответ" />
		</form>
    </body>

</html>