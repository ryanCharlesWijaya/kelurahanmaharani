<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\JenisDokumenController;
use App\Models\Arsip;
use App\Models\Owner;
use App\Models\JenisDokumen;

class ArsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function store(Request $request) {
		try {
			$uploadFilePath = $this->uploadFile($request);
            $OwnerController = new OwnerController;
            $JenisDokumenController = new JenisDokumenController;

            $OwnerController->storeByArray([
                "name" => $request['name'],
                "nik" => $request['nik'],
            ]);

            $jenisDokumen = $JenisDokumenController->storeByArray([
                "jenis_dokumen" => $request['jenis_dokumen']
            ]);

            $request['jenis_dokumen'] = $jenisDokumen->id;
            $request['file_name'] = $uploadFilePath;
            $request['user_id'] = Auth::id();

	        $this->validator($request->all())->validate();

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
            'jenis_dokumen' => ['required', 'int'],
            'kode_dokumen' => ['required', 'string', 'max:255'],
            'keterangan' => ['string', 'max:1000'],
            'file_name' => ['required', 'string', 'max:255']
        ]);
    }

    protected function create(array $data)
    {
        return Arsip::create([
            'user_id' => $data['user_id'],
            'owner_nik' => $data['nik'],
            'jenis_dokumen' => $data['jenis_dokumen'],
            'kode_dokumen' => $data['kode_dokumen'],
            'keterangan' => $data['keterangan'],
            'file_name' => $data['file_name']
        ]);
    }

    //
	public function add() {
        $owners = Owner::all();
		$jenisJenisDokumen = JenisDokumen::all();

        return view('arsip/arsipAdd', [
        	"owners" => $owners,
            "jenisJenisDokumen" => $jenisJenisDokumen
        ]);
	}

	public function edit() {
        return view('arsip/arsipEdit');
	}

    public function index() {
        $arsips = Arsip::paginate(1);

        return view('arsip/arsip', [
            'arsips' => $arsips
        ]);
    }
}
