<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Pictures;
use App\Models\Products;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function landingpage()
    {   
        return view('frontend.welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::User();
        $products = Products::where('stock' >= 1);
        $categories = Category::all();
        
        return view('frontend.welcome', compact('products', 'categories' ,'user'));
    }
    public function admin()
    {
        $totalUsers = Users::all()->count();
        $todayUsers = Users::whereDate('created_at', Carbon::now())->count();
        $totalImages = Pictures::all()->count();
        $totalMemes = Pictures::where('type', 1)->count();
        return view('admin.dashboard', compact('totalUsers', 'todayUsers', 'totalImages', 'totalMemes'));
    }

    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:1000',

        ]);
        //dd($validator->messages());
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->first());
        }
        $images = $request->images;
        foreach ($images as $image) {
            $image_name = $image->getClientOriginalName();
            $image_mime = $image->getMimeType();

            $path = 'uploads/images/';

            $image->move($path, $image_name);
            $model = Image::create([
                'user_id' => Auth::id() ? Auth::id() : 3,
                'name' => '',
                'path' => $path . $image_name,
                'type' => 2
            ]);
        }

        return redirect()->back()->with('success', 'Image uploaded with success');
        //  }

        //  return redirect()->back()->with('error','Your file isn\'t a valid image type. Please upload only .png .jpg .jpeg .webp');

    }
}
