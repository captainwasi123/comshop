<?php

namespace App\Models\Driver;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver\driver;


class driverDocument extends Model
{
    use HasFactory;

    protected $table ='tbl_driver_document_info';
    public $timestamps = false;

    public static function addDocumentDriver(array $data){
        
        $dd = new driverDocument;
        $dd->driver_id = driver::where('id', $d_id)->first();   
        $dd->card_status = '1';
        $dd->save();

        return $dd->id;
    }

   public static function updateDocumentDriver($idd, array $data){
        
        $dd = driverDocument::find($idd);
        $u= driver::find( $dd->driver_id);
      
        $dd->driver_id = $u;
        $dd->card_status = '1';
        $dd->save();

        return $dd->id;
    }


   

}
