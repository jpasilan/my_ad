<?php

class AdDataController extends BaseController
{


    /**
     * Get the Ad Category children.
     *
     * @return mixed
     */
    public function getCategoryChildren()
    {
        if (Request::ajax()) {
            $rules = [
                'category' => 'required',
            ];

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->passes()) {
                $input = Input::get('category');
                $category = is_numeric($input)
                    ? AdCategory::find($input)
                    : AdCategory::where('name', '=', $input)->first();

                $children = [];
                if ($category) {
                    $children = $category->children()->lists('name', 'id');
                }

                return Response::json($children, 200);
            }
        }

        return Response::json([], 400);
    }


} 