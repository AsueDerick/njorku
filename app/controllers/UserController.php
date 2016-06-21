<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$users = User::all();
		return View::make('user.index')->with('users', $users);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$name = Input::get('name');
		$email = Input::get('email');

		$user = new User;

		$user->name = $name;
		$user->email = $email;
		$user->save();

		return Redirect::route('user.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		$users = User::findOrFail($id);
		return View::make('user.edit')->with('users', $users);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

		$name = Input::get('name');
		$email = Input::get('email');

		$user = User::findOrFail($id);

		$user->name = $name;
		$user->email = $email;

		$user->update();

		return Redirect::route('user.index');
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
		$user = User::findOrFail($id);

		$user->delete();

		return Redirect::route('user.index');
	}


}
