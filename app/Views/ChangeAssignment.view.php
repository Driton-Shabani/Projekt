<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/form.css">
    <title>Auftrag erfassen</title>
</head>
<body>
    <h1>
        Edit
    </h1>
    <form action = "edit" method="POST">
        <fieldset>
            <legend>persönliche Angaben</legend>

             <label for="Name" class="text">Name</label>
             <input type="text" name = "Name" class="input" required>

             <label for="Email" class="text">Email</label>
             <input type="text" name = "Email" class="input" required>

             <label for="Telefon" class="text">Telefon</label>
             <input type="tel" name="Telefon" class="input">
        </fieldset><br>

        <fieldset>
            <legend>Angaben des Werkzeuges</legend>
            <label for="Werkzeug" class="text">Werkzeug</label>
            <select name="Werkzeug" id="Werkzeug" class ="input_dropdown" required>
                <?php 
                    foreach($tools as $tool){
                        echo "<option value='".$tool["WerkzeugID"]."'>".$tool["Name"]."</option>";
                    }
                ?>

             </select>

             <label for="Dringlichkeit" class="text">Dringlichkeit</label>
             
             <select name="Dringlichkeit" id="Dringlichkeit" class ="input_dropdown" required>
                <option value="sehr tief">sehr tief</option>
                <option value="tief">tief</option>
                <option value="normal">normal</option>
                <option value="hoch">hoch</option>
                <option value="sehr hoch">sehr hoch</option>
             </select>

        </fieldset><br>

        
        <button type = "submit" value = "Submit">Auftrag erfassen</button>
        
    </form>
</body>
</html>