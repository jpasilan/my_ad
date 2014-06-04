<?php

class GeoController extends BaseController
{

    /**
     * Get the postal code by country
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        if (true || Request::ajax()) {
            $rule = [
                'country' => 'required|exists:countries,id',
            ];

            $validator = Validator::make(Input::all(), $rule);
            $validator->getPresenceVerifier()->setConnection('mysqlgeo');
            if ($validator->passes()) {
                $countryCode = Input::get('country');
                $country = Country::find($countryCode);

                $postalCodes = [];
                if ($country) {
                    $postalCodes = $country->postal_codes()->limit(1000)->lists('postal_code');
                }

                return Response::json($postalCodes, 200);
            }
        }

        return Response::json([], 400);
    }

} 