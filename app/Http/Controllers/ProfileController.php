<?php

namespace App\Http\Controllers;

use App\Models\BaseTableModel;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = BaseTableModel::find(1);
        return view('index',compact('profile'));
    }

    public function edit()
    {
        $profile = BaseTableModel::find(1);
        return view('form-update',compact('profile'));
    }

    public function update(Request $request)
    {
        $input = $request->only(['nama','nim','email','tempat_lahir','tanggal_lahir','hobi']);

        //cek apakah field foto diisi atau tidak..
        if ($request->has('foto')) {
            $image = $request->file('foto');
            $imageName =  'profile.' . $image->extension();

            $actual_image = Image::make($image->getRealPath());

            // Resize tinggi dengan ukuran tinggi image asli / 4
            $height = $actual_image->height() / 4;
    
            // Resize lebar dengan ukuran lebar image asli / 4
            $width = $actual_image->width() / 4;
    
            // Resize tinggi dengan ukuran tinggi image asli / 4 dan lebar dengan ukuran lebar image asli / 4 upload ke folder public/data_file
            // $actual_image->resize(40,40)->save('assets/img/'.$imageName);
            // dd($request);
            // dd($imageName);
            $image->move(public_path('assets/img'), $imageName);
            $input += array('foto'=>$imageName);
        }
        BaseTableModel::find(1)->update($input);
        return redirect()->route('index');   
    }
}

