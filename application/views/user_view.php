<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>User View</title>
    <?php echo link_css("css/style.css"); ?>
</head>
<body>
    <h1>User View</h1>



       <?php echo form_open("profile_controller/form_submit/3", "post", ['class' => 'form-class']); ?>

       <?php echo form_input(['type' => 'text', 'name' => 'full_name', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer nom complet', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'email', 'name' => 'email', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer votre email', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'text', 'name' => 'address', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer votre adresse', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'password', 'name' => 'password', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Entrer votre mot de passe', 'value' => '']); ?> <br>

       <?php echo form_input(['type' => 'password', 'name' => 'confirm_password', 'id' => 'input-id', 'class' => 'form-control', 'placeholder' => 'Confirmation du mot de passe', 'value' => '']); ?> <br>

       <?php $data = ['name' => 'login', "class" => 'btn btn-default', "id" => 'btn-id', 'value' => 'Login']?>

       <?php echo form_submit($data); ?> <br>


       <?php echo form_close(); ?>

    <?php echo link_js("js/app.js"); ?>
</body>
</html>
