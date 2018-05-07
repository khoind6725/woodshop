<?php

namespace App\Repositories\Interfaces;

interface SliderRepositoryInterface
{
    public function model();
    public function create($request);
    public function update($request);
    public function find($id);
    public function destroy($id);
}
