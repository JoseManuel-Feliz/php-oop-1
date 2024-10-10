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
                    <img <?= 'src="' . $Movie->poster . '"' . 'alt="' . $Movie->title  . ' Poster "' ?>>

                    <p>
                        Title:
                        <?= $Movie->title ?>
                    </p>
                    <p>
                        Release date:
                        <?= $Movie->date ?>
                    </p>
                    <p>
                        Plot:
                        <?= $Movie->plot ?>
                    </p>
                    <p>
                        Rating:
                        <?= $Movie->vote ?>
                    </p>
                    <p>
                        Critics Rating:
                        <?= $Movie->critic ?>
                    </p>

                    <div>
                        Genres:
                        <?php foreach ($Movie->genre as $single_genre) { ?>
                            <span>
                                <?= $single_genre ?>
                            </span>
                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>

</html>