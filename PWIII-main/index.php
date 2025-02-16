
<?php include './header.php'; ?>

   
  <?php
  class dentista {
    public $nome;
    public $Especialidade;
    public $foto;

  }

  $dentista1 = new dentista();
  $dentista1->nome = "Pamela";
  // $dentista1->$Especialidade = "";
  $dentista1->foto = "fotos/dra_pamela.png"; 
  
  $dentista2 = new dentista();
  $dentista2->nome = "Charizard";
  $dentista2->Especialidade = "Poder de fogo ardente";
  $dentista2->foto = "";

  $dentista3 = new dentista();
  $dentista3->nome = "Charizard";
  $dentista3->Especialidade = "Poder de fogo ardente";
  $dentista3->foto = "";

  $dentista4 = new dentista();
  $dentista4->nome = "Charizard";
  $dentista4->Especialidade = "Poder de fogo ardente";
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
              <p class="card-text"><?php echo $dentista->Especialidade;?></p>
            <!-- Botão para abrir o modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meuModal">
        Ver mais
    </button>

    <!-- Modal -->
    <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Especialidades</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  BOA NOITE 
</button>


            </div>
          </div>
        </div>
        <?php }?>
        <!-- pikachu -->
       
        </div>
    </div>
    
    </script>



    <div id="info-oculta" style="display: none; margin-top: 15px;">
        <p>Esta é a informação oculta que será mostrada quando o botão for clicado.</p>
    </div>


<?php include './footer.php'; ?>
  