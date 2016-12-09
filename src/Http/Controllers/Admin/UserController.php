<?php

namespace L5Starter\UserManagement\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use L5Starter\UserManagement\Http\Requests\CreateUserRequest;
use L5Starter\UserManagement\Http\Requests\UpdateUserRequest;
use L5Starter\UserManagement\Repositories\UserRepository;
use Illuminate\Http\Request;
use Flash;

class UserController extends Controller
{
    /** @var  UserRepository */
    private $userRepository;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->paginate(config('settings.resultsPerPage'));

        return view('l5starter::admin.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('l5starter::admin.users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success(trans('l5starter::messages.create.success'));

        return redirect(route('admin.users.index'));
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error(trans('l5starter::messages.404_not_found'));

            return redirect(route('admin.users.index'));
        }

        return view('l5starter::admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error(trans('l5starter::messages.404_not_found'));

            return redirect(route('admin.users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success(trans('l5starter::messages.update.success'));

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error(trans('l5starter::messages.404_not_found'));

            return redirect(route('admin.users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success(trans('l5starter::messages.delete.success'));

        return redirect(route('admin.users.index'));
    }
}
