<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use App\Models\PengadaanBarang;
use App\Models\PengadaanSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengadaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = PengadaanBarang::get();
        // $pengadaans = PengadaanSupplier::get();
        // dd($pengadaans);
        return view('dpal/pengadaanBarang/index', compact('pengadaans'));
    }

    public function create()
    {
        // $test = DB::table('pengadaans')
        // ->join('budjets', 'pengadaans.budjet_id', '=', 'budjets.id')
        // ->whereNotIn('pengadaans.budjet_id','budjets.id')->get();
        // dd($test);
        $budjets = Budjet::where('status', 'dapat di ajukan')->get();
        $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        // dd($pengadaans);
        
        // dd($budjets);
        return view('dpal/pengadaanBarang/pengadaanBarang/create', compact('budjets'));   
    }

    public function store(Request $request)
    {
        PengadaanBarang::create([
            'budjet_id' => $request->nama_kegiatan,
            'status_pengadaan' => 1,
            'tgl_pengumuman_pemenang' =>null,
        ]);
        
        return redirect()->route('dpal.pengadaanBarang.index');
    }

    public function detail()
    {
        return view('dpal/pengadaanBarang/pengadaanBarang/detail');
        
    }
    
    public function edit($id)
    {
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        return view('dpal/pengadaanBarang/pengadaanBarang/edit', compact('pengadaan'));
    }

    public function update(Request $request, $id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        // dd($request);
        if($request->has('status_pengadaan')){
            $pengadaan->update([
                'status_pengadaan' => 1
            ]);
        }else{
            $pengadaan->update([
                'status_pengadaan' => 0
            ]);
        }
        
        return redirect()->route('dpal.pengadaanBarang.index');
    }

    public function detailTahap()
    {
        return view('dpal/pengadaanBarang/tahap/detailTahap');
    }

    public function pengumumanPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsup = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->first();
        return view('dpal/pengadaanBarang/pengumumanPengadaan',compact('pengsup'));

    }

    public function pesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsup = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->get();
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaPengadaan',compact('pengsup','pengsups'));

    }

    public function pesertaEvaluasi($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaEvaluasi', compact('pengadaan'));

    }

    public function detailPesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $supplier = Supplier::where('id',$id)->first();
        $roleId = DB::table('model_has_roles')->where('model_id',$supplier->id)->first();
        $user = DB::table('roles')->where('id',$roleId->role_id)->first();
        // dd($user);
        $pengsup = PengadaanSupplier::where('supplier_id',$supplier->id)->first();
        // dd($pengsup);
        return view('dpal/pengadaanBarang/pesertaPengadaan/detailPesertaPengadaan',compact('pengadaan','pengsup', 'user','supplier'));

    }
    
    public function detailProdukPesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();

        return view('dpal/pengadaanBarang/pesertaPengadaan/detailProdukPesertaPengadaan',compact('pengadaan'));

    }

    public function hasilEvaluasi($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();

        return view('dpal/pengadaanBarang/evaluasi/hasilEvaluasi', compact('pengadaan'));

    }

    public function editHasilEvaluasi($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();

        return view('dpal/pengadaanBarang/evaluasi/editHasilEvaluasi',compact('pengadaan'));

    }

    public function pemenang($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();

        return view('dpal/pengadaanBarang/pemenang/pemenang', compact('pengadaan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
