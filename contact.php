<?
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    if( !empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["phone"]) and !empty($_POST["email"]) and !empty($_POST["message"]) ) {
        $to = "flanzededelphin@gmail.com";
        $subject = $_POST["subject"];
        $message = "Noms: " . $_POST["name"] . " " . $_POST["surname"] . " \n Contact: " . $_POST["phone"] . " \n Message: " . $_POST["message"];
        $headers = "From: ". $_POST["email"];
        mail($to,$subject,$message,$headers);
    }

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }