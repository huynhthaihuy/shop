<?php

namespace App\Http\Services;

class UploadService
{
    public function store($request){
        if ($request->hasFile('file')){
            try {
            $name = $request->file('file')->getClientOriginalName();

            $pathFull = 'uploads/';
            $path = $request->file('file')->storeAs(
                $pathFull, $name
            );

            return $name;
        }
        catch (\Exception $error) {
            return false;
        }
        }
    }
}