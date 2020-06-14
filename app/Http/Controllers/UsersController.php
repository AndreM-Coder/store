<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Repositories\UsersRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Users;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Response;

class UsersController extends AppBaseController
{
    /** @var  UsersRepository */
    private $usersRepository;

    public function __construct(UsersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->all();

        return view('admin.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function create()
    {
        $users = new Users();
        return view('admin.users.create', compact('users'));
    }

    /**
     * Store a newly created Users in storage.
     *
     * @param CreateUsersRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->first());
        } else {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'is_admin' => $request['is_admin'],
                'password' => Hash::make($request['password']),
            ]);
        }



        Flash::success('Users saved successfully.');
        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.edit')->with('users', $users);
    }

    /**
     * Update the specified Users in storage.
     *
     * @param int $id
     * @param UpdateUsersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        $users = $this->usersRepository->update($request->all(), $id);

        Flash::success('Users updated successfully.');

        return redirect(route('admin.users.index'));
    }
    public function users_today(Request $request)
    {
        $users = Users::whereDate('created_at', Carbon::today())->get();

        return view('admin.users.index')
            ->with('users', $users);
    }

    /**
     * Remove the specified Users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success('Users deleted successfully.');

        return redirect(route('admin.users.index'));
    }
}
