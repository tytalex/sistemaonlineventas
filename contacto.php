
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	  <div class="content-wrapper">
	   <div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h2>Envianos un mensaje</h2>
<form action="enviar.php" method="post">
  <div class="form-group">
  <label>Nombre</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre">
  </div>
  <label>Correo Electronico</label>
  <div class="form-group">
  <input type="text" name="mail" class="form-control" id="mail" placeholder="Tu email"> 
  </div>
  <label>Asunto</label>
  <div class="form-group">
  <input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto del Mensaje"> 
  </div>
  <div class="form-group">
    <label>Mensaje</label>
    <textarea name="message" rows="3"  id="message" placeholder="Escribe tu mensaje" required class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Enviar mensaje</button>
</form>


					</div>
					</div>
					</div>
					</div>
					<?php include 'includes/footer.php'; ?>
	        	</div>
				
				<!-- Me jala todos las categorias -->
				<?php include 'includes/scripts.php'; ?> 