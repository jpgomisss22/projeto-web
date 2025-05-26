<div class="biblioteca-container">

    <h1>Biblioteca Virtual</h1>

    <!-- Seção: Aventura -->
    <section class="genero">
        <h2>Aventura</h2>
        <div class="livros">
            <div class="livro">
                <img src="imagens/aventura1.jpg" alt="Capa do Livro">
                <h3>As Aventuras de Tom Sawyer</h3>
                <p><strong>Autor:</strong> Mark Twain</p>
                <p>Um garoto travesso vive aventuras ao longo do rio Mississippi.</p>
            </div>

            <div class="livro">
                <img src="imagens/aventura2.jpg" alt="Capa do Livro">
                <h3>Robinson Crusoé</h3>
                <p><strong>Autor:</strong> Daniel Defoe</p>
                <p>Homem náufrago sobrevive sozinho em uma ilha por décadas.</p>
            </div>
        </div>
    </section>

    <!-- Seção: Filosofia -->
    <section class="genero">
        <h2>Filosofia</h2>
        <div class="livros">
            <div class="livro">
                <img src="imagens/hobbes.jpg" alt="Hobbes">
                <h3>10 Lições sobre Hobbes</h3>
                <p><strong>Autor:</strong> Fernando Magalhães</p>
                <p>Introdução ao pensamento político de Thomas Hobbes.</p>
            </div>
        </div>
    </section>

    <!-- Seção: Ficção -->
    <section class="genero">
        <h2>Ficção Científica</h2>
        <div class="livros">
            <div class="livro">
                <img src="imagens/ficcao1.jpg" alt="Capa">
                <h3>1984</h3>
                <p><strong>Autor:</strong> George Orwell</p>
                <p>Um clássico distópico sobre vigilância e opressão governamental.</p>
            </div>

            <div class="livro">
                <img src="imagens/ficcao2.jpg" alt="Capa">
                <h3>Fundação</h3>
                <p><strong>Autor:</strong> Isaac Asimov</p>
                <p>Uma jornada épica sobre a preservação do conhecimento humano.</p>
            </div>
        </div>
    </section>

</div>

<style>
    .biblioteca-container {
    padding: 30px;
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
}

.biblioteca-container h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #222;
}

.genero {
    margin-bottom: 40px;
}

.genero h2 {
    color: #1a4ed3;
    margin-bottom: 20px;
}

.livros {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.livro {
    background-color: #fff;
    border-radius: 10px;
    padding: 15px;
    width: 220px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.livro img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.livro h3 {
    margin: 10px 0 5px;
    font-size: 16px;
    color: #000;
}

.livro p {
    font-size: 14px;
    color: #333;
}

</style>
