<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Criar Time</title>
</head>
<body>
   <div class="container mt-5">
          <?php include('message.php'); ?>
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h4>Adicionar Time
                           <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                       </h4>
                   </div>
                   <div class="card-body">
                       <form action="code.php" method="POST">
                         <div class="mb-3">
                               <label>Time</label>
                               <input type="text" name="time" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>País</label>
                               <input type="text" name="pais" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Número de títulos</label>
                               <input type="number" name="numtitulos" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Treinador</label>
                               <input type="text" name="treinador" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Cor do uniforme</label>
                               <input type="text" name="coruniforme" class="form-control">
                           </div>
                           <div class="mb-3">
                               <button type="submit" name="save_time" class="btn btn-primary">Adicionar time</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
