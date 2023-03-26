<?php

namespace Database\Seeders;

use GustavoMorais\Cms\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactInfo::insert([
            [
                'name' => 'Celular',
                'type' => 'cellphone',
                'value' => '62984112233',
                'icon' => 'fa fa-fw fa-phone',
            ],
            [
                'name' => 'Telefone',
                'type' => 'phone',
                'value' => '62984112233',
                'icon' => 'fa fa-fw fa-phone',
            ],
            [
                'name' => 'E-mail',
                'type' => 'email',
                'value' => 'exemplo@email.com',
                'icon' => 'fa fa-fw fa-envelope',
            ],
            [
                'name' => 'Endereço',
                'type' => 'address',
                'value' => 'Rua A bairro C',
                'icon' => 'fa fa-fw fa-map-marker',
            ]
        ]);
    }
}
