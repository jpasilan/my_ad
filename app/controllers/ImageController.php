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
            $file = Input::file('file');
            $image = Image::make($file->getRealPath());
            $uploadPath = public_path() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR
                . 'uploads' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $fileId = Str::random();
            $fileName = $fileId . '.' . $file->getClientOriginalExtension();

            if ($image->save($uploadPath . $fileName)) {
                return Response::json(['id' => $fileId, 'filename' => $fileName,
                    'status' => 'success', 'message' => 'Image added.'], 200);
            }

            return Response::json(['message' => 'An error occurred when saving the image.', 'status' => 'error'], 400);
        }

        return Response::json(['error' => $validator->messages()->first('file'), 'status' => 'error'], 400);
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
            'filename' => 'required'
        ];

        $validator = Validator::make(Input::all(), $rule);
        if ($validator->passes()) {
            $filePath = public_path() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR .
                'uploads' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . Input::get('filename');

            if (File::exists($filePath) && File::delete($filePath)) {
                return Response::json(['message' => 'Image deleted.', 'status' => 'success'], 200);
            }

            return Response::json(['message' => 'Image does not exist or there was an error in deleting the image.'
                , 'status' => 'error' ], 400);
        }

        return Response::json(['message' => $validator->messages()->first(), 'status' => 'error'], 400);
	}

}
