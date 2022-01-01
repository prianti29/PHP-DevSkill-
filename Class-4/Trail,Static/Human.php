<?php
 class Human
{
    public $name;
    public $age;
    protected $bankBalance;

    public function __construct()
    {
        $this->age = 18;
    }

    public function set_balance($bankBalance)
    {
        // set some info in database
        // send email
        // send sms
        $this->bankBalance = $bankBalance;
    }

    // public function get_balance()
    // {
    //     return $this->bankBalance;
    // }

    public function display()
    {
        echo "Name is $this->name <br>";
        echo "Age is $this->age <br>";
        echo "Bank Balance is $this->bankBalance <br>";
    }

   // abstract protected function calculate_result($id): bool;

    public function save()
    {
        //code to save database
        //
        //
        echo "Info Saved";
    }

    public function __destruct()
    {
        echo "Destruct is called";
    }
}
