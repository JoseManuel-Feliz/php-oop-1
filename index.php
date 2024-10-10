<?php

require __DIR__ . "/db/MoviesClass.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>PHP OOP 1</title>
</head>

<body>
    <main>
        <ul>
            <?php foreach ($Movies as $Movie) { ?>
                <li>
                    <?= 'src="' . $Movie->poster . '"' . 'alt="' . $Movie->title  . ' Poster "' ?>>

                    <p>
                        <?= $Movie->title ?>
                    </p>
                    <p>
                        <?= $Movie->date ?>
                    </p>
                    <p>
                        <?= $Movie->plot ?>
                    </p>
                    <p>
                        <?= $Movie->vote ?>
                    </p>
                    <p>
                        <?= $Movie->critic ?>
                    </p>
                    <p>
                        <?= $Movie->genre ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>

</html>