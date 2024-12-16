<?php include("cabecalho.php"); ?>
<main>
        <section>
            <h2>Explore o Fascinante Mundo das Lendas Urbanas</h2>
            <p>
                Nosso site é dedicado a explorar os mistérios das lendas urbanas e a riqueza da literatura. 
                Além de curiosidades e histórias intrigantes, apresentamos livros de mistério,suspense, funko pops, canecas personalizadas e mais. 
               
            </p>
        </section>

        <!-- Painéis -->
        <div class="container paineis">
            <section class="painel novidades">
               <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produtolenda.php">
                            <figure>
                                <img src="img/livo1.jfif" alt="Capa do Livro 1">
                                <figcaption>"Segredos Ocultos" - R$ 39,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                       <a href="produtolenda.php">
                            <figure>
                                <img src="img/livro2.jfif" alt="Capa do Livro 2">
                                <figcaption>"Sombras e Mistérios" - R$ 29,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure class="jason1">
                                <img src="img/funco1a.png" alt="Camiseta 1">
                                <figcaption>Camiseta "Saci-Pererê" - R$ 49,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure class="funco2">
                                <img src="img/funco2.png" alt="Camiseta 2">
                                <figcaption>Moleton "Monstro do Lago Ness" - R$ 89,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <a href="produtolenda.php">
                            <figure>
                                <img src="img/livro3.jfif" alt="Capa do Livro 3">
                                <figcaption>"Mistérios do Além" - R$ 34,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure>
                                <img src="img/livro4.jpg" alt="Capa do Livro 4">
                                <figcaption>"A Lenda da Dama de Branco" - R$ 44,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure class="caneca1">
                                <img src="img/caneca1.jfif" alt="Camiseta 3">
                                <figcaption>Camiseta "Tengu Japonês" - R$ 49,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure class="caneca2">
                                <img src="img/caneca2.webp" alt="Camiseta 4">
                                <figcaption>Moleton "Chupacabra" - R$ 89,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>
        <!-- Fim Painéis -->
    </main>
<body> <!-- Inicio do corpo da página -->

  ... <!-- Conteúdo da página -->

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body> <!-- Fim do corpo da página -->
<?php include("rodape.php"); ?>
<script	src="js/jquery.js"></script>
<script	src="js/home.js"></script>
</body>
</html>
