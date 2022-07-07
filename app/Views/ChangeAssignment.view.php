<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/form.css">
    <title>Auftrag bearbeiten</title>
</head>
<body>
    <form action = "./assignments" method="POST">
        <fieldset>
            <legend>persönliche Angaben</legend>

             <label for="Name">Name</label>
             <input type="text" name = "Name" required>

             <label for="Email">Email</label>
             <input type="text" name = "Email" required>

             <label for="Telefon">Telefon</label>
             <input type="tel" name="Telefon" >
        </fieldset> 

        <fieldset>
            <legend>Angaben des Werkzeuges</legend>

             <label for="Werkzeugname">Werkzeugname</label>
             <input type="text" name = "Werkzeugname"  required>

             <label for="Dringlichkeit">Dringlichkeit</label>
             
             <select name="Dringlichkeit" id="Dringlichkeit" required>
                <option value="sehr tief">sehr tief</option>
                <option value="tief">tief</option>
                <option value="normal">normal</option>
                <option value="hoch">hoch</option>
                <option value="sehr hoch">sehr hoch</option>
             </select>

        </fieldset>

        
        <br><button type = "submit" value = "Submit">Auftrag neu erfassen</button>
        <br><button type = "submit">

        
    </form>
</body>
</html>