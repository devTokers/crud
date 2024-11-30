

<div class="login-box">

  <div class="login-logo">
    <img src="vistas/img/plantilla/logo-negro-bloque.png" class="img-responsive" style="padding:30px 100px 0px 100px">
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">-INGRESE SUS CREDENCIALES-</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <div style="position: relative;">
          <input type="password" class="form-control" placeholder="Contraseña" id="password" name="ingPassword" required>
          <!-- Ícono de mostrar/ocultar contraseña -->
          <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
            <i class="fa fa-eye"></i>
          </span>
        </div>
      </div>

      <div class="row" >
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" >Iniciar Sesion</button>
        </div>
      </div>
      <p class="mt-2 mb-0 text-right">Versión 1.0</p>

      <?php
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
      ?>

    </form>
  </div>
</div>



