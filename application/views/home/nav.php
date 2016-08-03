	<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><?= $title ?></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Inicio</a></li>
						<li><a href="#feature">Nosotros</a></li>
						<li><a href="#pricing">Planes</a></li>
						<li><a href="#download">Testimonios</a></li>
						<li><a href="#contact">Contacto</a></li>
						<li class='dropdown'>
		                      <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none;">INICIAR SESION ... <strong class='caret'></strong></a>
		                      <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
		                        <form action='<?= base_url()?>Loguin' method='post' accept-charset='UTF-8' role="form">
		                          <div class='form-group'>
		                            <input class='form-control large' style='text-align: center;' type='text' name='user' placeholder='usuario'/>
		                          </div>
		                          <div class='form-group'>
		                            <input class='form-control large' style='text-align: center;' type='password' name='password' placeholder='contraseña' />
		                          </div>
		                          <div class='form-group'>
		                            <button class='btn btn-primary' style='width: 380px;' type='submit'>INGRESAR</button>
		                          </div>
		                          </form>
		                      </div>
	                    </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->