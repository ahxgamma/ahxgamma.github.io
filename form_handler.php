<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ahxgamma - kontakt</title>
    <meta http-equiv="refresh" content="5;url=https://ahxgamma.cf">
</head>
<body>
    <?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $data = $_POST['name'] . '::' . $_POST['email'] . "\r\n" . $_POST['message']. "\r\n";
        $ret = file_put_contents('/contact/mydata.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('There was an error writing this file');
        }
        else {
            echo "$ret bytes written to file";
        }
    }
    else {
    die('no post data to process');
    }
    ?>
    <p> Twoja wiadomość została wysłana! </p>
    <p> Zostaniesz przekierowany za 5 sekund. </p>

</body>
</html>