<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Guess My Number</title>
    <link rel="shortcut icon" type="images/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>Guess My Number</h1>
    </header>
    <main>
      <p>Enter a number between 1 and 100:</p>
      <div class="guess-container">
        <form method="post" onsubmit="event.preventDefault();">
          <input type="text" id="userGuess" name="userGuess">
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
      <?php
        if (isset($_POST['submit'])) {
          $userGuess = intval($_POST['userGuess']);
          $randomNumber = rand(1, 100);

          if (!is_numeric($userGuess) || $userGuess < 1 || $userGuess > 100) {
            echo '<p id="output">Please enter a valid number between 1 and 100.</p>';
          } elseif ($userGuess === $randomNumber) {
            echo '<p id="output">Congratulations! You guessed my number (' . $randomNumber . ') correctly!</p>';
          } else {
            echo '<p id="output">Sorry, you guessed ' . $userGuess . '. The correct number was ' . $randomNumber . '.</p>';
          }
        }
      ?>
    </main>
  </body>
</html>
