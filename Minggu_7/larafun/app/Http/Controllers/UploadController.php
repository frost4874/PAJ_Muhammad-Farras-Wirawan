<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Models\Gambar;
 
class UploadController extends Controller
{
 public function upload(){
 $gambar = Gambar::get();
 return view('upload',['gambar' => $gambar]);
 }

public function proses_upload(Request $request){
    $this->validate($request, [
        'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'keterangan' => 'required',
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');

    // Generate nama unik untuk file
    $nama_file = time()."_".$file->getClientOriginalName();

    // Tentukan lokasi penyimpanan
    $tujuan_upload = 'data_file';

    // Pindahkan file ke lokasi penyimpanan
    $file->move($tujuan_upload, $nama_file);

    // Resize gambar menggunakan Intervention Image
    $image = Image::make(public_path('data_file/'.$nama_file));
    $image->resize(300, 200); // Ubah ukuran gambar sesuai kebutuhan
    $image->save();

    // Simpan data gambar ke database
    Gambar::create([
        'file' => $nama_file,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()->back();
}
}