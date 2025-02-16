
<?php include './header.php'; ?>


  <?php
  class dentista {
    public $nome;
    public $poder;
    public $foto;

  }
  $dentista1 = new dentista();
  $dentista1->nome = "pikachu";
  $dentista1->poder = "poder eletrizante";
  $dentista1->foto = "https://img.pokemondb.net/artwork/large/pikachu.jpg";

  $dentista2 = new dentista();
  $dentista2->nome = "Charizard";
  $dentista2->nome = "Charizard";
  $dentista2->poder = "Poder de fogo ardente";
  $dentista2->foto = "";

  $dentista3 = new dentista();
  $dentista3->nome = "Charizard";
  $dentista3->nome = "Charizard";
  $dentista3->poder = "Poder de fogo ardente";
  $dentista3->foto = "";

  $dentista4 = new dentista();
  $dentista4->nome = "Charizard";
  $dentista4->nome = "Charizard";
  $dentista4->poder = "Poder de fogo ardente";
  $dentista4->foto = "";

    $dentistas = [
      $dentista1,
      $dentista2,
      $dentista3,
      $dentista4,
    ];
  ?>  

    <div class="container">
      <div class="row">
        <?php
        foreach ($dentistas as $key => $dentista) {?>
      <div class="col-12 col-lg-3 p-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $dentista->foto;?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $dentista->nome;?></h5>
              <p class="card-text"><?php echo $dentista->poder;?></p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>
        <?php }?>
        <!-- pikachu -->
       
        </div>
    </div>
    function toggleText() {
            var info = document.getElementById("info-oculta");
            var botao = document.getElementById("botao-toggle");
            
            if (info.style.display === "none") {
                info.style.display = "block";
                botao.innerText = "Ver menos"; // Altera o texto do botão
            } else {
                info.style.display = "none";
                botao.innerText = "Ver mais";
            }
        }
    </script>
</head>
<body class="p-4">

    <a href="#" id="botao-toggle" class="btn btn-primary" onclick="toggleText()">Ver mais</a>

    <div id="info-oculta" style="display: none; margin-top: 15px;">
        <p>Esta é a informação oculta que será mostrada quando o botão for clicado.</p>
    </div>


<?php include './footer.php'; ?>
  