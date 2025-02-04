<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hangman</title>
  <style>
    .history{
      text-decoration: none;
      color: black;
      display: inline-block;
      height: 2.1rem;
      width: 8rem;
      border: 1px solid black;
      border-radius: 8px;
      text-align: center;
      margin: 1rem;
      padding: 0.3rem;
    }
  </style>

  <!--[if IE]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
  <a class="history" href="./view_result.php">View history</a>
  <header>
    <img alt="Hangman logo" width="110" height="110" src="img/header.png">
    <h1>Hangman</h1>
    <p>Hangman Game Development</p>
  </header>

  <section class="hangman">
    <img id="leg-l" data-img-id="6" width="75" height="75" src="img/leg-l.png">
    <img id="leg-r" data-img-id="5" width="75" height="75" src="img/leg-r.png">
    <img id="arm-l" data-img-id="4" width="75" height="75" src="img/arm-l.png">
    <img id="arm-r" data-img-id="3" width="75" height="75" src="img/arm-r.png">
    <img id="head" data-img-id="1" width="75" height="75" src="img/head.png">
    <img id="body" data-img-id="2" width="75" height="75" src="img/body.png">
    <img id="gallows" width="200" height="400" src="img/gallows.png">
  </section>

  <section id="area-hint">
    <h2><b>Hint</b></h2>
    <p></p>
  </section>

  <section id="area-message">
    <p></p>
  </section>

  <section id="area-word">
    <h2></h2>
    <p></p>
  </section>

  <form>
    <label><input type="text" id="guess" name="guess" autocomplete="off" maxlength="1"></label>
    <label><input type="submit" id="submit" name="submit" value="Guess!"></label>
  </form>

  

  <script async src="js/microajax.min.js"></script>
  <script async src="js/hangman.min.js"></script>
</body>
</html>
