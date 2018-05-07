<?php
namespace App\Repositories;

use App\Repositories\Interfaces\SliderRepositoryInterface;
use App\Models\Slider;
use Util;

class SliderRepository implements SliderRepositoryInterface
{
    public function model()
    {
        return 'Slider';
    }

    public function create($request)
    {
        $image = ( new Util)->base64_decode_to_image( $request->input('inputSlider'));
        $path = public_path() . '/images/slider-img/' . "slider-".time().".png";
        \File::put( $path, $image);
    }

    public function update($request)
    {
        
    }

    public function find($id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
