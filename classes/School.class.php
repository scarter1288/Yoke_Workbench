<?php

class School
{
    var $schoolId;
    var $schoolName;
    var $schoolAddress;
    var $schoolPhone;
    var $array_yokeFolk;
    
    
    /*
    function __construct()
    {
        $this->schoolId = 0;
        $this->schoolName = "";
        $this->schoolAddress = "";
        $this->schoolPhone = "";
        $this->array_yokeFolk = Array();
    }
    */
    
    function __construct($newId, $newName, $newAddress, $newPhone, $newYokeFolkArray)
    {
        $this->schoolId = $newId;
        $this->schoolName = $newName;
        $this->schoolAddress = $newAddress;
        $this->schoolPhone = $newPhone;
        $this->array_yokeFolk = $newYokeFolkArray;
    }
    
    //
    // SET THE SCHOOL ID
    //
    function setId($new_id)
    {
        $this->schoolId = $new_id;
    }
    
    
    //
    // GET THE SCHOOL ID
    //
    function getId()
    {
        if($schoolId == null)
        {
            $schoolId = 0;
        }
        return $schoolId;
    }
    
    //
    // SET THE SCHOOL NAME
    //
    function setName($new_name)
    {
        $this->schoolName = $new_name;    
    }
    
    //
    // GET THE SCHOOL NAME
    //
    function getName()
    {
        return $schoolName;
    }
    
    
    //
    // SET THE SCHOOL ADDRESS
    //
    function setAddress($new_address)
    {
        $this->schoolAddress = $new_address;
    }
    
    
    //
    // GET THE SCHOOL ADDRESS
    //
    function getAddress()
    {
        return $schoolAddress;
    }
    
    
    //
    // SET THE SCHOOL PHONE
    //
    function setPhone($new_phone)
    {
        $this->schoolPhone = $new_phone;
    }
    
    
    //
    // GET THE SCHOOL PHONE
    //
    function getPhone()
    {
        return $schoolPhone;
    }
    

?>