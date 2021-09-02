<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\JenisDokumen;

class JenisDokumenController extends Controller
{
    public function storeByArray($request) {
		try {
            $isOwnerExists = $this->checkIfJenisDokumenExistsByName($request['jenis_dokumen']);
            if (!$isOwnerExists) {
                $this->validator($request)->validate();

                return $this->create($request);
            } else {
                return $this->findJenisDokumen('name', $request['jenis_dokumen'])[0];
            }
		} catch (Exception $e) {
            dd($e);
		}
        
	}

    public function checkIfJenisDokumenExistsByName($jenisDokumenName) {
        return $this->findJenisDokumen('name', $jenisDokumenName)->count() !== 0;
    }

	protected function validator(array $data) {
        return Validator::make($data, [
            'jenis_dokumen' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        return JenisDokumen::create([
            'name' => $data['jenis_dokumen'],
        ]);
    }

    protected function findJenisDokumen($attribute, $value) {
        return JenisDokumen::where($attribute, $value)->get();
    }
}
