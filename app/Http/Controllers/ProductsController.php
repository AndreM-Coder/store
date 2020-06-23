<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Repositories\ProductsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductsController extends AppBaseController
{
    /** @var  ProductsRepository */
    private $productsRepository;

    public function __construct(ProductsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the Products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productsRepository->all();

        return view('admin.products.index')
            ->with('products', $products);
    }

    public function main(Request $request)
    {
        $products = $this->productsRepository->all();

        return view('frontend.products', compact('products'));
    }

    /**
     * Show the form for creating a new Products.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created Products in storage.
     *
     * @param CreateProductsRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {   

        $input = $request->all();
        
        $validator = Validator::make($request->all(), [
            'product_image' => 'required|mimes:jpeg,png,jpg,webp|max:1000|dimensions:max-width=1000px,max-height=1500px',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->first());
        }
        
        $image = $request->product_image;
        $image_name = time() . rand(1, 1000) . '.' . $image->extension();
       $path = 'uploads/images/';

        $image->move(public_path($path), $image_name);

        
        $model = Products::create([
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'product_image' => $path . $image_name,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        Flash::success('Products saved successfully.');

        return redirect(url('/products'));
    }

    /**
     * Display the specified Products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(url('/products'));
        }

        return view('admin.products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified Products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(url('/products'));
        }

        return view('admin.products.edit')->with('products', $products);
    }

    /**
     * Update the specified Products in storage.
     *
     * @param int $id
     * @param UpdateProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsRequest $request)
    {
        $products = $this->productsRepository->find($id);
        
        if (empty($products)) {
            Flash::error('Product not found');

            return redirect(route('admin.lotteries.index'));
        }

        $validator = Validator::make($request->all(), [
            'product_image' => 'required|mimes:jpeg,png,jpg,webp|max:1000|dimensions:max-width=1000px,max-height=1500px',            

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->first());
        }

        $model = Products::find($id);

        if (!$model) {
            return redirect()->back()->with('error', 'You put an invalid id');
        }

        $path = 'uploads/images/';

        if ($request->product_image ?: null) {
            if (file_exists($model->product_image))
                unlink($model->product_image);
            $image = $request->product_image;
            $image_name = time() . rand(1, 1000) . '.' . $image->extension();
            $image->move(public_path($path), $image_name);
        }

        if ($request->product_image) {
            $model = $model->update([
                'product_id' => $request->product_id,
                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'product_image' => $path . $image_name,
                'stock' => $request->stock,
                'description' => $request->description,
            ]);
        } else {
            $model = $model->update([
                'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            ]);

        }
        Flash::success('Products updated successfully.');

        return redirect(url('/products'));
    }

    /**
     * Remove the specified Products from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(url('/products'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect()->back();
    }
}
