<?php namespace Libraries\Validation;

use Illuminate\Support\Facades\Lang;
use Symfony\Component\Translation\TranslatorInterface;

class CustomValidator extends \Illuminate\Validation\Validator
{


    /**
     * The custom validation rules that imply the field is required.
     *
     * @var array
     */
    protected $implicitCustomRules = array(
        'RequiredInCategory', 'RequiredImagesMin'
    );


    /**
     * Create a new Validator instance.
     *
     * @param  \Symfony\Component\Translation\TranslatorInterface  $translator
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return void
     */
    public function __construct(TranslatorInterface $translator, $data, $rules, $messages = array())
    {
        $this->implicitRules = array_merge($this->implicitRules, $this->implicitCustomRules);
        parent::__construct($translator, $data, $rules, $messages);
    }


    /**
     * Validator method that requires an input if the Ad Category input
     * fall to a particular Ad Category parent id. Either a Real Estate
     * or Vehicle parent category.
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    protected function validateRequiredInCategory($attribute, $value, $parameters)
    {
        $this->requireParameterCount(2, $parameters, 'required_in_category');

        // Address fields validators may have a third parameter which check if the copy user profile address is toggled
        // on. This field should only be a checkbox and laravel returns an "on" value if checked and NULL if not.
        $skip = isset($parameters[2]) && $this->getValue($parameters[2]) ? true : false;

        $other = $parameters[0];
        $otherValue = $this->getValue($other);
        if ( ! $skip && $this->validateRequired($other, $otherValue)) {
            $children = null;

            $categoryType = $parameters[1];
            switch ($categoryType) {
                case 'real_estate':
                    $realEstate = \AdCategory::where('name', '=', 'real_estate')->first();
                    $children = $realEstate->children()->lists('id');
                    break;
                case 'vehicles':
                    $vehicles = \AdCategory::where('name', '=', 'vehicles')->first();
                    $children = $vehicles->children()->lists('id');
                    break;
                default:
                    break;
            }

            if ($children && in_array($otherValue, $children)) {
                return $this->validateRequired($attribute, $value);
            }
        }

        return true;
    }


    /**
     * Replace text in RequiredInCategory validator message.
     *
     * @param $message
     * @param $attribute
     * @param $rule
     * @param $parameters
     * @return mixed
     */
    protected function replaceRequiredInCategory($message, $attribute, $rule, $parameters)
    {
        return str_replace(':type', Lang::get('ads.' . $parameters[1]), $message);
    }


    /**
     * Validator method that checks the minimum number of uploaded images.
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    protected function validateRequiredImagesMin($attribute, $value, $parameters)
    {
        $this->requireParameterCount(1, $parameters, 'required_images_min');

        if (count($value) < $parameters[0]) {
            return false;
        }

        return true;
    }


    /**
     * Replace text in the RequiredImagesMin validator message.
     *
     * @param $message
     * @param $attribute
     * @param $rule
     * @param $parameters
     * @return mixed
     */
    protected function replaceRequiredImagesMin($message, $attribute, $rule, $parameters)
    {
        return str_replace(':count', $parameters[0], $message);
    }


} 