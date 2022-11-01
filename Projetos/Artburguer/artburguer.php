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
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" navbar-light>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas  offcanvas-light offcanvas-end" tabindex="-1" id="offcanvasNavbar"  aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="item">
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>
            <li class="item">
              <a class="nav-link" href="#especiais">Especial</a>
            </li> 
            <li class="item">
              <a class="nav-link " href="#cardapio">Cardápio</a>
            </li>
            <li class="item">
              <a class="nav-link " href="#sobremesa">Sobremesas</a>
            </li>
              
            <li class="item">
              <a class="nav-link" href="cadastro.html">Cadastro</a>
            </li>
             
          </ul>
        </div>  
      </div>
    </nav>
    
    
    <!--home inicio-->
    <section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
          <h1 class="text-1">O Melhor Hambúrguer<br><span>Artesanal</span></h1>
          
        </div>
      </div>
    </section>

    <!--sessão sobre-->
    <section class="sobre" id="sobre">
      <div class="max-width">
        <h2 class="title">Sobre</h2>
        <div class="about-content">
          <div class="col-md-6 col-xl-6">
            <div class="column left">
              <img src="img/sobre.jpeg" alt="">
            </div>
          </div>    
          <div class="col-md-6 col-xl-6"> 
            <div class="column right">
              <div class="text">Somos a<span class="typing-2"> Art Burguer</span></div>
               <div class="resumo">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quisquam praesentium perferendis, nihil veritatis, tempora libero ipsa magnam mollitia illo quod aperiam consectetur voluptatem amet at voluptates distinctio ex ipsam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil doloribus dignissimos eligendi, quisquam ex quas facilis itaque neque repellat inventore incidunt cupiditate architecto voluptates rerum fugiat possimus eos alias a.</p>
               </div>
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
            <img src="img/comboo.jpeg" alt="combo">
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

       
    </section>
    
    <!--Cardápio-->
    <section class="cardapio" id="cardapio">
     <h1 class="nosso">Nosso Cardápio</h1>
     <div class="linha"style="height: 4px; background: #ffcc29;"></div>

      <div class="container-sm-4">
        <div class="row align-items-start">
          <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/best.jpg" class="card-img-top" alt="The Best Burger">
              <div class="card-body">
                <h5 class="card-title">The Best Burger</h5>
                <p class="card-text">O nome já diz tudo... Burger de 210g de costela Black Angus, queijo prato, tirinhas crocantes de bacon, onion rings, molho especial a base de pimenta no pão de brioche.</p>
              </div>
            </div>
          </div>

          <div class="col-4 col-sm-4">
            <div class="card" >
              <img src="img/house.jpg" class="card-img-top" alt="House Burger">
                <div class="card-body">
                  <h5 class="card-title">House Burger</h5>
                  <p class="card-text">Tradicional Burguer de 210g de costela Black Angus, queijo cheddar, deliciosas cebolas caramelizadas, molho especial no pão australiano.</p>
                </div>
            </div>
          </div>

          <div class="col-4 col-sm-4">
            <div class="card">
             <img src="img/pepper.jpeg" class="card-img-top" alt="Pepper Raze">
              <div class="card-body">
               <h5 class="card-title">Pepper Raze</h5>
               <p class="card-text">Com um sabor inigualável, esse burger agrada gregos e troianos. Pão de brioche, blend da casa, molho especial a base de curry, rúcula fresca, pepperoni, tomate grelhado, queijo meia cura e geleia de pimenta.</p>
              </div>
            </div>
         </div>
        </div>   

        <div class="row ">
          <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/duplo.jpg" class="card-img-top" alt="ArtBurguer Duplo">
              <div class="card-body">
               <h5 class="card-title">ArtBurguer Duplo</h5>
               <p class="card-text">Burger de 200g Black Angus,2 carnes, queijo prato, alface, tomate, cebola, bacon crocante e molho da casa a base de alho no pão de brioche.</p>
              </div>
            </div>
          </div>
         
         <div class="col-4 col-sm-4">
            <div class="card">
            <img src="img/Chicken.jpg" class="card-img-top" alt="Chicken Burger">
              <div class="card-body">
               <h5 class="card-title">Chicken Burger</h5>
                <p class="card-text">Delicioso Burger de 180g de Frango, Cream Cheese, cebola roxa, tomate, alface e molho a base de mostarda levemente adocicado no pão de brioche.</p>
                  
              </div>
            </div>
         </div>
         <div class="col-4 col-sm-4">
           <div class="card">
              <img src="img/buguer.jpg" class="card-img-top" alt="ArtBurguer">
              <div class="card-body">
                  <h5 class="card-title">ArtBurguer</h5>
                  <p class="card-text">O Hambúrguer Raiz. Burger de 180g Black Angus, queijo prato, alface, tomate, cebola, bacon crocante e molho da casa a base de alho no pão de brioche.</p>
                </div>
            </div>
          </div>
          
         
        <div class="row ">
         <div class="col-4 col-sm-4">
           <div class="card">
              <img src="img/vegetarian.jpg" class="card-img-top" alt="Vegetarian Burger">
              <div class="card-body">
                  <h5 class="card-title">Vegetarian Burger</h5>
                  <p class="card-text">Nosso Burger vegano de inhame, quinoa e crocantes de gergelim negro, coberto com queijo prato, nossa famosas cebolas caramelizadas, molho de mostarda levemente adocicada no pão de brioche.</p>
                </div>
            </div>
          </div>

         <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/junior.jpg" class="card-img-top" alt="Artburguer Junior">
              <div class="card-body">
                <h5 class="card-title">Artburguer Junior</h5>
                <p class="card-text">Nosso Burger de 140gr Black Angus, queijo prato, molho da casa no pão de brioche.</p>
              </div>
           </div>          
          </div>
          <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/comboo.jpeg" class="card-img-top" alt="Combo X-salada">
              <div class="card-body">
                <h5 class="card-title">Combo X-salada</h5>
                <p class="card-text">Nosso Burger de 140gr Black Angus, queijo prato, molho da casa,salada,carne,acompanhado com uma porção de Batata-frita e um copo de refrigerante ou suco.</p>
              </div>
           </div>          
          </div>

        </div>  
        <div class="row ">
         <div class="col-4 col-sm-4">
           <div class="card">
              <img src="img/1.jpeg" class="card-img-top" alt="Combo Cheddar">
              <div class="card-body">
                  <h5 class="card-title">Combo Cheddar</h5>
                  <p class="card-text">Combo para duas pessoas, hamburguer de 150g ,com queijo,bacon,cheddar, queijo prato, molho da casa e batata-frita.</p>
                </div>
            </div>
          </div>

         <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/artbatata.jpg" class="card-img-top" alt="Artburguer Junior">
              <div class="card-body">
                <h5 class="card-title">Porção de Batata</h5>
                <p class="card-text">Porção de Batata-frita com Cheddar e Bacon, outros acompanhamento de molhos como: Maionese,Ketchup,Mostarda, monte como preferir! </p>
              </div>
           </div>          
          </div>
          <div class="col-4 col-sm-4">
            <div class="card">
              <img src="img/aneis.jpg" class="card-img-top" alt="Anéis de cebola">
              <div class="card-body">
                <h5 class="card-title">Anéis de cebola</h5>
                <p class="card-text">Porção de anéis de cebola crocantes!.</p>
              </div>
           </div>          
          </div>

        </div>  
      </div>  
     
    </section>
    
    <section class="sobremesas"id="sobremesa">
        <h1 class="sobremesa">Que tal uma Sobremesa?</h1>
        <div class="listra"style="height: 4px; background: #ffcc29;"></div>
        <div class="container-sm-4">
          <div class="row align-items-start">
            <div class="col-4 col-sm-4">
              <div class="card">
                <img src="img/shake.jpg" class="card-img-top" alt="Milk Shake">
                <div class="card-body">
                  <h5 class="card-title">Milk Shake  de chocolate e morango</h5>
                </div>
              </div>
            </div>
            <div class="col-4 col-sm-4">
              <div class="card" >
                <img src="img/brownie.webp" class="card-img-top" alt="Brownie">
                  <div class="card-body">
                    <h5 class="card-title">Brownie com sorvete</h5>
                  </div>
              </div>
            </div>
            <div class="col-4 col-sm-4">
              <div class="card">
                <img src="img/churros.jpeg" class="card-img-top" alt="Pepper Raze">
                <div class="card-body">
                <h5 class="card-title">Churros de doce de leite</h5>
                
                
              </div>
          </div>
        </div>   
    </section>   
   
   <!--sessão  footer-->
   <footer>
      <span>Criado por <a href="#">Artburguer</a> | Todos os direitos reservado 2022</span>
    </footer>

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