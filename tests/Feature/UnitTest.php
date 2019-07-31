<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Unit;

class UnitTest extends TestCase
{
    protected $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU2NWQzMTcyZTdiMDFjMzQ3M2EzYWM0YzBiYTZlNzE4M2VjYTAwMzI3NDc5YTU1NDhjYzIzZGIwYzcwZDNkYzNhY2UzNTg2ZDNjYzg1ZTlkIn0.eyJhdWQiOiIxIiwianRpIjoiZTY1ZDMxNzJlN2IwMWMzNDczYTNhYzRjMGJhNmU3MTgzZWNhMDAzMjc0NzlhNTU0OGNjMjNkYjBjNzBkM2RjM2FjZTM1ODZkM2NjODVlOWQiLCJpYXQiOjE1NjQ1ODY1NjIsIm5iZiI6MTU2NDU4NjU2MiwiZXhwIjoxNTk2MjA4OTYyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Jt3sIEp-XjywwZ4ZMa8D3T0yuxGIdH_rN1eATOszazQzkIsSdr-cfpUyu17HlJE2PzahyHi93rg_UA4ZG-rKtnbWO1njW4vUgzkw-jc46_DX7u2BarzUgmftWWXi-MfIbtIvX_jzVawgKc-62ThM44AgLXOnVhuJJUyIQ6VF-S3VrPJHYLzxpppcsVJMlmboEgghYeCWEQa8DF4y_cV2sbWSNpgFA7Dn64VqwBBNFJRM1tQuoqDlhlwsr22_XPJncDOWyeNE9YrM1leNVshfgb8mD1ywsRO0aIc4gk_ja1CvwJ0Rr_bi9MoGqjrz8daeWBlTv2EezEs4mg7axDHrgz9qDxGSEs_-gPdjIKPrEIRkIEufZln9SnKjo8OJctinSRgiB00BUrtI2QD1VpD3MvvoDyoCBO_NMNIgQKnFXKEZe3Wu9aL8Xdr_iKSJ7stFL0br6vegXPqlG3-1GiS06f_BMSvlAEZ9GVSWcFEOjqoZnXe5qmzVxHqovMGeChwmeXKQExTZ3U5a34SGa1XROWr_Ep8TwA8cc85sZDgQzXDroZYt90f6o-BmJXVxCbe4Ob2Ykpp7_8nJHdf3Iiy_6Lwat3xUnrY9J3XEy8r4Da29p08IBrNQlNx3zUXFxgfcNVIYLsMolLPoxeI3s4sHS_s_XtAWNma5sbNbECkkxSY';

    public function testGetUnitWithoutToken()
    {
        $this->json('GET', 'api/unit/get')
            ->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.'
            ]);
    }

    public function testGetUnitWithToken()
    {
        $response = $this->withHeaders([
                'Authorization' => $this->token
            ])->json('GET', 'api/unit/get');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        [
                            'id', 
                            'kode_unit', 
                            'no_polisi',
                            'tipe_unit',
                            'jatah_solar'
                        ]
                    ],
                ]);
    }

    public function testFindExistUnitById()
    {
        $unit = factory(Unit::class)->create([
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ]);

        $header = ['Authorization' => $this->token];

        $this->withHeaders($header)
            ->json('GET', '/api/unit/find/'.$unit->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'id', 
                'kode_unit', 
                'no_polisi',
                'tipe_unit',
                'jatah_solar'
            ]);
    }

    public function testFindNotExistUnitById()
    {
        $id = 13565;

        $header = ['Authorization' => $this->token];

        $this->withHeaders($header)
            ->json('GET', '/api/unit/find/'.$id)
            ->assertStatus(200)
            ->assertJson([
                'success' => false,
            ]);
    }

    public function testStoreUnitWithData()
    {
        $data = [
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ];

        $header = ['Authorization' => $this->token];

        $this->json('POST', '/api/unit/store', $data, $header)
            ->assertStatus(200)
            ->assertJson([
                'success' => true
            ]);

        $this->assertDatabaseHas('unit', $data);
    }

    public function testStoreUnitWithDuplicateData()
    {
        $data = [
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ];

        $header = ['Authorization' => $this->token];

        $this->json('POST', '/api/unit/store', $data, $header)
            ->assertStatus(200)
            ->assertJson([
                'success' => true
            ]);

        $this->assertDatabaseHas('unit', $data);

        $this->json('POST', '/api/unit/store', $data, $header)
            ->assertStatus(422)
            ->assertJson([
                'message' => 'The given data was invalid.',
            ]);

    }

    public function testStoreUnitWithoutData()
    {
        $data = [
            
        ];

        $header = ['Authorization' => $this->token];

        $this->json('POST', '/api/unit/store', $data, $header)
            ->assertStatus(422)
            ->assertJson([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'kode_unit' => ['The kode unit field is required.'],
                    'no_polisi' => ['The no polisi field is required.'],
                ]
            ]);
    }

    public function testUpdateUnitWithData()
    {
        $unit = factory(Unit::class)->create([
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ]);

        $newData = [
            'kode_unit' => 'TEST-UPD'.$unit->id,
            'no_polisi' => "AG-UPD".$unit->id."-TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ];

        $header = ['Authorization' => $this->token];

        $this->json('POST', '/api/unit/update/'.$unit->id, $newData, $header)
            ->assertStatus(200)
            ->assertJson([
                'success' => true
            ]);

        $this->assertDatabaseMissing('unit', $unit->toArray());
        $this->assertDatabaseHas('unit', $newData);
    }

    public function testUpdateUnitWithExistsData()
    {
        $unit = factory(Unit::class)->create([
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ]);

        $unit2 = factory(Unit::class)->create([
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ]);

        $header = ['Authorization' => $this->token];

        $this->json('POST', '/api/unit/update/'.$unit->id, $unit2->toArray(), $header)
            ->assertStatus(422)
            ->assertJson([
                'message' => 'The given data was invalid.',
            ]);

        $this->assertDatabaseHas('unit', $unit->toArray());
    }

    public function testDeleteUnit()
    {
        $unit = factory(Unit::class)->create([
            'kode_unit' => 'TEST-'.rand(100, 999),
            'no_polisi' => "AG".rand(1000, 9999)."TST",
            'tipe_unit' => 'Strada Extreme '. rand(100, 999),
            'jatah_solar' => rand(10, 100)
        ]);

        $header = ['Authorization' => $this->token];

        $this->json('DELETE', '/api/unit/destroy/'.$unit->id, [], $header)
            ->assertStatus(200)
            ->assertJson([
                'success' => true
            ]);

        $this->assertDatabaseMissing('unit', $unit->toArray());
    }
    
}
