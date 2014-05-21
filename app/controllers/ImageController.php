<?php

class ImageController extends BaseController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = [
            'file' => 'required|image|max:1000',
        ];

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->passes()) {
            $file = Input::file('file');
            $image = Image::make($file->getRealPath());
            $uploadPath = public_path() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR
                . 'uploads' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $fileName = Str::random() . '.' . $file->getClientOriginalExtension();

            if ($image->save($uploadPath . $fileName)) {
                return Response::json(['filename' => $fileName, 'status' => 'success'], 200);
            } else {
                return Response::json(['status' => 'error'], 400);
            }
        }

        return Response::json(['error' => $validator->messages()->first('file'), 'status' => 'error'], 400);
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
