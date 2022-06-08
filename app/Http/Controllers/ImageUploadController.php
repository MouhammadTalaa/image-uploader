<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postimage;

namespace App\Http\Controllers;

use App\Http\Requests\PostImageRequest;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('add_image');
    }

    //Store image
    public function storeImage(PostImageRequest $request)
    {
        $images = $request->file('images');
        foreach ($images as $image) {
            $filename = \Carbon\Carbon::now()->getPreciseTimestamp(3) . '.' . $image->getClientOriginalExtension();
            $image->storeAs(env('SAVING_DIR'), $filename);
            PostImage::create([
                'image' => $filename
            ]);
        }
    }


    //View image
    public function viewImage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('view_image');
    }

    public function destroy(Postimage $postimage): \Illuminate\Http\RedirectResponse
    {
        $postimage->delete();
        return redirect()->route('add_image')
            ->with('success', 'image deleted successfully');
    }


}
