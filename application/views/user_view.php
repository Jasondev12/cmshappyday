<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>User View</title>
</head>
<body>
    <h1>User View</h1>
    <p>
        <?php

foreach ($data["peoples_name"] as $names):

    echo $names, "<br>";

endforeach;

?>
    </p>
</body>
</html>
