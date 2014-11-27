<?php

class User
{
    var $userId;
    var $firstName;
    var $lastName;
    var $address;
    var $city;
    var $email;
    var $mobilePhone;
    var $homePhone;
    var $workPhone;
    
    //GENDER WILL BE BOOLEAN. 0 = MAN 1 = WOMAN
    var $gender;
    
    function __construct()
    {
        $this->userId = 0;
        $this->firstName = "";
        $this->lastName = "";
        $this->address = "";
        $this->city = "";
        $this->email = "";
        $this->mobilePhone = "";
        $this->homePhone = "";
        $this->workPhone = "";
        $this->gender = 0;
    }
    
    //
    // SET USER ID
    //
    function setUserId($new_id)
    {
        $this->userId = $new_id;
    }
    
    //
    // GET USER ID
    //
    function getUserId()
    {
        return $this->userId;
    }
    
    //
    // SET FIRST NAME
    //
    function setFirstName($new_first_name)
    {
        $this->firstName = $new_first_name;
    }
    
    //
    // GET FIRST NAME
    //
    function getFirstName()
    {
        return $this->firstName;
    }
    
    //
    // SET LAST NAME
    //
    function setLastName($new_last_name)
    {
        $this->lastName = $new_last_name;
    }
    
    //
    // GET LAST NAME
    //
    function getLastName()
    {
        return $this->lastName;
    }
    
    //
    // SET ADDRESS
    //
    function setAddress($new_address)
    {
        $this->address = $new_address;
    }
    
    //
    // GET ADDRESS
    //
    function getAddress()
    {
        return $this->address;
    }
    
    //
    // SET CITY
    //
    function setCity($new_city)
    {
        $this->city = $new_city;
    }
    
    //
    // GET CITY
    //
    function getCity()
    {
        return $this->city;
    }
    
    //
    // SET EMAIL
    //
    function setEmail($new_email)
    {
        $this->email = $new_email;
    }
    
    //
    // GET EMAIL
    //
    function getEmail()
    {
        return $this->email;
    }
    
    //
    // SET MOBILE PHONE
    //
    function setMobilePhone($new_mobile)
    {
        $this->mobilePhone = $new_mobile;
    }
    
    //
    // GET MOBILE PHONE
    //
    function getMobilePhone()
    {
        return $this->mobilePhone;
    }
    
    //
    // SET HOME PHONE
    //
    function setHomePhone($new_home)
    {
        $this->homePhone = $new_home;
    }
    
    //
    // GET HOME PHONE
    //
    function getHomePhone()
    {
        return $this->homePhone;
    }
    
    //
    // SET WORK PHONE
    //
    function setWorkPhone($new_work)
    {
        $this->workPhone = $new_work;
    }
    
    //
    // GET WORK PHONE
    //
    function getWorkPhone()
    {
        return $this->workPhone;
    }
    
    //
    // SET GENDER
    //
    function setGender($new_gender)
    {
        $this->gender = $new_gender;
    }
    
    //
    // GET GENDER
    //
    function getGender()
    {
        return $this->gender;
    }
    
    
}

?>