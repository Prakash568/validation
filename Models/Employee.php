<?php
class Employee
{
    private $id;
    private $firstname;
    private $lastname;
    private $address;
    private $contact;
    private $email;
    private $created_date;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
        return $this;
    }



    public function getId()
    {
        return $this->id;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getContact()
    {
        return $this->contact_no;
    }
    public function getEmail()
    {
        return  $this->email;
    }
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    public function To_CSV()
    {
        return $this->id . "," . $this->firstname . "," . $this->lastname . "," . $this->email . "," . $this->contact . "," . $this->address . "\n";
    }
}
