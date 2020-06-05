<?php

namespace App\Repository;
use Illuminate\Http\Request;

interface RepositoryInterface{
	public function index();
	public function store(Request $request);
	public function edit($id);
	public function update(Request $request, $id);
	public function delete($id);
	public function publish($id);
	public function unPublish($id);
	public function show($id);
	public function find($id);
	public function search(Request $request);

}
