
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Reservations</title>
    <link rel="stylesheet" href="./css/style1.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Oakland</span> Towers</h1>
        </div>
        <nav>
          <ul>

            <li class="current"><a href="cs.php">Customer Service</a></li>
            <li><a href="welcome.php">Reservations</a></li>
            <li><a href="index.html">Home</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Save now and see our lower rates.</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">SEE LOWER RATES</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <aside id="sidebar">
          <div class="dark">
            <h3>Leave us a message</h3>
            <form action="insert1.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="message">Message:</label>
        <input type="text" name="message" id="message">
    </p>
    <input type="submit" value="Submit">
</form>
          </div>
        </aside>
      </div>

    <footer>
      <p>Oakland Towers, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
