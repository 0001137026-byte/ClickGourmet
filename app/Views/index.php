<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url('public/css/cabecalho.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('public/css/index.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css'); ?>" />

</head>

<body>
  <div class="esquerda">
    <div class="logo">
      <img class="imgLogo" src="<?php echo base_url('public/img/logo.svg'); ?>" />
      <h1>ClickGourmet</h1>
    </div>
    <div class="menu">
      <a id="selected" href="">Inicio</a>
      <a href="<?php echo base_url('perfil'); ?>">Perfil</a>
      <a href="<?php echo base_url('receita'); ?>">Receita</a>
      <a class="sair" href="<?php echo base_url('sair'); ?>">Sair</a>
    </div>

  </div>
  <div class="direita">
    <div class="login" >
    <button type="button"data-toggle="modal" data-target="#myModal">
      Login
    </button></div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            Modal body..
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</body>

</html>