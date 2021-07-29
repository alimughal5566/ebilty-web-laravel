<?php
if (!function_exists('storeImage')) {
function storeImage($image) {
        $name = rand().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        return 'images/'.$name;
    }
}