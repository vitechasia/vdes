<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IdentitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link'=>'http://nama.site',
            'nama_situs'=>'nama PT / Perusahan / Situs Web anda',
            'alamat'=>'Alamat kantor',
            'email'=>'email@site.com',
            'kontak'=>'00000000000',
            'meta_description'=>'',
            'meta_keyword'=>'',
            'author'=>'',
            'instagram'=>'',
            'youtube'=>'',
            'tiktok'=>'',
            'twitter'=>'',
            'logo'=>'no-image.jpg',
            'maps'=>''
        ];
    }
}
