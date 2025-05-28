<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Interativa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>

<header>
  <strong style="font-size: 18px;">📚 Biblioteca</strong>
  <div class="search-box">
    <input type="text" placeholder="Buscar livros, autores...">
  </div>
  <i class="fa-solid fa-user"></i>
</header>

<div class="top-menu">
  <button onclick="showSection('favoritos')">
    <i class="fa-regular fa-heart"></i> Favoritos
  </button>
  <button onclick="showSection('historico')">
    <i class="fa-regular fa-clock"></i> Histórico
  </button>
  <button onclick="showSection('pedidos')">
    <i class="fa-regular fa-box"></i> Pedidos
  </button>
</div>

<div id="favoritos" class="section">
  <div class="carousel">
    <img src="https://via.placeholder.com/160x100?text=Oferta+1">
    <img src="https://via.placeholder.com/160x100?text=Oferta+2">
    <img src="https://via.placeholder.com/160x100?text=Oferta+3">
  </div>

  <div class="categorias">
    <h3>Categorias</h3>
    <div class="scroll-container">
      <button class="scroll-arrow left" onclick="scrollLeft('cat')">&#8249;</button>
      <div class="categorias-lista" id="cat">
        <div class="categoria">
          <img src="../IMG/romance.png" alt="Romance">
          <p>Romance</p>
        </div>
        <div class="categoria">
          <img src="../IMG/romance.png" alt="Romance">
          <p>Romance</p>
        </div>
        <div class="categoria">
          <img src="../IMG/romance.png" alt="Romance">
          <p>Romance</p>
        </div>
        <div class="categoria">
          <img src="../IMG/magia.png" alt="Magia">
          <p>Magia</p>
        </div>
        <div class="categoria">
          <img src="../IMG/drama.png" alt="Drama">
          <p>Drama</p>
        </div>
      </div>
      <button class="scroll-arrow right" onclick="scrollRight('cat')">&#8250;</button>
    </div>
  </div>

  <div class="recomendados">
    <h3>Recomendados</h3>
    <div class="scroll-container">
      <button class="scroll-arrow left" onclick="scrollLeft('rec')">&#8249;</button>
      <div class="livros-lista" id="rec">
        <div class="livro">
          <img src="https://via.placeholder.com/100x150?text=Livro1">
          <p><strong>Autor</strong><br>R$36,00</p>
        </div>
        <div class="livro">
          <img src="https://via.placeholder.com/100x150?text=Livro2">
          <p><strong>Autor</strong><br>R$42,00</p>
        </div>
      </div>
      <button class="scroll-arrow right" onclick="scrollRight('rec')">&#8250;</button>
    </div>
  </div>
</div>

<div id="historico" class="section hidden">
  <p style="padding: 20px;">Histórico de leitura vazio...</p>
</div>

<div id="pedidos" class="section hidden">
  <div class="comprados">
    <h3>Comprados</h3>
    <div class="livros-lista">
      <div class="livro">
        <img src="https://via.placeholder.com/100x150?text=LivroA">
        <p><strong>Autor</strong><br>R$36,00</p>
      </div>
      <div class="livro">
        <img src="https://via.placeholder.com/100x150?text=LivroB">
        <p><strong>Autor</strong><br>R$36,00<br><span style="color: orange;">Previsão: 31/02</span></p>
      </div>
    </div>
  </div>
</div>

<footer>
  <i class="fa-solid fa-house"></i>
  <i class="fa-solid fa-tags"></i>
  <i class="fa-solid fa-heart"></i>
  <i class="fa-solid fa-user"></i>
</footer>

<script src="../script.js"></script>

</body>
</html>
