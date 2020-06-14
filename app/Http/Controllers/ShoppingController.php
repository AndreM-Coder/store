<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShoppingRequest;
use App\Http\Requests\UpdateShoppingRequest;
use App\Repositories\ShoppingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShoppingController extends AppBaseController
{
    /** @var  ShoppingRepository */
    private $shoppingRepository;

    public function __construct(ShoppingRepository $shoppingRepo)
    {
        $this->shoppingRepository = $shoppingRepo;
    }

    /**
     * Display a listing of the Shopping.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shoppings = $this->shoppingRepository->all();

        return view('admin.shoppings.index')
            ->with('shoppings', $shoppings);
    }

    /**
     * Show the form for creating a new Shopping.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.shoppings.create');
    }

    /**
     * Store a newly created Shopping in storage.
     *
     * @param CreateShoppingRequest $request
     *
     * @return Response
     */
    public function store(CreateShoppingRequest $request)
    {
        $input = $request->all();

        $shopping = $this->shoppingRepository->create($input);

        Flash::success('Shopping saved successfully.');

        return redirect(route('admin.shoppings.index'));
    }

    /**
     * Display the specified Shopping.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shopping = $this->shoppingRepository->find($id);

        if (empty($shopping)) {
            Flash::error('Shopping not found');

            return redirect(route('admin.shoppings.index'));
        }

        return view('admin.shoppings.show')->with('shopping', $shopping);
    }

    /**
     * Show the form for editing the specified Shopping.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shopping = $this->shoppingRepository->find($id);

        if (empty($shopping)) {
            Flash::error('Shopping not found');

            return redirect(route('admin.shoppings.index'));
        }

        return view('admin.shoppings.edit')->with('shopping', $shopping);
    }

    /**
     * Update the specified Shopping in storage.
     *
     * @param int $id
     * @param UpdateShoppingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShoppingRequest $request)
    {
        $shopping = $this->shoppingRepository->find($id);

        if (empty($shopping)) {
            Flash::error('Shopping not found');

            return redirect(route('admin.shoppings.index'));
        }

        $shopping = $this->shoppingRepository->update($request->all(), $id);

        Flash::success('Shopping updated successfully.');

        return redirect(route('admin.shoppings.index'));
    }

    /**
     * Remove the specified Shopping from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shopping = $this->shoppingRepository->find($id);

        if (empty($shopping)) {
            Flash::error('Shopping not found');

            return redirect(route('admin.shoppings.index'));
        }

        $this->shoppingRepository->delete($id);

        Flash::success('Shopping deleted successfully.');

        return redirect(route('admin.shoppings.index'));
    }
}
