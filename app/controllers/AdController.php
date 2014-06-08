<?php

class AdController extends BaseController
{


    /**
     * Instantiate an AdController instance.
     */
    public function __construct()
    {
         // Set the auth filter.
        $this->beforeFilter('sentryAuth', [
            'except' => ['index', 'show']
        ]);

        // Then set the other necessary route filters.
        $this->beforeFilter('csrf', [
            'only' => ['store', 'update', 'destroy']
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
        $ads = null;
        if (Input::has('owned') && Input::get('owned')) {
            $ads = Sentry::getUser()->ads;
        } else if (Input::has('owner') && $id = Input::get('owner')) {
            $user = User::find($id);
            if ($user) {
                $ads = $user->ads;
            }
        } else {
            $ads = Ad::all();
        }

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
                    'description'   => nl2br($data['description']), // TODO: Find a better implementation.
                    'ad_condition'  => $data['ad_condition'],
                    'copy_address'  => isset($data['copy_address']) && $data['copy_address'] ? 1 : 0,
                    'status'        => 'open',
                ]);

                // Save photos and associate to ad.
                foreach ($data['photos'] as $photo) {
                    $image = json_decode($photo);
                    if (Libraries\Helper\Image::move($image->name, 'ad')) {
                        $ad->photos()->create([
                            'original_name' =>  $image->original_name,
                            'name' => $image->name,
                            'type' => $image->type,
                        ]);
                    }
                }

                $rawAddress = (isset($data['copy_address']) && $data['copy_address'])
                    ? [
                        'address1' => $user->address->address1,
                        'address2' => $user->address->address2,
                        'city' => $user->address->city,
                        'province' => $user->address->province,
                        'country' => $user->address->country,
                        'postal_code' => $user->address->postal_code,
                        // TODO: Add the latitude and longitude when working with the Geolocation feature.
                        //'latitude' => $user->address->latitude,
                        //'longitude' => $user->address->longitude,
                    ]
                    : [
                        'address1' => $data['address1'],
                        'address2' => $data['address2'],
                        'city' => $data['city'],
                        'province' => $data['province'],
                        'country' => $data['country'],
                        'postal_code' => $data['postal_code'],
                        // TODO: Add the latitude and longitude when working with the Geolocation feature.
                    ];
                $address = Libraries\Helper\Model::buildArray($rawAddress, [
                    // TODO: Add the latitude and longitude when working with the Geolocation feature.
                    'address1', 'address2', 'city', 'province', 'country', 'postal_code'
                ]);
                if ( ! empty($address)) {
                    $ad->address()->create($address);
                }

                // Then, associate ad to user.
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
            'address1' => 'required_in_category:ad_category_id,real_estate,copy_address',
            'city' => 'required_in_category:ad_category_id,real_estate,copy_address',
            'country' => 'required_in_category:ad_category_id,real_estate,copy_address',
            'province' => 'required_in_category:ad_category_id,real_estate,copy_address',
            'postal_code' => 'required_in_category:ad_category_id,real_estate,copy_address',
        ];

        return ['validator' => Validator::make($input, $rules), 'data' => $input];
    }

}
