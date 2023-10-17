<?php

    require_once './Book.php';
    require_once './Customer.php';


    $book1 = new Book("1234", "Hello Bangladesh", "Hasnain", 150);
    $customer1 = new Customer(123, "Hasnain", "Ali", "mdhasnainali.01@gmail.com");

    echo $book1->__toString();
    echo $customer1->__toString();

    
    echo "</br>".$book1->getCopy();

?>
