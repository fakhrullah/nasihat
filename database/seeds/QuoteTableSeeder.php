<?php

use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'text' => 'Dengan nama Allah yang maha pemurah lagi maha mengasihani. Segala puji bagi Allah tuhan sekalian alam.'
                . ' Yang maha pemurah lagi maha mengasihani. Yang menguasai hari pembalasan. Tuhan yang aku sembah dan tempat aku memohon pertolongan. '
                . 'Tunjukkanlah aku jalan yang lurus. Iaitu jalan orang2 yang engkau berikan nikmat kepada mereka dan bukanlah jalan orang2 yang engkau murkai, dan bukan juga orang yang sesat.',
                'source' => 'Surah Al-Fatihah : 1~7',
                'show_at' => \Carbon::create(2015, 8, 8)
            ],
            [
                'text' => 'Tidak Aku ciptakan jin dan Manusia melainkan hanya untuk beribadah kepada-Ku.',
                'source' => 'Surah Adh-Dhariyat : 56',
                'show_at' => \Carbon::create(2015, 8, 9)
            ],
            [
                'text' => 'Dan sesungguhnya Kami telah mengutus Rasul pada setiap umat (untuk menyeru), "Beribadahlah kepada Allah dan jauhilah Taghut"',
                'source' => 'Surah An-Nahl : 36',
                'show_at' => \Carbon::create(2015, 8, 10)
            ],
            [
                'text' => 'Janganlah kamu menjadikan bersama Allah sembahan yang lain, agar kamu tidak menjadi terhina lagi tercela',
                'source' => 'Surah Al Isra : 22',
                'show_at' => \Carbon::create(2015, 8, 11)
            ],
            [
                'text' => 'Sesungguhnya segala amalan itu bergantung pada niat, '
                . 'dan sesungguhnya tiap-tiap orang (akan memperoleh balasan dari) apa yang diniatkannya. '
                . 'Barangsiapa hijrahnya menuju (keridhaan) Allah dan rasul-Nya, maka hijrahnya itu ke arah (keredaan) Allah dan rasul-Nya. '
                . 'Barangsiapa hijrahnya kerana (harta atau kemegahan) dunia yang dia harapkan, atau karena seorang wanita yang ingin dinikahinya, '
                . 'maka hijrahnya itu ke arah yang ditujunya.',
                'source' => 'HR Bukhari',
                'show_at' => \Carbon::create(2015, 8, 12)
            ],
            [
                'text' => 'Islam adalah engkau bersaksi bahwa tidak ada tuhan selain Allah, dan bahwa Nabi Muhammad adalah utusan Allah, '
                . 'engkau mendirikan solat, menunaikan zakat, puasa Ramadhan dan pergi haji jika mampu.',
                'source' => 'HR Muslim',
                'show_at' => \Carbon::create(2015, 8, 13)
            ],
            [
                'text' => 'Ihsan adalah engkau beribadah kepada Allah seakan-akan engkau melihatnya, jika engkau tidak melihatnya maka Dia melihat engkau',
                'source' => 'HR Muslim',
                'show_at' => \Carbon::create(2015, 8, 14)
            ],
            [
                'text' => 'Sesungguhnya halal itu jelas dan yang haram itu jelas. Di antara keduanya terdapat perkara-perkara yang syubhah (samar-samar)'
                . ' yang tidak diketahui oleh orang banyak. Maka siapa meninggalkan syubhah maka dia telah menyelamatkan agama dan kehormatannya. '
                . 'Dan siapa yang terjerumus dalam perkara syubhah, maka akan terjerumus dalam perkara yang diharamkan.',
                'source' => 'HR Bukhari dan Muslim',
                'show_at' => \Carbon::create(2015, 8, 15)
            ],
            [
                'text' => 'Sesungguhnya Allah tidak akan mengampuni dosa syirik, dan Dia mengampuni segala dosa yang selain dari (syirik) itu, bagi siapa saja yang dikehendakiNya',
                'source' => 'Surah An Nisa’ : 48',
                'show_at' => \Carbon::create(2015, 8, 16)
            ],
            [
                'text' => 'Sesuatu yang paling aku khuatirkan dari kamu sekalian adalah perbuatan syirik kecil, kemudian beliau ditanya tentang itu, dan beliaupun menjawab : yaitu riya',
                'source' => 'HR AHmad, Thabrani, Abi Dawud',
                'show_at' => \Carbon::create(2015, 8, 17)
            ],
            [
                'text' => 'Barang siapa yang mati dalam keadaan menyembah sembahan selain Allah, maka  masuklah ia kedalam neraka',
                'source' => 'HR Bukhari',
                'show_at' => \Carbon::create(2015, 8, 18)
            ],
            [
                'text' => 'Berjayalah orang2 yang beriman. Iaitu mereka yang khusyuk dalam solatnya. Dan mereka menjauhi pebuatan dan perkataan yang sia2. '
                . 'Dan mereka yang menunaikan zakat. Dan mereka yang menjaga kehormatan mereka.',
                'source' => 'Surah Al Mukminun : 1~5',
                'show_at' => \Carbon::create(2015, 8, 19)
            ],
            [
                'text' => 'Barang siapa yang mengucapkan "la ilaha illa Allah", dan mengingkari sembahan selain Allah, maka haramlah harta dan darahnya, adapun perhitungannya adalah terserah kepada Allah',
                'source' => 'HR Muslim',
                'show_at' => \Carbon::create(2015, 8, 20)
            ],
            [
                'text' => 'Tidaklah kalian diperintah untuk beribadat kepada Allah melainkan dengan ikhlas',
                'source' => 'Surah Al Bayyinah : 5',
                'show_at' => \Carbon::create(2015, 8, 21)
            ],
            [
                'text' => 'Sesungguhnya yang yang takut kepada Allah di antara hambaNya hanyalah orang yang berilmu',
                'source' => 'Surah Fathir : 28',
                'show_at' => \Carbon::create(2015, 8, 22)
            ],
            [
                'text' => 'Menuntut ilmu (agama) itu wajib atas setiap Muslim.',
                'source' => 'HR Ibnu Majah',
                'show_at' => \Carbon::create(2015, 8, 23)
            ],
            [
                'text' => 'Barangsiapa yang menyerupai suatu kaum, maka dia termasuk di kalangan mereka.',
                'source' => 'HR Abu Daud',
                'source_link'=>'http://www.drfathulbari.com/2014/02/budayakan-kasih-sayang-mengikut-cara.html',
                'show_at' => \Carbon::create(2015, 8, 24)
            ],
            [
                'text' => 'Oleh itu ingatlah kamu kepadaKu (dengan mematuhi hukum-hukum dan undang-undangKu), '
                . 'supaya Aku membalas kamu dengan kebaikan: dan bersyukurlah kamu kepada Aku dan janganlah kamu kufur (akan nikmatKu).',
                'source' => 'Surah Al-Baqarah : 152',
                'show_at' => \Carbon::create(2015, 8, 25)
            ],
            [
                'text' => 'Wahai orang-orang yang beriman! (untuk bersyukur kepada Allah) ingatlah serta sebutlah nama Allah dengan ingatan dan sebutan yang sebanyak-banyaknya. '
                . 'Dan bertasbihlah kamu kepadaNya pada waktu pagi dan petang.',
                'source' => 'Surah Al Ahzab : 41=42',
                'show_at' => \Carbon::create(2015, 8, 26)
            ],
            [
                'text' => 'Orang-orang yang beriman dan tenang tenteram hati mereka dengan zikrullah. Ketahuilah! Dengan zikrullah itu, tenang tenteramlah hati manusia.',
                'source' => 'Surah Ar Rad : 28',
                'show_at' => \Carbon::create(2015, 8, 27)
            ],
            [
                'text' => 'Memadai seseorang itu dikatakan pendusta apabila dia menyampaikan apa saja yang dia dengar.',
                'source' => 'HR Muslim',
                'show_at' => \Carbon::create(2015, 8, 28)
            ],
            [
                'text' => 'Janganlah kamu mengikuti apa yang kamu tidak mempunyai pengetahuan tentangnya. Sesungguhnya pendengaran, penglihatan dan hati, semua itu akan diminta pertanggung jawabannya.',
                'source' => 'Surah Al Isra : 36',
                'show_at' => \Carbon::create(2015, 8, 29)
            ],
            [
                'text' => 'Seorang mukmin dengan mukmin yang lain ibarat satu binaan yang saling mengukuhkan antara satu dengan yang lain.',
                'source' => 'HR Bukhari dan Muslim',
                'show_at' => \Carbon::create(2015, 8, 30)
            ],
            [
                'text' => 'Jika kamu berselisih tentang sesuatu, kembalikanlah ia kepada Allah dan Rasul (Al-Quran dan Sunnah), jika kamu benar-benar beriman kepada Allah dan hari kemudian. Demikian itu lebih utama dan lebih baik akibatnya.',
                'source' => 'Surah An Nisa : 59',
                'show_at' => \Carbon::create(2015, 8, 31)
            ]
        ];
        
        for( $x = 0; $x < count($data) ; $x++){
            $quote = new App\Model\Quote();
            $quote->text = $data[$x]['text'];
            $quote->source = $data[$x]['source'];
            $quote->show_at = $data[$x]['show_at'];
            if(isset($data[$x]['source_link'])) {
                $quote->source_link = $data[$x]['source_link'];
            }
            $quote->save();
        }
    }
}
