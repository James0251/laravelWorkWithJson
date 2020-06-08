<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeatureCollectionController extends Controller
{
    public function index(){
        $arr = [
            'type' => 'FeatureCollection',
            'features' => []
        ];
        $dates = DB::table('feature_collections')->get();
        foreach ($dates as $data){
            $coordinates = explode(',', $data->coordinates);
            $arr1 = [
                'type' => 'Feature','id' => $data->id,
                'geometry' => ['type' => 'Point','coordinates' => array_map('floatval', $coordinates)],
                'properties' => ['balloonContent' => $data->balloonContent,'clusterCaption' => $data->clusterCaption,'hintContent' => $data->hintContent,'iconCaption' => $data->iconCaption],
                'options' => ['preset' => $data->preset],
            ];
            $array[] = $arr1;
        }
        $arr['features'] = $array;
        $json = json_encode($arr, JSON_UNESCAPED_UNICODE);

        $file = fopen('data.json', 'w');
        // и записываем туда данные
        $write = fwrite($file,$json);
        // проверяем успешность выполнения операции
        if($write) return "Данные успешно записаны!<br>";
        else return "Не удалось записать данные!<br>";
        //закрываем файл
        fclose($file);
    }
}
