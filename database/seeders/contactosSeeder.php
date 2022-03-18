<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\contactosAlcaldiaModel;
use Illuminate\Support\Facades\DB;

class contactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
  
  {
    $Alcaldia = array(array(1,'AZCAPOTZALCO'),
                      array(2,'COYOACAN'),
                      array(3,'CUAJIMALPA DE MORELOS'),
                      array(4,'GUSTAVO A. MADERO'),
                      array(5,'IZTACALCO'),
                      array(6,'IZTAPALAPA'),
                      array(7,'LA MAGDALENA CONTRERAS'),
                      array(8,'MILPA ALTA'),
                      array(9,'ALVARO OBREGON'),
                      array(10,'TLAHUAC'),
                      array(11,'TLALPAN'),
                      array(12,'XOCHIMILCO'),
                      array(13,'BENITO JUAREZ'),
                      array(14,'CUAUHTEMOC'),
                      array(15,'MIGUEL HIDALGO'),
                      array(16,'VENUSTIANO CARRANZA')
                  );

    foreach($Alcaldia as $valor){
      DB::table('contactos_alcaldia')->insert(  //1
        array(
        'id_alcaldia'=>$valor[0],
        'alcaldia'=>$valor[1],
      ));
    }
    

  }
}