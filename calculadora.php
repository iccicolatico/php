<?php include '_header.php' ?>

<form action="calcula.php" method="post">


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
        <form action="calcula.php" method="post">
        <div class="panel panel-info">
          <div class="panel-heading"><h3 class="panel-title">Calculadora</h3></div>
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
                        <td>Operando 1:</td>
                        <td><input type="number" name="operando1" value="" class="form-control input-sm chat-input" placeholder="introduce un número" /></td>
                      </tr>
                      <tr>
                        <td>Operando 2:</td>
                        <td><input type="number" name="operando2" value="" class="form-control input-sm chat-input" placeholder="introduce un número" /></td>
                      </tr>
                      <tr>
                        <td>Operacion:</td>
                        <td>
                        
                        <input type="radio" name="operacion" value="suma" checked="checked" />  +	
                 		<input type="radio" name="operacion" value="resta" />  -
     					<input type="radio" name="operacion" value="multiplicacion" checked="checked" />  *               
 						<input type="radio" name="operacion" value="division" checked="checked" />  /</td>	                 
                  	   				
                  	   </tr>                                   
                    </tbody>
                  </table>
                  <div class="row">
                  <div class="col-md-6"></div>	
                  <div class="col-md-6"><button type="submit" class="btn btn-primary">Enviar</button></div>
                    
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
</form>



<?php include '_footer.php' ?>