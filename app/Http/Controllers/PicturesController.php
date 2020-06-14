<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePicturesRequest;
use App\Http\Requests\UpdatePicturesRequest;
use App\Repositories\PicturesRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Image;
use App\Models\Pictures;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Dotenv;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Response;

class PicturesController extends AppBaseController
{
    /** @var  PicturesRepository */
    private $picturesRepository;

    public function __construct(PicturesRepository $picturesRepo)
    {
        $this->picturesRepository = $picturesRepo;
    }

    /**
     * Display a listing of the Pictures.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       
        $pictures = Pictures::where('type', 2)->get();

        return view('admin.pictures.index')
            ->with('pictures', $pictures);
    }

    public function memes(Request $request)
    {
        $pictures = Pictures::where('type', 1)->get();
        return view('admin.pictures.index') 
            ->with('pictures', $pictures);
    }

    /**
     * Show the form for creating a new Pictures.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pictures.create');
    }

    /**
     * Store a newly created Pictures in storage.
     *
     * @param CreatePicturesRequest $request
     *
     * @return Response
     */
    public function store(CreatePicturesRequest $request)
    {
        // $input = $request->all();

        // $pictures = $this->picturesRepository->create($input);

        $validator = Validator::make($request->all(), [
            'path' => 'required|image|mimes:jpeg,png,jpg,webp|max:1000|dimensions:min_width=10,max_width=1000',

        ]);
        //dd($validator->messages());
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->first());
        }

        $image = $request->path;
        $image_name = $image->getClientOriginalName();
        $image_mime = $image->getMimeType();

        $path = 'uploads/images/';
        
        $image->move($path, $image_name);
        $model = Pictures::create([
            'user_id' => Auth::id(),
            'name' => '',
            'path' => $path . $image_name,
            'type' => 2
        ]);

        Flash::success('Pictures saved successfully.');

        return redirect(route('admin.pictures.index'));
    }

    /**
     * Display the specified Pictures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error('Pictures not found');

            return redirect(route('admin.pictures.index'));
        }

        return view('admin.pictures.show')->with('pictures', $pictures);
    }

    /**
     * Show the form for editing the specified Pictures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error('Pictures not found');

            return redirect(route('admin.pictures.index'));
        }

        return view('admin.pictures.edit')->with('pictures', $pictures);
    }

    /**
     * Update the specified Pictures in storage.
     *
     * @param int $id
     * @param UpdatePicturesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePicturesRequest $request)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error('Pictures not found');

            return redirect(route('admin.pictures.index'));
        }


        Flash::success('Pictures updated successfully.');

        return redirect(route('admin.pictures.index'));
    }

    

    /**
     * Remove the specified Pictures from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error('Pictures not found');

            return redirect(route('admin.pictures.index'));
        }

        $this->picturesRepository->delete($id);

        Flash::success('Pictures deleted successfully.');

        return redirect(route('admin.pictures.index'));
    }
}
