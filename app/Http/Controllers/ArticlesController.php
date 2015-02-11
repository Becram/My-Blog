<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers;

use Request;
use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller {

	
public function __construct(){

    $this->middleware('auth');
}


public function index(){

	$articles=Article::latest()->get();    	
    return view('pages.index',compact('articles'));

	}
public function show($id){

     $articles=Article::findorfail($id);
     // if(is_null($articles)){
     // 	abort(404);
     // }

	return view('pages.show',compact('articles'));
   


}

public function create(){

	 return view('pages.add');
   

}
public function store(Requests\CreateArticleRequest $req){

    Article::create($req->all());
    return redirect('articles') ;
}


public function edit($id){
    $articles=Article::findorfail($id);
    return view('pages.edit',compact('articles'));
   
}


public function update($id,Requests\CreateArticleRequest $req){
    
    $articles=Article::findorfail($id);
    $articles->update($req->all());
    
     return redirect('articles') ;
   
}




}
