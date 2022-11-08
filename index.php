
<?php
        include ('head.php');
        ?>

<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Entre ton nom: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Entre ton email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Abonne toi !">
  </div>
</form>


<form action="" method="get" class="form-example">
          <div class="form-example">
          <label for="name">Entrez votre prénom : </label>
          <input type="text" name="name" id="name" required>
          </form>
          <?php
            echo 'Bonjour ' . $_GET['name'] . ' !';
            ?>
<?php
        include ('corps.php');
        ?>
<?php
        include ('footer.php');
        ?>
