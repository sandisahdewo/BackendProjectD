<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\PitstopSarana;

class PitstopSaranaTest extends TestCase
{
    /** @test */
    public function pengawasGetAllData()
    {
        $this->pengawasUserSigningIn();

        $this->getJson('api/pitstop-sarana')
            ->assertStatus(200);
    }

    /** @test */
    public function pengawasFindData()
    {
        $this->pengawasUserSigningIn();

        $pitstopSarana = factory(PitstopSarana::class)->create();

        $this->getJson('api/pitstop-sarana/find/'.$pitstopSarana->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',           
                'nomor',         
                'line',          
                'driver',        
                'tanggal',      
                'tanggal_view',  
                'fuelman',       
                'shift',        
                'shift_view',    
                'whs_number',    
                'location',      
                'status',       
                'total_qty_solar',
                'selisih_flow_meter',
                'detail'
            ]);
    }
}
