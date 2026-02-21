<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Jeu Snake</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Jeu Snake</h1>
  <h2>Les règles du jeu :</h2>
  <p>Le serpent dirige et doit manger la pomme, à chaque fois qu’il mange, il grandit 
    et augmente son score. <br>Attention il faut éviter au serpent de toucher les bords du mur, son corps sinon il meurt et game over.</p>
  <canvas id="gameCanvas" width="400" height="400"></canvas>
  <h3 id="score">Score : 0</h3>
  <script src="JeuSnake.js"></script>
  <button class="rejouer" onclick="location.reload()">Rejouer</button>
  <h3 id="gameOver" style="display: none;">Game Over !</h3>
</body>






</html>
