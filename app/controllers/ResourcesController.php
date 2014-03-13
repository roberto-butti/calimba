<?php

class ResourcesController extends \BaseController {

	protected $layout = 'layouts.admin';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$resources = Resource::all();
		return View::make('resources.index')
			->with('resources', $resources);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('resources.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'skill' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('resources/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$resource = new Resource;
			$resource->name       = Input::get('name');
			$resource->email      = Input::get('email');
			$resource->skill = Input::get('skill');
			$resource->save();

			// redirect
			Session::flash('message', 'Successfully created Resource!');
			return Redirect::to('resources');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$resource = Resource::find($id);

		// show the view and pass the nerd to it
		return View::make('resources.show')
			->with('resource', $resource);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$resource = Resource::find($id);

		// show the edit form and pass the nerd
		return View::make('resources.edit')
			->with('resource', $resource);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'skill' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('resources/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$resource = Resource::find($id);
			$resource->name       = Input::get('name');
			$resource->email      = Input::get('email');
			$resource->skill = Input::get('skill');
			$resource->save();

			// redirect
			Session::flash('message', 'Successfully updated resource!');
			return Redirect::to('resources');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}