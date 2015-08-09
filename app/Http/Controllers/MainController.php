<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotes = [
            '08082015'=>['text'=>'Dengan nama Allah yang maha pemurah lagi maha mengasihani. Segala puji bagi Allah tuhan sekalian alam.'
                . ' Yang maha pemurah lagi maha mengasihani. Yang menguasai hari pembalasan. Tuhan yang aku sembah dan tempat aku memohon pertolongan. '
                . 'Tunjukkanlah aku jalan yang lurus. Iaitu jalan orang2 yang engkau berikan nikmat kepada mereka dan bukanlah jalan orang2 yang engkau murkai, dan bukan juga orang yang sesat.',
                                        'src'=>'Surah Al-Fatihah : 1~7'],
            '09082015'=>['text'=>'Tidak Aku ciptakan jin dan Manusia melainkan hanya untuk beribadah kepada-Ku.',
                                        'src'=>'Surah Adh-Dhariyat : 56'],
            '10082015'=>['text'=>'Dan sesungguhnya Kami telah mengutus Rasul pada setiap umat (untuk menyeru), "Beribadahlah kepada Allah dan jauhilah Taghut"',
                                        'src'=>'Surah An-Nahl : 36'],
            '11082015'=>['text'=>'Janganlah kamu menjadikan bersama Allah sembahan yang lain, agar kamu tidak menjadi terhina lagi tercela',
                                        'src'=>'Surah Al  Isra : 22'],
            '12082015'=>['text'=>'Sesungguhnya segala amalan itu bergantung pada niat, '
                . 'dan sesungguhnya tiap-tiap orang (akan memperoleh balasan dari) apa yang diniatkannya. '
                . 'Barangsiapa hijrahnya menuju (keridhaan) Allah dan rasul-Nya, maka hijrahnya itu ke arah (keredaan) Allah dan rasul-Nya. '
                . 'Barangsiapa hijrahnya kerana (harta atau kemegahan) dunia yang dia harapkan, atau karena seorang wanita yang ingin dinikahinya, '
                . 'maka hijrahnya itu ke arah yang ditujunya.',
                                        'src'=>'HR Bukhari'],
            '13082015'=>['text'=>'Islam adalah engkau bersaksi bahwa tidak ada tuhan selain Allah, dan bahwa Nabi Muhammad adalah utusan Allah, '
                . 'engkau mendirikan solat, menunaikan zakat, puasa Ramadhan dan pergi haji jika mampu',
                                        'src'=>'HR Muslim'],
            '14082015'=>['text'=>'Ihsan adalah engkau beribadah kepada Allah seakan-akan engkau melihatnya, jika engkau tidak melihatnya maka Dia melihat engkau',
                                        'src'=>'HR Muslim'],
            '15082015'=>['text'=>'Sesungguhnya halal itu jelas dan yang haram itu jelas. Di antara keduanya terdapat perkara-perkara yang syubhah (samar-samar)'
                . ' yang tidak diketahui oleh orang banyak. Maka siapa meninggalkan syubhah maka dia telah menyelamatkan agama dan kehormatannya. '
                . 'Dan siapa yang terjerumus dalam perkara syubhah, maka akan terjerumus dalam perkara yang diharamkan.',
                                        'src'=>'HR Bukhari dan Muslim']
            
            ];
        
        // backgrounds source
        // https://pixabay.com/en/users/Unsplash-242387/
        
        $title = "NASIHAT";
        $today= \Carbon::today();
        
        // failsafe if date not available in array
        if($today >  \Carbon::create(2015, 8, 15)){$today=\Carbon::create(2015, 8, 11);}
        else if($today <  \Carbon::create(2015, 8, 8)){$today=\Carbon::create(2015, 8, 13);}
        
        $day = ($today->day<10)?"0".$today->day:$today->day;
        $month = ($today->month<10)?"0".$today->month:$today->month;
        $year = $today->year;
        $dataKey = $day.$month.$year;
        $quote = $quotes[$dataKey];
        $background = $dataKey.'.jpg';
        
        return view('main', compact('title','quote','background'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
