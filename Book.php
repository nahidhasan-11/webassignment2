<?php

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setAvailable($available)
    {
        $this->available = $available;
    }

    public function getCopy()
    {
        return $this->available > 0;
    }

    public function addCopy($num)
    {
        if ($num > 0) {
            $this->available += $num;
            return true;
        }
        return false;
    }

    public function __toString()
    {
        return "ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available: {$this->available}";
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'get') === 0) {
            $property = lcfirst(substr($name, 3));
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        } elseif (strpos($name, 'set') === 0) {
            $property = lcfirst(substr($name, 3));
            if (property_exists($this, $property)) {
                $this->$property = $arguments[0];
            }
        }
    }
}

?>
