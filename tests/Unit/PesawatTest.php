<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Pesawat;

class PesawatTest extends TestCase
{
    use RefreshDatabase;

    /** @test create*/
    public function it_can_create_a_pesawat(): void
    {
        // Arrange: Create a new pesawat record with required attributes
        Pesawat::create([
            'code' => 'Cessna 172',
            'produsen' => 'Cessna',
            'tahun' => 1956
        ]);

        // Act: Refresh the pesawat instance to get the latest data from the database
        // $pesawat->refresh();

        // Assert: Check that the new record exists in the database
        $this->assertDatabaseHas('pesawat', [
            'code' => 'Cessna 172',
            'produsen' => 'Cessna',
            'tahun' => 1956,
        ]);
    }

    /** @test read*/
    public function it_can_read_a_pesawat()
    {
        $pesawat = Pesawat::create([
            'code' => 'Boeing 102',
            'produsen' => 'Boeing',
            'tahun' => 1956,
        ]);

        $fetchedPesawat = Pesawat::find($pesawat->id);

        $this->assertEquals('Boeing 102', $fetchedPesawat->code);
        $this->assertEquals('Boeing', $fetchedPesawat->produsen);
        $this->assertEquals(1956, $fetchedPesawat->tahun);
    }

    // /** @test */
    // public function it_can_update_a_pesawat()
    // {
    //     $pesawat = Pesawat::create([
    //         'code' => 'Hung 102',
    //         'produsen' => 'Hung',
    //         'tahun' => 1956,
    //         'created_by' => 'unittest'
    //     ]);

    //     $pesawat->update([
    //         'code' => 'Boeing 112',
    //         'produsen' => 'Boeing',
    //         'tahun' => 1956,
    //         'created_by' => 'unittest'
    //     ]);

    //     $this->assertDatabaseHas('pesawat', [
    //         'code' => 'Hung 102',
    //         'produsen' => 'Hung',
    //         'tahun' => 1956,
    //         'created_by' => 'unittest'
    //     ]);
    // }

    // /** @test */
    // public function it_can_delete_a_pesawat()
    // {
    //     $pesawat = Pesawat::create([
    //         'code' => 'Hung 102',
    //         'produsen' => 'Hung',
    //         'tahun' => 1956,
    //         'created_by' => 'unittest'
    //     ]);

    //     $pesawat->delete();

    //     $this->assertDatabaseMissing('pesawat', [
    //         'code' => 'Hung 102',
    //         'produsen' => 'Hung',
    //         'tahun' => 1956,
    //         'created_by' => 'unittest'
    //     ]);
    // }
}
