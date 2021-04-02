<?php

//include("Models/Employee.php");


interface IEmployeeService{
    public function save(Employee $employee);
}
class EmployeeService implements IEmployeeService
{
    public function save(Employee $employee)
    {
        //print_r($employee);
        $file = fopen("abc.txt","w+");
        fwrite($file,$employee->To_CSV());
        fclose($file);
    }

    
}