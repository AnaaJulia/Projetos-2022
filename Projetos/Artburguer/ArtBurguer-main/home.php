<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>ArtBurguer</title>
    <link rel="shortcut icon" href="img/logo4.png" type="image/x-icon">

  </head>
  <body>
    
   <!-- Navbar  -->
   <nav class="navbar navbar-light fixed-top navbar-expand-sm">
      <div id="container-fluid "class="container">
        <a class="navbar-brand" href="#"><img src="img/logo4.png" alt="logo " class="logo"></a><!--logo-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"  aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="item">
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>
            <li class="item">
              <a class="nav-link" href="#especiais">Especiaias</a>
            </li> 
            <li class="item">
              <a class="nav-link " href="#cardapio">Cardápio</a>
            </li>
            <li class="item">
              <a class="nav-link " href="#sobremesa">Sobremesas</a>
            </li>
              
            <li class="item">
              <a class="nav-link" href="register.php">Cadastro</a>
            </li>
             
          </ul>
        </div>  
      </div>
    </nav>
    
    
    <!--home inicio-->
    <section class="home" id="home"></section>

    <!--sessão sobre-->
    <section class="sobre" id="sobre">
        <div class="max-width">
            <h2 class="title">Sobre</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="img/combo.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Somos a <span class="typing-2"> Art Burguer</span></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quisquam praesentium perferendis, nihil veritatis, tempora libero ipsa magnam mollitia illo quod aperiam consectetur voluptatem amet at voluptates distinctio ex ipsam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil doloribus dignissimos eligendi, quisquam ex quas facilis itaque neque repellat inventore incidunt cupiditate architecto voluptates rerum fugiat possimus eos alias a.</p>
                    
                </div>
            </div>
        </div>
    </section>

  <!--Pratos especiais-->
    <section class="especiais" id="especiais">
      <h1 class="pratos">Pratos <span>Especiais</span></h1>

      <main class="cards">
        <section class="card combo">
          <h3>Combos</h3>
          <div class="img">
            <img src="img/combo.jpeg" alt="combo">
          </div>
          <span>Confira as opções em nosso Cardápio! Nossos combos servem para 2 a 4 pessoas. Alguns vem com acompanhamento de uma bebida  de sua preferencia ou Batatas-Fritas.</span>
          
        </section>

        <section class="card batata">
          <h3>Batata-frita</h3>
          <div class="img">
            <img src="img/batata.jpg" alt="Batata-frita.">
          </div>
          <span>Nossas Batatas são frescas e crocantes,com acompanhamento de molhos como: Maionese, Bacon, Cheddar,entre outros sabores, confira as porções em nosso cardápio. </span>
          
        </section>
        <section class="card milk shake">
          <h3> Sobremesas</h3>
          <div class="img">
            <img src="img/shake.jpg" alt="Sobremesas.">
          </div>
          <span>Imagina uma sobremesa do jeito com tudo o que você gosta? Imaginou?
          Pronto, nós fizemos!Temos Milk Shake, Sorvetes  e Churros,Confira as diversas opções de doces no nosso cardápio!</span>
        </section>

        <section class="card drinks">
          <h3>Drinks</h3>
          <div class="img">
            <img src="img/drinks.jpeg" alt="drinks.">
          </div>
          <span> Quer ter uma nova experiência com sabores de bêdidas diferentes? Peça já o seu em nosso cardápio! Temos drinks com e sem álcool.</span>
        </section>
      </main>   
    </section>







     
  
   



    <!-- Optional JavaScript; choose one of the two! -->
    <link rel="stylesheet" href="js/script.js">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>