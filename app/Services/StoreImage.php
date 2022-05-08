<?php

namespace App\Services;

class StoreImage
{
    public function save($request, $company)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('logos/', $filename);
            $company->update([
                'logo' => $filename
            ]);
        } else {
            $company->update([
                'logo' => 'no_image.png'
            ]);
        }
    }
}
