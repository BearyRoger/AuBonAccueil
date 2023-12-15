<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../mainCss.css" rel="stylesheet" />
    <title>Chambres d'hôtes</title>
</head>
<body>
    <div>
        <h1>Nos chambre d'hôtes</h1>
    </div>
    <div class='divGrid'>
        <div class='one'>
            <h2>1er Chambre</h2>
            <p>Surface : 50 m²</p>
            <p>Prix : 350 € / nuit</p>
            <p>Nombre de lit : 2</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Chambre modeste pour 3 personne (1 lit double et 1 lit simple)</p>
            <?php
            if (isset($_POST['R1']) && $_POST['R1'] && $_POST['R1'] == '1') {
            ?>          
            <form method="post">
                <input type="hidden" name="R1" value="-1">
                <button type="submit">Anuller</button>   
            </form>
            <?php } else {?>
            <form method="post">
                <input type="hidden" name="R1" value="1">
                <button type="submit">Résrever</button>   
            </form>
            <?php }?>
            
        </div>
        <div class='two'>
            <h2>2éme Chambre</h2>
            <p>Surface : 200 m²</p>
            <p>Prix : 849 € / nuit</p>
            <p>Nombre de lit : 8</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Chambre spacieuse pour 13 personne (5 lit double et 3 lit simple)</p>
            <?php
            if (isset($_POST['R2']) && $_POST['R2'] && $_POST['R2'] == '1') {
            ?>          
            <form method="post">
                <input type="hidden" name="R2" value="-1">
                <button type="submit">Anuller</button>   
            </form>
            <?php } else {?>
            <form method="post">
                <input type="hidden" name="R2" value="1">
                <button type="submit">Résrever</button>   
            </form>
            <?php }?>
        </div>
        <div class='three'>
            <h2>3iéme Chambre</h2>
            <p>Surface : 20 m²</p>
            <p>Prix : 150 € / nuit</p>
            <p>Nombre de lit : 1</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Petite chambre pour 2 personne (1 lit double)</p>
            <?php
            if (isset($_POST['R3']) && $_POST['R3'] && $_POST['R3'] == '1') {
            ?>          
            <form method="post">
                <input type="hidden" name="R3" value="-1">
                <button type="submit">Anuller</button>   
            </form>
            <?php } else {?>
            <form method="post">
                <input type="hidden" name="R3" value="1">
                <button type="submit">Résrever</button>   
            </form>
            <?php }?>
        </div>
        <div class='four'>
            <h2>4iéme Chambre</h2>
            <p>Surface : 25 m²</p>
            <p>Prix : 200 € / nuit</p>
            <p>Nombre de lit : 2</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Petite chambre pour 3 personne (1 lit double et 1 lit simple)</p>
            <?php
            if (isset($_POST['R4']) && $_POST['R4'] && $_POST['R4'] == '1') {
            ?>          
            <form method="post">
                <input type="hidden" name="R4" value="-1">
                <button type="submit">Anuller</button>   
            </form>
            <?php } else {?>
            <form method="post">
                <input type="hidden" name="R4" value="1">
                <button type="submit">Résrever</button>   
            </form>
            <?php }?>
        </div>
</div>
</body>
</html>