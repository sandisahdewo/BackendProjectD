<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Petugas;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Petugas::truncate();

        $user = \DB::table('users')
                ->insertGetId([
                    'username'  => 'sandiwo',
                    'password'  => bcrypt('sandiwo'),
                    'peran'     => 'fuelman',
                    'status'    => 'aktif'
                ]);

        $pegawai = \DB::table('petugas')
                    ->insert([
                        'user_id'   => $user,
                        'nama'      => 'Sandiwo',
                        'email'     => 'email@sandiwo.com',
                        'no_hp'     => '08811778946',
                        'tanggal_lahir' => '1990-10-01',
                        'created_by'    => $user
                    ]);

        \Artisan::class('passport:install');
    }
}
