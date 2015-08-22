<?php

use Illuminate\Database\Seeder;

class BackgroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startDay = Carbon::create(2015,8,7);
        $viewDay = $startDay;
        for($i = 1 ; $i < count(File::allFiles(public_path().'/images/')) ; $i++){
            
            $viewDay = $viewDay->addDay();
            $filename = $viewDay->format('dmY') . '.jpg';
            
            $background = new App\Model\Background();
            switch($filename){
                case '02092015.jpg':
                case '05092015.jpg':
                case '06092015.jpg':
                case '10092015.jpg':
                case '17082015.jpg':
                case '16082015.jpg':
                case '19082015.jpg':
                case '21082015.jpg':
                case '24082015.jpg':
                case '25082015.jpg':
                case '27082015.jpg':
                case '29082015.jpg':
                case '30082015.jpg':
                case '31082015.jpg':
                    $background->uploader = 'fakhrullah';
                    $background->link = 'http://fajarhac.com';
                    break;
                default:
                    $background->uploader = 'pixabay';
                    $background->link = 'https://pixabay.com';
            }
            $background->src = 'images/'.$filename;
            $background->show_at = $viewDay;
            $background->save();
            
        }
    }
}
