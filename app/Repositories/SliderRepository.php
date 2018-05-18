<?php
namespace App\Repositories;

use App\Repositories\Interfaces\SliderRepositoryInterface;
use App\Models\Slider;
use DB;
use Util;
use Faker\Generator as Faker;

class SliderRepository implements SliderRepositoryInterface
{
    public function model()
    {
        return 'Slider';
    }

    public function create($request)
    {
        DB::transaction(function () use ($request) {
            $image = ( new Util)->base64_decode_to_image( $request->input('inputSlider'));
            $fileName = "slider-".time().".png";
            if (!is_dir(public_path() . '/images/sliders/')) {
                mkdir(public_path() . '/images/sliders/', 0777);
            }
            $pathFile = public_path() . '/images/sliders/' . $fileName;
            \File::put( $pathFile, $image);
            $slider = new Slider;
            $slider->slider_name = trim($request->input('sliderName'));
            $slider->description = trim($request->input('descriptionSlider'));
            $slider->img_url = 'images/sliders/' . $fileName;
            $slider->set_active = $request->has('setActiveSlider') ? $request->input('setActiveSlider') : 0;
            $slider->position_active = $request->has('positionActive') ? $request->input('positionActive') : -1;
            $slider->save();
        });
    }
    
    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            $slider = Slider::find($id);
            $slider->delete();
        });
    }
}
