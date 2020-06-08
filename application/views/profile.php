<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profile View</title>
    <?php echo link_css("css/style.css"); ?>
</head>
<body>
    <h1>Profile View</h1>

    <?php $this->flash("account_success", "alert-success")?>
    <?= $this->get_session('id'); ?><br>
    <?= $this->get_session('name'); ?><br>
    <?= $this->get_session('email'); ?><br>

</body>
</html>
