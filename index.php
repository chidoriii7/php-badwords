<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <form action="censore.php" method="GET">

        <div>
            <label for="text"></label>
            <textarea name="mytext" id="text">Inserire testo qui</textarea>
        </div>

        <div>
            <label for="badword">parola da censurare</label>
            <input type="text" name="badword">
        </div>

        <button>submit</button>

    </form>
</body>
</html>