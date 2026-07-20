<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'company_name' => 'Nama Perusahaan',
            'company_description' => 'Deskripsi singkat perusahaan.',
            'company_address' => 'Alamat lengkap perusahaan',
            'company_phone' => '0800-0000-0000',
            'company_email' => 'info@perusahaan.com',
            'facebook_url' => '',
            'instagram_url' => '',
            'whatsapp_number' => '',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}