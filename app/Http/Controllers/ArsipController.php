<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\JenisDokumenController;
use App\Models\Arsip;
use App\Models\Owner;
use App\Models\JenisDokumen;

class ArsipController extends Controller
{
    private $tableHeaderArray = [
        'Kode Dokumen' => 'kode_dokumen',
        'Nik Pemilik' => 'owner_nik',
        'Pemilik' => 'owner_name',
        'Jenis Dokumen' => 'jenis_dokumen_name',
        'Keterangan' => 'keterangan',
        'Admin' => 'user_name',
        'Tanggal Dibuat' => 'id',
    ];

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $this->assigningUrlForTableHeader();

        $arsips = DB::table('arsips')
                    ->join('owners', 'arsips.owner_nik', 'owners.nik')
                    ->join('jenis_dokumens', 'arsips.jenis_dokumen', 'jenis_dokumens.id')
                    ->join('users', 'arsips.user_id', 'users.id')
                    ->select('arsips.*', 'owners.name as owner_name', 'jenis_dokumens.name as jenis_dokumen_name', 'users.name as user_name');

        $arsips = $this->filterArsipsFromGetVariable($arsips);

        $arsips = $this->paginate($arsips);

        return view('arsip/arsip', [
            'arsips' => $arsips->appends(request()->input()),
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

    protected function filterArsipsFromGetVariable($collection) {
        $isFromDataExists = isset($_GET['fromDate']);
        $isUntilDataExists = isset($_GET['untilDate']);

        if ($isFromDataExists && $isUntilDataExists) {
            $collection->whereBetween("arsips.created_at", [$_GET['fromDate']." 00:00:00", $_GET['untilDate']." 23:59:59"]);
        }

        $isSearchQueryExists = isset($_GET['query']);
        if($isSearchQueryExists) {
            $collection->where(function($query) {
                $searchQuery = '%'.$_GET['query']."%";

                $query->where('arsips.kode_dokumen', 'like', $searchQuery)
                        ->orWhere('jenis_dokumens.name', 'like', $searchQuery)
                        ->orWhere('owners.name', 'like', $searchQuery)
                        ->orWhere('owners.nik', 'like', $searchQuery)
                        ->orwhere('owners.name', 'like', $searchQuery);
            });
        }

        $sortBy = isset($_GET['sortBy']) ? $_GET['sortBy'] : 'id';
        $sortByOrder = isset($_GET['sortByOrder']) ? $_GET['sortByOrder'] : 'desc';
        $collection->orderBy($sortBy, $sortByOrder);

        return $collection;
    }

    protected function paginate($collection) {
        return $collection->paginate(1);
    }

    public function create() {
        $owners = Owner::all();
        $jenisJenisDokumen = JenisDokumen::all();

        return view('arsip/arsipAdd', [
            "owners" => $owners,
            "jenisJenisDokumen" => $jenisJenisDokumen
        ]);
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

            $this->ArsipValidator($request->all());

            $this->storeToDb($request->all());

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

    protected function ArsipValidator(array $data) {
        return Validator::make($data, [
            'user_id' => ['required', 'max:255'],
            'nik' => ['required', 'string', 'max:255'],
            'jenis_dokumen' => ['required', 'int'],
            'kode_dokumen' => ['required', 'string', 'max:255'],
            'keterangan' => ['string', 'max:1000'],
            'file_name' => ['required', 'string', 'max:255']
        ]);
    }

    protected function storeToDb(array $data) {
        return Arsip::create([
            'user_id' => $data['user_id'],
            'owner_nik' => $data['nik'],
            'jenis_dokumen' => $data['jenis_dokumen'],
            'kode_dokumen' => $data['kode_dokumen'],
            'keterangan' => $data['keterangan'],
            'file_name' => $data['file_name']
        ]);
    }

    public function edit($id) {
        $arsip = Arsip::find($id);
        $owners = Owner::all();
        $jenisJenisDokumen = JenisDokumen::all();

        return view('arsip/arsipEdit', [
            "arsip" => $arsip,
            "owners" => $owners,
            "jenisJenisDokumen" => $jenisJenisDokumen
        ]);
    }

    public function updateInfo(Request $request, $id) {
        try {
            $JenisDokumenController = new JenisDokumenController;
            $jenisDokumen = $JenisDokumenController->storeByArray([
                "jenis_dokumen" => $request['jenis_dokumen']
            ]);

            $request['jenis_dokumen'] = $jenisDokumen->id;
            $request['user_id'] = Auth::id();

            $this->validateArsipInfo($request->all());

            $this->updateArsipInfoOnDb($request->all(), $id);

            return redirect('arsip');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function validateArsipInfo($data) {
        return Validator::make($data, [
            "jenis_dokumen" => ['unique', 'max:255'],
            "kode_dokumen" => ['unique', 'max:255'],
            "keterangan" => ['unique', 'max:500']
        ]); 
    }

    public function updateArsipInfoOnDb($data, $id) {
        $arsip = $this->fetchArsipInstanceById($id);

        $arsip->jenis_dokumen = $data['jenis_dokumen'];
        $arsip->kode_dokumen = $data['kode_dokumen'];
        $arsip->keterangan = $data['keterangan'];

        $arsip->save();
    }

    public function updateFile(Request $request, $id) {
        try {
            $request->validate([
                'file' => 'required|mimes:pdf,jpg,jpeg,png|max:2048'
            ]);

            $uploadFilePath = $this->uploadFile($request);

            $request['file_name'] = $uploadFilePath;

            $this->updateAripFileOnDb($request->all(), $id);

            return redirect('arsip');
        } catch (Exception $e) {
            dd($e);
        }
    }

    protected function updateAripFileOnDb(array $data, $id) {
        $arsip = $this->fetchArsipInstanceById($id);

        $arsip->file_name = $data['file_name'];

        $arsip->save();
    }

    protected function fetchArsipInstanceById($id) {
        return Arsip::where('id', $id)->get()[0];
    }

    public function delete($id) {
        $arsip = $this->fetchArsipInstanceById($id);

        Storage::delete($arsip->file_name);

        $arsip->delete();

        return redirect('arsip');
    }
}
