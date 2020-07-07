<?php
  
namespace App\Imports;
  
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row[0])){
            return null;
        }
        return new User([
            'username'   => $row[0],
            'hovaten'   => $row[1],
            'email'   => $row[2],
            'manhanvien'   => $row[3],
            'password' => Hash::make($row[4]),
            'gioitinh'   => $row[5],
        ]);
        
    }
    public function headingRow(): int
    {
        return 6;
    }
}
