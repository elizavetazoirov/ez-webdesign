<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactează-ne - EZ Web Design</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;600&display=swap" rel="stylesheet">
  <style>
    /* Stiluri pentru formular */
    body {
      font-family: 'Raleway', sans-serif;
      background: #2c3e50;
      color: #ecf0f1;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .contact-form {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      width: 80%;
      max-width: 600px;
    }

    .contact-form h2 {
      color: #f39c12;
      text-align: center;
      margin-bottom: 20px;
    }

    .contact-form label {
      font-size: 1.2em;
      color: #ecf0f1;
      display: block;
      margin-bottom: 5px;
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: #34495e;
      color: #ecf0f1;
      font-size: 1em;
    }

    .contact-form button {
      background-color: #f39c12;
      border: none;
      padding: 12px 20px;
      color: white;
      font-size: 1.1em;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #e67e22;
    }
  </style>
</head>
<body>

  <div class="contact-form">
    <h2>Formular de Contact</h2>
    <form action="send_message.php" method="POST">
      <label for="name">Nume:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Mesaj:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Trimite mesajul</button>
    </form>
  </div>

</body>
</html>
<form action="https://formspree.io/f/mgvkeapz" method="POST" style="max-width:500px;margin:auto;">
  <h2 style="color:#f39c12;">Trimite-ne un mesaj</h2>
  
  <label for="name">Nume:</label><br>
  <input type="text" name="name" id="name" required style="width:100%;padding:10px;margin:10px 0;"><br>

  <label for="email">Email:</label><br>
  <input type="email" name="email" id="email" required style="width:100%;padding:10px;margin:10px 0;"><br>

  <label for="message">Mesaj:</label><br>
  <textarea name="message" id="message" rows="5" required style="width:100%;padding:10px;margin:10px 0;"></textarea><br>

  <button type="submit" style="background-color:#f39c12;color:white;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;">
    Trimite
  </button>
</form>
