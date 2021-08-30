<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function storeByArray($request) {
		try {
            $isOwnerExists = $this->checkIfOwnerExistsByNik($request['nik']);
            if (!$isOwnerExists) {
                $this->validator($request)->validate();

                $this->create($request);
            }
		} catch (Exception $e) {
            dd($e);
		}
        
	}

    public function checkIfOwnerExistsByNik($nik) {
        return $this->findOwner('nik', $nik)->count() !== 0;
    }

	protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'max:255']
        ]);
    }

    protected function create(array $data)
    {
        return Owner::create([
            'name' => $data['name'],
            'nik' => $data['nik']
        ]);
    }

    protected function findOwner($attribute, $value) {
        return Owner::where($attribute, $value)->get();
    }
}
