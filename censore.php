<?php



$myText = $_GET ['mytext'];

$badword = $_GET ['badword'];

// echo $myText;

// echo $badword;

$myText_length = strlen($myText);

$myText_censored = str_replace($badword, '***', $myText);

$myText_censored_length = strlen($myText_censored);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>

    <h2>testo da censurare</h2>
    <p><?php echo $myText; ?></p>

    <h2>parola da censurare</h2>
    <p><?php echo $badword; ?></p>

    <h2>lunghezza del testo:</h2>
    <p><?php echo $myText_length; ?></p>

    <h2>testo censurato</h2>
    <p><?php echo $myText_censored; ?></p>

    <h2>lunghezza del testo censurato</h2>
    <p><?php echo $myText_censored_length; ?></p>

</body>
</html>


