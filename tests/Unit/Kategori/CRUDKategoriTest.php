<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Validator;
use App\Kategori;

class KategoriRule {
  public static $rules = [
    'kategori' => 'required'
  ];
}

class CRUDKategoriTest extends TestCase
{
    use RefreshDatabase;

    public function testCreate()
    {
      $val = Validator::make([
          'kategori' => 'Islam'
      ],KategoriRule::$rules);

      if($val->passes()){
        $kategori = Kategori::updateOrCreate(
          ['id' => 0],
          [
            'kategori'        => 'Islam',
            'created_by'      => 1
          ]
        );
        $status = 1;
      }
      $this->assertDatabaseHas('kategoris',[
        'kategori' => 'Islam'
      ]);
    }

}
