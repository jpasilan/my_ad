<?php

class AdController extends BaseController
{


    /**
     * Instantiate an AdController instance.
     */
    public function __construct()
    {
        // Set the necessary route filters for the AdController.
        $this->beforeFilter('csrf', [
            'only' => ['store', 'update', 'destroy']
        ]);
        $this->beforeFilter('allowed:ad.view', [
            'only' => ['index', 'show']
        ]);
        $this->beforeFilter('allowed:ad.create', [
            'only' => ['create', 'store']
        ]);
        $this->beforeFilter('allowed:ad.update', [
            'only' => ['edit', 'update']
        ]);
        $this->beforeFilter('allowed:ad.delete', [
            'only' => ['delete']
        ]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $ads = Ad::all();

		return View::make('ads.index', ['ads' => $ads]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ads.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        if (Request::isMethod('post')) {
            $validate = $this->validateInput(Input::all());
            $validator = $validate['validator'];

            if ($validator->passes()) {
                $user = Sentry::getUser();

                $data = $validate['data'];
                $ad = Ad::create([
                    'title'         => $data['title'],
                    'price'         => $data['price'],
                    'description'   => $data['description'],
                    'ad_condition'  => $data['ad_condition'],
                ]);

                // Save images and associate to ad.
                foreach ($data['photos'] as $image) {
                    // TODO: Refactor the following lines.
                    $uploadPath = public_path() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR
                        . 'uploads' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
                    $adImagePath = public_path() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR
                        . 'images' . DIRECTORY_SEPARATOR . 'ad' . DIRECTORY_SEPARATOR;
                    if (File::exists($uploadPath . $image)) {
                        File::move($uploadPath . $image, $adImagePath . $image);
                    }

                    $ad->photos()->create(['path' => $image]);
                }

                // Then, associate to user.
                $user->ads()->save($ad);

                // Get the ad category and associate the ad to it.
                $category = AdCategory::find($data['ad_category_id']);
                $category->ads()->save($ad);

                return Redirect::back()->withMessage(['success' => 'Advertisement successfully added.']);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

		return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ad = Ad::find($id);

        return View::make('ads.show', ['ad' => $ad]);
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

    /**
     * Validate the input data.
     *
     * @param $input Input array
     * @return array Returns the Validator object and data.
     */
    public function validateInput($input)
    {
        $rules = [
            'photos' => 'required_images_min:1',
            'title' => 'required|max:100',
            'price' => 'required|numeric',
            'description' => 'required',
            'ad_condition' => 'required|in:used,brand_new',
            'ad_category_id' => 'required',
            'address' => 'required_in_category:ad_category_id,real_estate',
            'city' => 'required_in_category:ad_category_id,real_estate',
            'country' => 'required_in_category:ad_category_id,real_estate',
            'province' => 'required_in_category:ad_category_id,real_estate',
            'postal_code' => 'required_in_category:ad_category_id,real_estate',
        ];

        return ['validator' => Validator::make($input, $rules), 'data' => $input];
    }

}