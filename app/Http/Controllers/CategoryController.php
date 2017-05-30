<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
	public function index(CategoryDataTable $dataTable){
		return $dataTable->render('backend.category.index');
	}

    public function create(){
    	return view('backend.category.create')
    	->withTitle('Create Category');
    }
}
