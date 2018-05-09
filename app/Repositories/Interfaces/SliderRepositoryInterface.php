<?php

namespace App\Repositories\Interfaces;

interface SliderRepositoryInterface
{
    public function model();
    public function create($request);
    public function destroy($id);
}
