<?php

class ActorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /actors
	 *
	 * @return Response
	 */
	public function index()
	{
		$actors = Actor::get();
		return Response::json($actors);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /actors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /actors
	 *
	 * @return Response
	 */
	public function store()
	{
		Actor::create(['first_name'=>Input::get('first_name'), 'last_name'=>Input::get('last_name')]);
		return Response::json(['success'=>true]);
	}

	/**
	 * Display the specified resource.
	 * GET /actors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make("actors.index");
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /actors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /actors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /actors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Actor::destroy($id);
		return Response::json(['success'=>true]);
	}

}