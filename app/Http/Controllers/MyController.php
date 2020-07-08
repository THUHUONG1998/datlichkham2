<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Exports\BacsiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\bacsi;
  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('users.index');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export(Request $request) 
    {
        $start_date = date_format(date_create($request->input('start-date')),"Y-m-d");
        $end_date = date_format(date_create($request->input('end-date')),"Y-m-d");
        
        return Excel::download(new UsersExport($start_date, $end_date), 'users.xlsx');
    }
   
    public function exportBS(Request $request) 
    {
        $id_benhvien = $request->id_benhvien;
        return Excel::download(new BacsiExport($id_benhvien), 'bacsi.xlsx');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }
}