<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>User View</title>
    <?php echo link_css("css/style.css"); ?>
</head>
<body>
    <h1>User View</h1>
   <form action="">
      
       <?php echo form_input(['name' => 'username', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer Nom', 'value' => '']); ?>
   </form>


    <?php echo link_js("js/app.js"); ?>
</body>
</html>
