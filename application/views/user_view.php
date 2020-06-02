<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>User View</title>
    <?php echo link_css("css/style.css"); ?>
</head>
<body>
    <h1>User View</h1>

    
   
       <?php echo form_multipart("profile_controller/form_submit", "POST", ['class' => 'form-class']); ?>
      
       <?php echo form_input(['type' => 'password','name' => 'username', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer Mot de passe', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'email','name' => 'username', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer Email', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'text','name' => 'username', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer Nom', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'file','name' => 'username', 'id' => 'input-id', 'class' => 'form-control']); ?> <br>

       <?php $data = ['name' => 'login', "class" => 'btn btn-default', "id" => 'btn-id', 'value' => 'Login'] ?>

       <?php echo form_submit($data); ?> <br>

       <?php echo form_button(['name' => 'btn', 'class' => 'btn-primary', 'id' => 'btn', 'value' => 'Cliquez moi']); ?>

       
       <?php echo anchor("profile_controller/anchor", "Delete", ['class' => 'link']); ?>

       <?php echo form_close(); ?>

    <?php echo link_js("js/app.js"); ?>
</body>
</html>
