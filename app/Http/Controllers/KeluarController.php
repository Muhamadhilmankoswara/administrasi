<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KeluarController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$surat_keluar = DB::table('surat_keluar')->get();
 
    	// mengirim data pegawai ke view index
    	return view('keluar',['surat_keluar' => $surat_keluar]);
 
    }

	// method untuk menampilkan view form tambah pegawai
	public function tambahh()
	{
 
	// memanggil view tambah
	return view('tambahh');
 
	}

	// method untuk insert data ke table pegawai
	public function storee(Request $request)
	{
	// insert data ke table pegawai
	DB::table('surat_keluar')->insert([
	'no_surat' => $request->kodee,
	'perihal' => $request->perihal,
	'isi_ringkas_surat' => $request->isii,
	'asal_surat' => $request->asall,
	'tanggal_surat' => $request->tanggall,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keluar');
 
	}

	// method untuk edit data pegawai
	public function editt($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$surat_keluar = DB::table('surat_keluar')->where('no_surat',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editt',['surat_keluar' => $surat_keluar]);
 
	}

	// update data pegawai
	public function update(Request $request)
	{
	// update data pegawai
	DB::table('surat_keluar')->where('no_surat',$request->kodee)->update([
	'perihal' => $request->perihal,
	'isi_ringkas_surat' => $request->isii,
	'asal_surat' => $request->asall,
	'tanggal_surat' => $request->tanggall
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keluar');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('surat_keluar')->where('no_surat',$id)->delete();
	// alihkan halaman ke halaman pegawai
	return redirect('/keluar');
	}
}