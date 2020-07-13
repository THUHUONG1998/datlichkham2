<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\benhnhan;
use Illuminate\Support\Facades\DB;
use App\chuyenkhoa;
use App\bacsi;
use App\khunggio;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\benhvien;

class benhnhanController extends Controller
{
    //        function __construct()
    // {
    //      $this->middleware('permission:bn-list|bn-create|bn-edit|bn-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:bn-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:bn-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:bn-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $benhnhan = benhnhan::orderBy('id','ASC')->paginate(5);
        return view('benhnhan.index',compact('benhnhan'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benhvien = DB::table('benhvien')->get();
        $bacsi=DB::table('bacsi')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
        $khunggio=DB::table('khunggio')->get();
        return view('benhnhan.create',compact('benhnhan','benhvien','bacsi','chuyenkhoa','data','khunggio'));
    }
    public function showChuyenKhoainBenhNhan(Request $request)
    {
        if ($request->ajax()) {
            $chuyenkhoa = chuyenkhoa::where('id_benhvien', $request->id_benhvien)->select('id', 'tenchuyenkhoa')->get();
            return response()->json($chuyenkhoa);
        }
    }
    public function showBacSiinBenhNhan(Request $request)
    {
        if ($request->ajax()) {
            $bacsi = bacsi::where('id_benhvien', $request->id_benhvien)->select('id', 'tenbacsi')->get();
            return response()->json($bacsi);
        }
    }
    public function showKhungGioinBenhNhan(Request $request)
    {
        if ($request->ajax()) {
            $khunggio = khunggio::where('id_benhvien', $request->id_benhvien)->select('id', 'khunggio')->get();
            return response()->json($khunggio);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hovaten' => 'required|min:5|max:255',
            'ngaysinh'=>'required',
            'sodienthoai'=>'required',
            'ngaykham'=>'required',
            'id_benhvien' => 'required',
            'id_bacsi' => 'required',
            'id_chuyenkhoa' => 'required',
            'id_khunggio'=>'required',

        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
            'hovaten' => 'Họ và tên bệnh nhân',
            'ngaysinh'=>'Ngày sinh',
            'sodienthoai'=>'Số điện thoại',
            'id_benhvien' => 'Tên bệnh viện',
            'id_bacsi' => 'Tên bác sĩ',
            'id_chuyenkhoa' => 'Tên chuyên khoa',
            'id_khunggio'=>'Khung giờ khám',
        ]);

        $input = $request->all();
        $input['id_user'] = Auth::user()->id;
        $input['ngaysinh'] = Carbon::parse($input['ngaysinh'])->format('Y-m-d');
        $input['ngaykham'] = Carbon::parse($input['ngaykham'])->format('Y-m-d');
       
        //$benhnhan = DB::table('benhnhan')->where('id_khunggio', $input['id_khunggio'])->get();
        $count_benhnhan = DB::table('benhnhan')->where('id_khunggio', $input['id_khunggio'])
                                                ->where('ngaykham', $input['ngaykham'])->count();
        
        $soluong_khunggio = khunggio::where('id',$input['id_khunggio'])->first();
        //dd($count_benhnhan);
        if($count_benhnhan >= $soluong_khunggio->gioihanluongdat)
        {
            return redirect()->back()->with('error','lỗi quá số lượng lượt đặt .....');
        }    
        $benhnhan = benhnhan::create($input);
        return redirect()->route('benhnhan.index')
                        ->with('success','patient created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $benhvien = DB::table('benhvien')->get();
        // $bacsi=DB::table('bacsi')->get();
        // $chuyenkhoa = DB::table('chuyenkhoa')->get();
        // $data=DB::table('users')->get();
        // $khunggio=DB::table('khunggio')->get();
        $benhnhan = benhnhan::find($id);
        return view('benhnhan.show',compact('benhnhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benhvien = DB::table('benhvien')->get();
        $bacsi=DB::table('bacsi')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
        $khunggio=DB::table('khunggio')->get();
        $benhnhan = benhnhan::find($id);
        return view('benhnhan.edit',compact( 'benhnhan','benhvien','bacsi','chuyenkhoa','data','khunggio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hovaten' => 'required|min:5|max:255',
            'ngaysinh'=>'required|date',
            'id_benhvien' => 'required',
            'id_bacsi' => 'required',
            'id_chuyenkhoa' => 'required',
            'id_khunggio'=>'required',
        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
            'hovaten' => 'Họ và tên',
            'ngaysinh'=>'Ngày sinh',
            'id_benhvien' => 'Tên bệnh viện',
            'id_bacsi' => 'Tên bác sĩ',
            'id_chuyenkhoa' => 'Tên chuyen khoa',
            'id_khunggio'=>'Khung giờ khám',
        ]);
            
        $benhnhan = benhnhan::find($id);
        //vừa thêm
        $input = $request->all();
        $count_benhnhan = DB::table('benhnhan')->where('id_khunggio', $input['id_khunggio'])
                                                ->where('ngaykham', $input['ngaykham'])->count();
        
        $soluong_khunggio = khunggio::where('id',$input['id_khunggio'])->first();
        //dd($count_benhnhan);
        if($count_benhnhan >= $soluong_khunggio->gioihanluongdat)
        {
            return redirect()->back()->with('error','lỗi quá số lượng lượt đặt .....');
        }  

        $benhnhan->update($request->all());
        $benhnhan->save();

        return redirect()->route('benhnhan.index')
                        ->with('success','Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        benhnhan::find($id)->delete();
        return redirect()->route('benhnhan.index')
                        ->with('success','Patient deleted successfully');
    }

}
