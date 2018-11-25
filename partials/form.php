<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="usuario"  placeholder="usuario@ejemplo.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Repetir Contraseña</label>
    <div class="col-sm-10">
     <input type="password" class="form-control" name="password2" placeholder="Repite la contraseña">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Rol</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_de_usuario" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Alumno
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo_de_usuario" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Docente
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </div>
  <p class="text-center">
    ¿Ya tienes cuenta?
    <a href="login.view.php">Iniciar Sesión</a>
  </p>
</form>