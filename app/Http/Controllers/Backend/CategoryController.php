<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return 'teste 1';
    }

    public function create() {
        return 'teste 8';
    }

    public function store() {
        return 'teste 7';
    }

    public function edit($id) {
        return 'editar';
    }

    public function update($id) {
        return 'teste 5';
    }

    public function destroy($id) {
        return 'excluir';
    }

    public function restore($id) {
        return 'restaurar';
    }

    public function destroyPermanently($id) {
        return 'excluir permanentemente';
    }
}
