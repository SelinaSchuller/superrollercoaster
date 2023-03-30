<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Super Rollercoaster</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>SuperRollercoaster</h1>
            <h2>Takenlijst:</h2> 
        </div>
        
    </header>
    <main>
        <div class="wrapper">
            <div class="bord">
                <div class="box">
                    <h3>To do: </h3>
                    <?php // foreach($taken as $taak): ?>
                    <div class="taak">
                        <p>Taak: <?php ?></p>
                        <p>Aangemaakt door: <?php ?></p>
                        <p>Informatie: <?php ?></p> 
                    </div>
                    <?php// endforeach; ?>
                </div>
                <div class="box">
                    <h3>In progress: </h3>
                    <?php // foreach($taken as $taak): ?>
                    <div class="taak">
                        <p>Taak: <?php ?></p>
                        <p>Aangemaakt door: <?php ?></p>
                        <p>Informatie: <?php ?></p> 
                    </div>
                    <?php// endforeach; ?>
                </div>
                <div class="box">
                    <h3>Review: </h3>
                    <?php // foreach($taken as $taak): ?>
                    <div class="taak">
                        <p>Taak: <?php ?></p>
                        <p>Aangemaakt door: <?php ?></p>
                        <p>Informatie: <?php ?></p> 
                    </div>
                    <?php// endforeach; ?>
                </div>
                <div class="box">
                    <h3>Done: </h3>
                    <?php // foreach($taken as $taak): ?>
                    <div class="taak">
                        <p>Taak: <?php ?></p>
                        <p>Aangemaakt door: <?php ?></p>
                        <p>Informatie: <?php ?></p> 
                    </div>
                    <?php// endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="wrapper">
            <p>Super Rollercoaster, made by Lucan, Kelvin, Lucas en Selina&copy;</p>
        </div>
    </footer>
</body>
</html>