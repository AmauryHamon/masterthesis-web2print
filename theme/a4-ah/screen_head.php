<!-- Styles communs -->
<link rel="stylesheet" href="<?= $theme_url ?>/css/style.css">

<!-- Notes de marge -->
<script src="<?= $theme_url ?>/js/screen/sideNotes.js" media="screen"></script>
<!-- Scripts communs  -->
<script src="<?= $theme_url ?>/js/screen/script.js" media="screen"></script>
<script>
  // ouvre interview accordion
  function openAccordion(id) {
    
    var x = document.getElementById(id);
    if (x.className.indexOf("show") == -1) {
      x.className += " show";
    } else { 
      x.className = x.className.replace(" show", "");
    }
  }
</script>



<!-- Aide pour la mise en page des images -->
<?php if(isset($_GET["layout"])): ?>
  <script src="<?= $theme_url ?>/js/layout/turndown.js"></script>
  <script src="<?= $theme_url ?>/js/layout/layout.js"></script>

  <link rel="stylesheet" href="<?= $theme_url ?>/js/layout/layout.css" media="screen">
<?php endif ?>