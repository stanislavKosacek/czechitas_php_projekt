<!DOCTYPE html>
<html lang="cs">

<?php require "layout/head.php"; ?>

<body id="page-top">

  <div id="wrapper">

    <?php require "layout/sidebar.php"; ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">
        <?php require "layout/topbar.php"; ?>
        
        <div class="container-fluid">
          
            <?php require "page/" . $template . "/base.php"; ?>

        </div>
        

      </div>
      

      <?php require "layout/footer.php"; ?>

    </div>
    

  </div>
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php require "layout/scripts.php"; ?>


</body>

</html>
