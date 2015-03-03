<?php include '_header.php' ?>
<div class="well">procesa</div>
  <pre> 

    <?php 
      print_r($_POST);
      $usuario= $_POST["usuario"];
      $password= $_POST["password"];
      echo $_POST["usuario"]. " " . $_POST["password"];
    ?>
  </pre>

<?php include '_footer.php' ?>