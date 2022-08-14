<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="creditcardform">
    <form method="post" action="" class="form">
        <div class="payment">
        <h2>Payment Details</h2>
        <img src="cards1.png" alt="payment" class="cards">
        </div>
        <label for="name">Card Owner</label> <br>
        <input type="text" name="name" placeholder="name and surname" required> <br>
        <label for="date">Expiry Date</label> <br>
        <input type="text" name="dateExpired" id="dateExpired" pattern="[0-9]{2}-[0-9]{2}" placeholder="enter mm-yy (eg. 05-22)" required><br>
        <label for="cvv">Security code</label> <br>
        <input type="number" name="cvv" placeholder="CVV" id="cvv" required><br>
        <label for="card">Card Number</label> <br>
        <input type="number" name="creditcard" placeholder="valid card number" id="creditcard" required><br>

        <input type="submit" name="submit" value="CONFIRM" class="confirm">
        
    </form>
    </div>
    <?php
        if ($_POST) {
        $var = $_POST["cvv"];
        if (!empty($var) && strlen($var) == 3) {
            $digits = $_POST["creditcard"];
            if (!empty($digits) && (strlen($digits) >= 16 && strlen($digits) <= 19) ) {
                $expiryDate = $_POST["dateExpired"];
                $currentDate = date('m-y');
                if ($expiryDate > $currentDate) {
                    echo "PAYMENT SUCCESSFUL";
                } else {
                    echo "PAYMENT UNSUCCESSFUL";
                    }
            } else {
                echo "PAYMENT UNSUCCESSFUL";
                }
        } else {
            echo "PAYMENT UNSUCCESSFUL";
            }
        }
     //check if form is empty

     //if it is not, continue to check if month is over today's month

     // if that passes check if lenght of string for cvv is equal to 3

     //if that passes check if lenght of field creditcard is equal to 16

     //if everything's true, return that it is ok, else return it is not
    ?>
</body>
</html>