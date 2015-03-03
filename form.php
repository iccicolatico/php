<?php include '_header.php' ?>

  <div class="row">
      <!--
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          <A href="edit.html" >Edit Profile</A>
          <A href="edit.html" >Logout</A>
          <br>
          <p class=" text-info">May 05,2014,03:00 pm </p>
        </div>
      -->
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <form action="resumenform.php" method="post">
        <div class="panel panel-info">
          <div class="panel-heading"><h3 class="panel-title">Nuevo Usuario</h3></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre" value="" class="form-control input-sm chat-input" placeholder="nombre" /></td>
                      </tr>
                      <tr>
                        <td>Apellidos:</td>
                        <td><input type="text" name="apellidos" value="" class="form-control input-sm chat-input" placeholder="apellidos" /></td>
                      </tr>
                       <td>Edad:</td>
                        <td><input type="integer" name="edad" value="" class="form-control input-sm chat-input" placeholder="edad" /><td>
                      </tr>
                      <tr>
                        <td>D.N.I.: </td>
                        <td><input type="text" name="dni" value="" class="form-control input-sm chat-input" placeholder="D.N.I." /></td>
                      </tr>
                      <tr>
                        <td>Género:</td>
                        <td><input type="radio" name="sexo" value="Hombre" checked="checked" /> Hombre
                        <input type="radio" name="sexo" value="Mujer" /> Mujer<td>

                      </tr>
                      <tr>
                        <td>Dirección:</td>
                        <td><input type="text" name="direccion" value="" class="form-control input-sm chat-input" placeholder="direccion" /></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" value="" class="form-control input-sm chat-input" placeholder="e-mail" /></td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td><input type="text" name="telefono" value="" class="form-control input-sm chat-input" placeholder="teléfono" /></td>
                      </tr>
                      <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="usuario" value="" class="form-control input-sm chat-input" placeholder="usuario" /></td>
                      </tr>
                      <tr>
                        <td>Contraseña:</td>
                        <td><input type="password" name="password" value="" class="form-control input-sm chat-input" placeholder="contraseña" /></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><input type="password" name="passwordc" value="" class="form-control input-sm chat-input" placeholder="confirmar contraseña" /></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class=" col-md-4 col-lg-4"></div>
                    <div class=" col-md-4 col-lg-4 "><button type="submit" class="btn btn-primary">Generar usuario</button></div>
                    <div class=" col-md-4 col-lg-4 "></div>
                  </div>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                      <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                      <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                  </div>
              </div>
            </div>
          </form>    
        </div>
    </div>
<?php include '_footer.php' ?>
