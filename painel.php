<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Confeitaria</title>

		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="script.js" defer></script>
    </head>

    <body>
        <header>
			<div class="caixa">
				<h1><img src="./image/logo-2.jpg" class="logo"></h1>

				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="produtos.html">Produtos</a></li>
						<li><a href="tela-login.html"> Faça seu pedido</a></li>
						<li><a href="contato.html">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

        <section class="parte-principal">
			<h2 class="principal-titulo">A Confeitaria</h2>
			<p class="paragrafos">Localizada no coração da cidade a <strong>Confeitaria</strong> traz para o mercado a melhor qualidade em panificação.</p>
		</section>

        <!-- Carrossel de imagens -->
        <div class="slideshow-container fade">

            <!-- Imagens -->
            <div class="Containers">
              <div class="MessageInfo">1 / 3</div>
              <img src="image/cupcake-stand2.jpg" style="width:100%">
              <div class="Info">Nossos produtos são de altíssima qualidade</div>
            </div>
          
            <div class="Containers">
              <div class="MessageInfo">2 / 3</div>
              <img src="image/cupcake-stand5.jpg" style="width:100%">
              <div class="Info">Excelente localização</div>
            </div>
          
            <div class="Containers">
              <div class="MessageInfo">3 / 3</div>
              <img src="image/cupcake-stand6.jpg" style="width:100%">
              <div class="Info">Venha provar nossos deliciosos cupcakes</div>
            </div>
          
            <!-- Botões -->
            <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- Pontos -->
          <div style="text-align:center">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
          </div> 

          <section class="beneficios">
            <h3 class="principal-titulo">Benefícios</h3>

            <div class="conteudo-beneficios">
                <ul class="lista-beneficios">
                    <li class="itens">Atendimento aos Clientes</li>
                    <li class="itens">Espaço diferenciado</li>
                    <li class="itens">Localização</li>
                    <li class="itens">Produtos de qualidade</li>
                    <li class="itens">Limpeza</li>
                </ul>
                <div class="imagem-padaria">
                  <img src="image/cupcake-shop.jpg"alt="padaria" style="width:100%">
                  <div class="container">
                  </div>
                </div>

            </div>
        </section>

        <section class="mapa">
          <h3 class="principal-titulo">Nosso estabelecimento</h3>
          <p class="paragrafos">Nosso estabelecimento está localizado no coração da cidade.</p>
  
          <div class="mapa-conteudo">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58482.7426357684!2d-46.57967926875003!3d-23.63403149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6923fd253599%3A0xdb7939d1a950f666!2sCruzeiro%20do%20Sul%20Virtual%20PQ%20das%20Na%C3%A7%C3%B5es!5e0!3m2!1sen!2sbr!4v1679063437212!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>

        <button class="chatbot-toggler">
          <span class="material-symbols-rounded">mode_comment</span>
          <span class="material-symbols-outlined">close</span>
        </button>
        <div class="chatbot">
          <header>
            <h2>Chat</h2>
            <span class="close-btn material-symbols-outlined">close</span>
          </header>
          <ul class="chatbox">
            <li class="chat incoming">
              <span class="material-symbols-outlined">smart_toy</span>
              <p>Olá 👋<br>Olá, como posso te ajudar?</p>
            </li>
          </ul>
          <div class="chat-input">
            <textarea placeholder="Digite uma mensagem..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
          </div>
        </div>
      </body>

        <footer>
          <img src="./image/logo-2.jpg" class="logo">
          <p class="copyright">&copy; Desenvolvido por Paula Silvano Freire</p>
        </footer>

          <script src="javascript.js"></script>

    </body>