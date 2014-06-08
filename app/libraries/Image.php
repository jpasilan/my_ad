<?php namespace Libraries\Helper;

use Intervention\Image\Facades\Image as IImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class Image
{


    /**
     * Upload path.
     */
    const UPLOAD_PATH = "/assets/uploads/images/";


    /**
     * Profile path.
     */
    const PROFILE_PATH = "/assets/images/profile/";


    /**
     * Ad path.
     */
    const AD_PATH = "/assets/images/ad/";


    /**
     * Move an image to a target directory.
     *
     * @param string $file
     * @param string $type
     * @throws Exception
     * @return bool
     */
    public static function move($file, $type)
    {
        if ( ! ($type == 'profile' || $type == 'ad')) {
            throw new \Exception("Invalid value for type. Expected 'profile' or 'ad' but found '{$type}'.");
        }

        $filePath = self::getFullPath($file, 'upload');

        if (File::exists($filePath)) {
            $target = self::getFullPath($file, $type);

            if ( ! empty($target)) {
                File::move($filePath, $target);

                return true;
            }
        }

        return false;
    }


    /**
     * Save an image to the upload path.
     *
     * @param Input $file Input::file()
     * @return array|bool
     */
    public static function save($file)
    {
        $image = IImage::make($file->getRealPath());

        $id = Str::random();
        $newName = $id . '.' . $file->getClientOriginalExtension();
        $oldName = $file->getClientOriginalName();

        $fullPath = self::getFullPath($newName, 'upload');
        if ($image->save($fullPath)) {
            return [
                'original_name' => $oldName,
                'name' => $newName,
                'path' => self::getPath($newName, 'upload'),
                'type' => $file->getMimeType(),
                'size' => File::size($fullPath),
            ];
        }

        return false;
    }


    /**
     * Delete an image.
     *
     * @param string $file
     * @param string $type
     * @param int $model
     * @return bool
     */
    public static function delete($file, $type = '', $model = 0)
    {
        $filePath = !empty($type) ? self::getFullPath($file, $type) : public_path() . $file;

        if (File::exists($filePath) && File::delete($filePath)) {
            // Remove from the Photo model if model id is given.
            if ($model) {
                $pathInfo = pathinfo($file);
                \Photo::where('id', '=', $model)
                    ->where('name', '=', $pathInfo['basename'])
                    ->delete();
            }

            return true;
        }

        return false;
    }


    /**
     * Get image info by the Photo Id.
     *
     * @param int $id Photo Id
     * @return array
     */
    public static function getInfoById($id)
    {
        $info = [];

        $photo = \Photo::find($id);
        if ($photo) {
            $type = is_a($photo->photoable, 'User') ? 'profile' : (is_a($photo->photoable, 'Ad') ? 'ad' : '');

            if ( ! empty($type)) {
                $info['model_id'] = $photo->id;
                $info['original_name'] = $photo->original_name;
                $info['name'] = $photo->name;
                $info['size'] = File::size(self::getFullPath($photo->name, $type));
                $info['path'] = self::getPath($photo->name, $type);
                $info['type'] = $photo->type;
            }
        }

        return $info;
    }


    /**
     * Get the file path according to type.
     *
     * @param string $file
     * @param string $type
     * @param string $prefix
     * @return string
     */
    public static function getPath($file, $type, $prefix = '')
    {
        $directory = '';
        switch ($type) {
            case 'upload':
                $directory = self::UPLOAD_PATH;
                break;
            case 'profile':
                $directory = self::PROFILE_PATH;
                break;
            case 'ad':
                $directory = self::AD_PATH;
                break;
            default:
                break;
        }

        $path = '';
        if ( ! empty($directory)) {
            // Make the path Windows compatible.
            $path = str_replace('/', DIRECTORY_SEPARATOR, $prefix . $directory . $file);

            // Check if the directory exists, otherwise create it.
            if ( ! File::isDirectory(public_path() . $directory)) {
                File::makeDirectory(public_path() . $directory, 0775, true);
            }
        }

        return $path;    }


    /**
     * Get the image full path.
     *
     * @param string $file
     * @param string $type
     * @return string
     */
    private static function getFullPath($file, $type)
    {
        return self::getPath($file, $type, public_path());
    }


} 