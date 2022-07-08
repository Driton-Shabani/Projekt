<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/list.css">
    <title>Auftrag erfassen</title>
</head>
<body>
    <h1 style = "color:rgb(217, 217, 217);">
        Verfügbare Aufträge
    </h1>
    <ul>
        <?php foreach($tasks as $task):?>
            <li><?=$task["AuftragID"]?> | <?=$task['Name']?> | <?=$task['Email']?> | <?=$task['Werkzeugname']?> | <a href="edit?AuftragID=<?=$task['AuftragID']?> style=color: rgb(235, 198, 217)"> bearbeiten</a>
        <?php endforeach;?> 
    </ul>
</body>
</html>