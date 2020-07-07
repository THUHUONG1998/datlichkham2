<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
  
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
        
        // dd(User::whereBetween('created_at', [$start_date.' 00:00:00', $end_date.' 23:59:59'])->get());
        return Excel::download(new UsersExport($start_date, $end_date), 'users.xlsx');
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