<?php
require_once 'Book.php';
require_once 'Customer.php';

// Create a Book object
$book = new Book(123456, 'Sample Book', 'John Doe', 5);

// Create a Customer object
$customer = new Customer(1, 'Alice', 'Johnson', 'alice@example.com');

// Use getters and setters
$book->setTitle('New Title');
$book->setAvailable(10);
$customer->setEmail('newemail@example.com');

// Use dynamic getters and setters
echo "Book Title: " . $book->getTitle() . "\n";
echo "Customer Email: " . $customer->getEmail() . "\n";

// Check if you can get a copy of the book
if ($book->getCopy()) {
    echo "You can get a copy of the book.\n";
} else {
    echo "The book is out of stock.\n";
}

// Add copies of the book
$book->addCopy(3);

// Display the book and customer information
echo "Book Information:\n" . $book . "\n";
echo "Customer Information:\n" . $customer . "\n";
?>
