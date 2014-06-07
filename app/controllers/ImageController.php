<?php

class ImageController extends BaseController
{

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
            $file = Libraries\Helper\Image::save(Input::file('file'));

            if ($file) {
                return Response::json([
                    'file' => $file,
                    'status' => 'success',
                    'message' => 'Image added.'
                ], 200);
            }

            return Response::json([
                'message' => 'An error occurred when saving the image.',
                'status' => 'error'
            ], 400);
        }

        return Response::json([
            'error' => $validator->messages()->first('file'),
            'status' => 'error'
        ], 400);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $rule = [
            'path' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rule);
        if ($validator->passes()) {
            if (Libraries\Helper\Image::delete(Input::get('path'), '', Input::get('model_id'))) {
                return Response::json([
                    'message' => 'Image deleted.',
                    'status' => 'success'
                ], 200);
            }

            return Response::json([
                'message' => 'Image does not exist or there was an error in deleting the image.'
                , 'status' => 'error'
            ], 400);
        }

        return Response::json([
            'message' => $validator->messages()->first(),
            'status' => 'error'
        ], 400);
	}

}
