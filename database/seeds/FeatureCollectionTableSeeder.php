<?php

use Illuminate\Database\Seeder;

class FeatureCollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feature_collections')->insert(array(
            'coordinates' => '55.831903, 37.411961',
            'balloonContent' => 'Аптека',
            'clusterCaption' => 'Аптека',
            'hintContent' => 'Аптека',
            'iconCaption' => 'Аптека',
            'preset' => 'islands#blueCircleDotIconWithCaption'
        ));
        DB::table('feature_collections')->insert(array(
            'coordinates' => '55.87417, 37.669838',
            'balloonContent' => 'Школа',
            'clusterCaption' => 'Школа',
            'hintContent' => 'Школа',
            'iconCaption' => 'Школа',
            'preset' => 'islands#greenCircleDotIconWithCaption'
        ));
        DB::table('feature_collections')->insert(array(
            'coordinates' => '55.698261, 37.730838',
            'balloonContent' => 'Больница',
            'clusterCaption' => 'Больница',
            'hintContent' => 'Больница',
            'iconCaption' => 'Больница',
            'preset' => 'islands#blackCircleDotIconWithCaption'
        ));
        DB::table('feature_collections')->insert(array(
            'coordinates' => '55.664352, 37.689397',
            'balloonContent' => 'Тестер',
            'clusterCaption' => 'Тестер',
            'hintContent' => 'Тестер',
            'iconCaption' => 'Тестер',
            'preset' => 'islands#yellowCircleDotIconWithCaption'
        ));
        DB::table('feature_collections')->insert(array(
            'coordinates' => '55.774838, 37.415725',
            'balloonContent' => 'Бар',
            'clusterCaption' => 'Бар',
            'hintContent' => 'Бар',
            'iconCaption' => 'Бар',
            'preset' => 'islands#violetCircleDotIconWithCaption'
        ));
    }
}
