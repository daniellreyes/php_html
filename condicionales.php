<?php
$ody_invocado = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>NO hagas esto Daniel xd</h1>
    <?php 
    // Esto no se debe de hacer xd
        if (true) {
            echo "<p>Esta condicional es verdadera</p>";
        } else {
            echo "<p>Esta condicional</p>";
        }
    ?>
    <h1>Medio aceptable Daniel xd</h1>
    <?php if ($ody_invocado) { ?>
     <b>🤪</b>
     <?php } else { ?>
     <b>😟</b>
     <?php } ?>

    <h1>Esto si hazlo Daniel</h1>
    <?php if ($ody_invocado): ?>
        <b>🤪</b>
    <?php else: ?>
        <b>🤪</b>
    <?php endif; ?>

</body>
</html>