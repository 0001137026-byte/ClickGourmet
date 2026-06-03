<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url('public/css/cabecalho.css'); ?>" />
</head>

<body>
  <div class="esquerda">
    <div class="logo">
      <img class="imgLogo" src="<?php echo base_url('public/img/logo.svg'); ?>" />
      <h1>ClickGourmet</h1>
    </div>
    <div class="menu">
      <a href="<?php echo base_url('index'); ?>">Inicio</a>
      <a id="selected" href="">Perfil</a>
      <a href="<?php echo base_url('receita'); ?>">Receita</a>
      <a class="sair" href="<?php echo base_url('sair'); ?>">Sair</a>
    </div>

  </div>
  <div class="direita"></div>
</body>

</html>