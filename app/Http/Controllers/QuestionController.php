<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;  
use App\Models\Question;  

class QuestionController extends Controller
{
    private $tableHeaderArray = [
        'Pertanyaan' => 'question',
        'Jawaban' => 'answer',
        'Tanggal Dibuat' => 'id',
    ];

    public function __construc() {
    	$this->middleware('auth');
    }

    public function index() {
    	$questions = DB::table('questions')->select("questions.*");

    	$questions = $this->paginate($questions);

    	$table_header = $this->assigningUrlForTableHeader();

    	return view('question/question', [
    		"questions" => $questions,
    		"table_header" => $this->tableHeaderArray,
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

    protected function paginate($collection) {
        return $collection->paginate(30);
    }

    public function create() {
    	return view('question/questionAdd');
    }

    public function store(Request $request) {
    	$this->validateQuestion($request->all())->validate();
    
    	$this->storeToDb($request->all());

    	return redirect('question');
    }

    public function validateQuestion($data) {
    	return Validator::make($data, [
    		'question' => ['required', 'string', 'max:100'],
    		'answer' => ['required', 'string', 'max:999'],
    	]);
    }

    public function storeToDb($data) {
    	return Question::create([
    		'question' => $data['question'],
    		'answer' => $data['answer'],
    	]);
    }

    public function edit($id) {
    	$question = DB::table('questions')
    					->where('id', $id)
    					->select("questions.*")
    					->get();;

    	return view('question/questionEdit', [
    		'question' => $question[0]
    	]);
    }

    public function update(Request $request, $id) {
    	$this->validateQuestion($request->all())->validate();

    	$this->updateQuestionOnDb($request->all(), $id);

    	return redirect('question');
    }

    public function updateQuestionOnDb($data, $id) {
    	$question = $this->fetchQuestionInstanceById($id);

    	$question->question = $data['question'];
    	$question->answer = $data['answer'];

    	$question->save();
    }

    public function fetchQuestionInstanceById($id) {
        return Question::where('id', $id)->get()[0];
    }

    public function delete($id) {
        $question = $this->fetchQuestionInstanceById($id);

        $question->delete();

        return redirect('question');
    }
}
