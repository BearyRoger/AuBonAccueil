<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../mainCss.css" rel="stylesheet" />
    <title>Chambres d'hôtes</title>
</head>
<body>
<nav>
    <ul>
      <li><a href="../../index.html">ACCUEIL</a></li>
      <li><a href="nos_valeurs.html">NOS VALEURS</a></li>
      <li><a href="chambresHotes.html">CHAMBRES D'HOTES</a></li>
      <li><a href="boutique.html">BOUTIQUE</a></li>
      <li><a href="resto.html">RESTAURANT</a></li>
    </ul>
</nav>
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
            <input type="button" id="btn0" onclick="test()" value="Résrever"></button>
            
        </div>
        <div class='two'>
            <h2>2éme Chambre</h2>
            <p>Surface : 200 m²</p>
            <p>Prix : 849 € / nuit</p>
            <p>Nombre de lit : 8</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Chambre spacieuse pour 13 personne (5 lit double et 3 lit simple)</p>
            <input type="button" id="btn1" onclick="test1()" value="Résrever"></button>
        </div>
        <div class='three'>
            <h2>3iéme Chambre</h2>
            <p>Surface : 20 m²</p>
            <p>Prix : 150 € / nuit</p>
            <p>Nombre de lit : 1</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Petite chambre pour 2 personne (1 lit double)</p>
            <input type="button" id="btn2" onclick="test2()" value="Résrever"></button>
        </div>
        <div class='four'>
            <h2>4iéme Chambre</h2>
            <p>Surface : 25 m²</p>
            <p>Prix : 200 € / nuit</p>
            <p>Nombre de lit : 2</p>
            <img src="https://www.gites-de-france-gironde.com/img/liste/chambre-hotes-1615279251.jpg">
            <p>Description : Petite chambre pour 3 personne (1 lit double et 1 lit simple)</p>
            <input type="button" id="btn3" onclick="test3()" value="Résrever"></button>
        </div>
</div>
</body>
<footer>
    <ul>
        <li><a href="mentions_legales.html">Mentions légales</a></li>
    </ul> 

</footer>
</html>

<script>
    function test() {
        document.getElementById("btn0").setAttribute("value","Résrever")
        document.getElementById("btn0").setAttribute("onclick","testN()")
    }
    function testN() {
        document.getElementById("btn0").setAttribute("value","Annuler")
        document.getElementById("btn0").setAttribute("onclick","test()")
    }
    function test1() {
        document.getElementById("btn1").setAttribute("value","Résrever")
        document.getElementById("btn1").setAttribute("onclick","testN1()")
    }
    function testN1() {
        document.getElementById("btn1").setAttribute("value","Annuler")
        document.getElementById("btn1").setAttribute("onclick","test1()")
    }
    function test2() {
        document.getElementById("btn2").setAttribute("value","Résrever")
        document.getElementById("btn2").setAttribute("onclick","testN2()")
    }
    function testN2() {
        document.getElementById("btn2").setAttribute("value","Annuler")
        document.getElementById("btn2").setAttribute("onclick","test2()")
    }
    function test3() {
        document.getElementById("btn3").setAttribute("value","Résrever")
        document.getElementById("btn3").setAttribute("onclick","testN3()")
    }
    function testN3() {
        document.getElementById("btn3").setAttribute("value","Annuler")
        document.getElementById("btn3").setAttribute("onclick","test3()")
    }
</script>
