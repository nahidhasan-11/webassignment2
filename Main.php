<?php

    require_once './Book.php';
    require_once './Customer.php';

   
    $book1 = new Book("1234", "Sample Book", "Rahim", 150);
    $customer1 = new Customer(123, "Nusrat", "Jannat", "nusratjannat2001@gmail.com");
    
   // $book2 = new Book("5678", "Story Book", "Karim",50);
   // $customer2 = new Customer(567, "Montasir", "Munem", "montasirmunem01@gmail.com");
    echo "<h1> Information of Books </h1>";
    echo $book1->__toString();
    echo "<h1> Information of Customers </h1>";
    echo $customer1->__toString();
    //echo "</br>";
   // echo $book2->__toString();
   // echo $customer2->__toString();
    
   // echo "</br>".$book1->getCopy();
    

?>
