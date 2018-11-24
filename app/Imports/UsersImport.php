<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
           'FirstName'   => $row[0],
           'LastName'    => $row[1], 
           'Email'      => $row[2], 
           'Phone'      => $row[3], 
        ]);
    }
}
