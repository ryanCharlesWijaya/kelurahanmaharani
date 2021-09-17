<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller {
	private $tableHeaderArray = [
        'Nama' => 'name',
        'Username' => 'username'
    ];

	public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $this->assigningUrlForTableHeader();

    	$users = DB::table('users');

        $users = $this->filterUsersFromGetVariable($users);

        $users = $users->paginate(15);

        return view('user/user', [
            'users' => $users->appends(request()->input()),
            'table_header' => $this->tableHeaderArray
        ]);
    }

    protected function assigningUrlForTableHeader() {
        foreach ($this->tableHeaderArray as $key => $value) {
            $isSortByIsBeingUsed = (isset($_GET['sortBy']) && $_GET['sortBy'] == $value); 
            $sortByOrder = (isset($_GET['sortByOrder']) && $isSortByIsBeingUsed && $_GET['sortByOrder'] == 'desc') ? 'asc' : 'desc'; 

            $this->tableHeaderArray[$key] = [
                'name' => $key,
                'attribute' => $value,
                'orderBy' => $sortByOrder
            ];
        }
    }

    protected function filterUsersFromGetVariable($collection) {
        $isSearchQueryExists = isset($_GET['query']);
        if($isSearchQueryExists) {
            $searchQuery = '%'.$_GET['query']."%";

            $collection->where('users.name', 'like', $searchQuery)
                ->orWhere('users.username', 'like', $searchQuery);
        }

        $sortBy = isset($_GET['sortBy']) ? $_GET['sortBy'] : 'id';
        $sortByOrder = isset($_GET['sortByOrder']) ? $_GET['sortByOrder'] : 'desc';
        $collection->orderBy($sortBy, $sortByOrder);

        return $collection;
    }    

    public function create() {
        return view('user/userAdd');
    }

    public function edit($id) {
    	$user = DB::table('users')
    				->where('id', $id)
    				->get()[0];

        return view('user/userEdit', [
            'user' => $user,
        ]);
    }

    public function updatePassword(Request $request, $id) {
    	$this->validateUserPassword($request->all());

        $this->updateUserPasswordOnDb($request->all(), $id);

    	return redirect('user');
    }

    public function validateUserPassword($data) {
    	return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function updateUserPasswordOnDb($data, $id) {
        $user = $this->getUserInstanceFromId($id);

        $user->password = Hash::make($data['password']);

        return $user->save();
    }

    public function updateInfo(Request $request, $id) {
        $this->validateUserInfo($request->all());

        $this->updateUserInfoOnDb($request->all(), $id);

        return redirect('user');
    }

    public function validateUserInfo($data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
        ]);
    }

    public function updateUserInfoOnDb($data, $id) {
        $user = $this->getUserInstanceFromId($id);

        $user->name = $data['name'];
        $user->username = $data['username'];
        
        return $user->save();
    }

    public function getUserInstanceFromId($id) {
        return User::where('id', $id)->first();
    }


    public function delete(Request $request, $id) {
        $this->getUserInstanceFromId($id)->delete();

        if(Auth::id() == $id) { return redirect('login'); }

        return redirect('user');
    }
}
