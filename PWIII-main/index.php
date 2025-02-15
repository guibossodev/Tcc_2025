
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

    $dentistas = [
      $dentista1,
      $dentista2,
    ];
  ?>

    <div class="container">
      <div class="row">
        <?php
        foreach ($pokemons as $key => $pokemon) {?>
      <div class="col-12 col-lg-3 p-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $pokemon->foto;?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $pokemon->nome;?></h5>
              <p class="card-text"><?php echo $pokemon->poder;?></p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>
        <?php }?>
        <!-- pikachu -->
       
        </div>
    </div>

<?php include './footer.php'; ?>
  