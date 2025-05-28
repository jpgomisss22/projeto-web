<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ronaldinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
      /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #fff;
    color: #fff;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Container do formulário */
.form-container {
    background-color: #fff;
    color: #000;
    border-radius: 20px;
    padding: 30px 25px;
    width: 90%;
    max-width: 350px;
    box-shadow: 0 0 10px rgba(255,255,255,0.05);
}

/* Input Fields */
.form-container input[type="email"],
.form-container input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0 20px 0;
    border: 1px solid #ccc;
    border-radius: 12px;
    background-color: #f9f9f9;
    font-size: 16px;
}

/* Estilo do botão */
.form-container button {
    width: 100%;
    padding: 14px;
    background-color: #2b2b2b;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

/* Link Esqueceu a senha */
.form-container a {
    display: block;
    text-align: left;
    font-size: 14px;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
}

/* Back arrow */
.back-arrow {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 28px;
    color: #FFD700; /* Amarelo ouro */
    text-decoration: none;
    font-size: 40px;
}
    </style>
  </head>
  <body>