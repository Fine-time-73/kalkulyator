<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>kalkulyator</title>
    </head>

    <body>
		<?php
			echo "Уменьшаемое, вычитаемое";
		?>
		<form name="clg" action="mcheck.php" method="post">
			<hr />
			<input type="text" name="um" placeholder="Уменьшаемое" />
			<input type="text" name="vych" placeholder="Вычитаемое" />
			<input type="submit" name="otvm" value="Ответ" />
		</form>
    </body>

</html>