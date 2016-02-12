<?php

class Contact
{
    private $name;
    private $phone;
    private $street;
    private $city;
    private $state;
    private $zip;

    function __construct($name, $phone, $street, $city, $state, $zip) {
        $this->name = $name;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }
    //setters
    function setName($new_name)
    {
        $this->name = $new_name;
    }
    function setName($new_phone)
    {
        $this->phone = $new_phone;
    }
    function setName($new_street)
    {
        $this->street = $new_street;
    }
    function setName($new_city)
    {
        $this->city = $new_city;
    }
    function setName($new_state)
    {
        $this->state = $new_state;
    }
    function setName($new_zip)
    {
        $this->zip = $new_zip;
    }
    //getters
    function getName()
    {
        return $this->name;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getStreet()
    {
        return $this->street;
    }
    function getCity()
    {
        return $this->city;
    }
    function getState()
    {
        return $this->state;
    }
    function getZip()
    {
        return $this->zip;
    }
    //session functions
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }
    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }
    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }



}

 ?>
