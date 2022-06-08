<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Postimage extends Model
{
    use HasFactory;
    protected $fillable = ['image'];

//    //Store image
//    public function storeImage(Request $request): \Illuminate\Http\RedirectResponse
//    {
//        $data= new Postimage();
//
//        if($request->file('image')){
//            $file= $request->file('image');
//            $filename= date('YmdHi').$file->getClientOriginalName();
//            $file-> move(public_path('public/Image'), $filename);
//            $data['image']= $filename;
//        }
//        $data->save();
//        return redirect()->route('images.view');
//
//    }
////View post
//    public function viewImage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
//    {
//        $imageData= Postimage::all();
//        return view('Image.view_image', compact('imageData'));
//    }

}
