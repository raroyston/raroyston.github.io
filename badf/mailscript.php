<?php

    $from = "noreply@wisc.edu";
    $email = "rroyston@wisc.edu";
    $form = $_POST['email_address'];
    $message = $_POST['submit'];

mail ($email, $message, $form);


echo "Your email has been received. Axé";

?>
