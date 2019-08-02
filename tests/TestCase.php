<?php

namespace Tests;

use App\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function adminUserSigningIn() 
    {
        $user = $this->createUser('admin');
        $user = Passport::actingAs($user);

        return $user;
    }

    protected function pengawasUserSigningIn() 
    {
        $user = $this->createUser('pengawas');
        $user = Passport::actingAs($user);

        return $user;
    }

    protected function createUser($peran)
    {
        $peran = ['peran' => $peran];
        $user = factory(User::class)->create($peran);
        return $user;
    }

}
