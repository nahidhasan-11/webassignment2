<?php

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __toString()
    {
        return "ID: {$this->id}, Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
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
