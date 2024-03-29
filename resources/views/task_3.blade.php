---**Task 3: Encapsulation**---

<?php

namespace App;

class Employee
{
    protected $id;
    protected $Name;
    private $salary;

    public function __construct($id, $Name, $salary)
    {
        $this->id = $id;
        $this->Name = $Name;
        $this->setSalary($salary);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->Name;
    }


    public function setSalary($salary)
    {
        if ($salary && $salary >= 0) {
            $this->salary = $salary;
        }
    }


    public function getSalary()
    {
        return $this->salary;
    }
}
