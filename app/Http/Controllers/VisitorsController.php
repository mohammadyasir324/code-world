<?php
namespace App\Http\Controllers;
use App\Models\visitors;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
class VisitorsController extends Controller
{
    public function index(){
        $visitors = visitors::all();
        return view('myVisitors.index', ['visitors' => $visitors]);
    }

    public function show($id){
        $visitor = visitors::findOrfail($id);
        return view('myVisitors.show', ['visitor' => $visitor]);
    }

    public function create(){
        return view('myVisitors.create');
    }

    public function store(){
        $visitor = new visitors();
        $visitor->name= request('name');
        $visitor->email = request('email');
        $visitor->description = request('description');
        $visitor->gender = request('gender');
        $visitor->save();
       return redirect('/home')->with('message', 'Your request was done successfully!');
    }

    public function destroy($id){
        $visitor = visitors::findOrFail($id);
        $visitor->delete();
        return redirect('/visitors');
    }

    public function edit($id) {
        $visitor = visitors::findOrFail($id);
        return view('myVisitors.edit', ['visitor' => $visitor]);
    }

    public function update($id) {
        $visitor = visitors::findOrFail($id);
        $visitor->name = request('name');
        $visitor->email = request('email');
        $visitor->gender = request('gender');
        $visitor->description = request('description');
        $visitor->save();
        return redirect('/visitors');
    }
}
















    // public function destroy($id) {
    //     $visitor = visitors::findOrfail($id);
    //     $visitor->delete();

    //     return redirect('/visitors');
    // }
