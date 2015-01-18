<?php

class MoviesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /movies
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::all();
		return Response::json($movies);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /movies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /movies
	 *
	 * @return Response
	 */
	public function store()
	{
		$movie = new Movie(Input::all());
		$movie->save();
		return Response::json(['success'=>true]);
	}

	/**
	 * Display the specified resource.
	 * GET /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make("movies.show");
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /movies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movie = Movie::find($id);
		return Response::json($movie);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$movie = Movie::find($id);
		$movie->update(Input::all());
		$movie->save();
		return Response::json(['success'=>true]);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Movie::destroy($id);
		return Response::json(['success'=>true]);
	}

}