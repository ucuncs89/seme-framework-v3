<?php
//Example 2 column left sidebar layout
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->getThemeElement("page/html/head",$__forward); ?>
<?php $this->getBodyBefore(); ?>
<body class="">
  <?php $this->getThemeElement("page/html/topbar",$__forward);?>
  <div class="container">
    <div class="row">
      <!-- left sidebar-->
      <div class="col-md-3">
        <?php $this->getThemeLeftContent(); ?>
      </div>
      <!-- end left sidebar-->

      <!-- main content-->
      <div class="col-md-9">
        <?php $this->getThemeContent(); ?>
      </div>
      <!-- main content-->
    </div>
  </div>

  <!--footer-->
  <?php $this->getThemeElement('page/html/footer',$__forward); ?>
  <!--end footer-->
  <!-- load JS in footer-->
  <?php $this->getJsFooter(); ?>
  <!-- End load JS in footer-->

  <!-- default JS Script-->
  <script>
  $(document).ready(function(e){
    <?php $this->getJsReady(); ?>
    <?php $this->getJsContent(); ?>
  });
  </script>
  <!-- default JS Script-->
</body>
</html>
