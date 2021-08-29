<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OwnerController;
use App\Models\Arsip;
use App\Models\Owner;

class ArsipController extends Controller
{
	public function store(Request $request) {
		try {
			$uploadFilePath = $this->uploadFile($request);
            $OwnerController = new OwnerController;

            $OwnerController->storeByArray([
                "name" => $request['name'],
                "nik" => $request['nik'],
            ]);

            $request['file_name'] = $uploadFilePath;
            $request['user_id'] = Auth::id();

	        $this->validator($request->all())->validate()  ;

            $this->create($request->all());

            return redirect('arsip');
		} catch (Exception $e) {
            dd($e);
		}
        
	}

	protected function uploadFile($request) {
		$isUploaded = $request->file('file')->store('docs');

		if (empty($isUploaded)) throw new Exception("Error Uploading File", 1);

		return $isUploaded;
	}

	protected function validator(array $data) {
        return Validator::make($data, [
            'user_id' => ['required', 'max:255'],
            'nik' => ['required', 'string', 'max:255'],
            'file_name' => ['required', 'string', 'max:255']
        ]);
    }

    protected function create(array $data)
    {
        return Arsip::create([
            'user_id' => $data['user_id'],
            'owner_nik' => $data['nik'],
            'file_name' => $data['file_name']
        ]);
    }

    //
	public function add() {
		$owners = Owner::all();

        return view('arsip/arsipAdd', [
        	"owners" => $owners
        ]);
	}

	public function edit() {
        return view('arsip/arsipEdit');
	}

    public function index() {
        return view('arsip/arsip');
    }
}
