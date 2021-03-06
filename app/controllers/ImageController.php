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
                    'message' => Lang::get('flash.image_added'),
                    'status' => 'success'
                ], 200);
            }

            return Response::json([
                'message' => Lang::get('flash.error_save_image'),
                'status' => 'error'
            ], 400);
        }

        return Response::json([
            'message' => $validator->messages()->first('file'),
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
                    'message' => Lang::get('flash.img_deleted'),
                    'status' => 'success'
                ], 200);
            }

            return Response::json([
                'message' => Lang::get('flash.img_not_exist'),
                'status' => 'error'
            ], 400);
        }

        return Response::json([
            'message' => $validator->messages()->first(),
            'status' => 'error'
        ], 400);
	}

}
