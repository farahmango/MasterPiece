<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
    [
        'id'=>'1',
        'title'=>'Cavalor Jordan',
        'detail'=>'Cavalor Premium Feed & Supplements',
        'img'=>'provider1.png',
        'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3389.3455237336907!2d35.887685015113725!3d31.84281168126416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca724faac4067%3A0x22a05b29838de855!2sCavalor%20jordan!5e0!3m2!1sen!2sjo!4v1647082881713!5m2!1sen!2sjo',
        'contact'=>'07 9512 9053',
        'link'=>'https://www.facebook.com/cocavalor',
            ],

    [
        'id'=>'2',
        'title'=>'Horse House',
        'detail'=>'A specialized page for the sale of Arabian horse supplies, jumping horses, marathons and all kinds of horses
        Address: Al-Yadouda, opposite the zoo, next to the Shamilah Pharmacy.',
        'img'=>'provider2.jpg',
        'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.058316184341!2d35.90886341511324!3d31.823404881270424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca9a9a2767833%3A0xac279b1595c528a5!2sHorse%20House!5e0!3m2!1sen!2sjo!4v1647086020787!5m2!1sen!2sjo',
        'contact'=>'07 9564 7430',
        'link'=>'https://www.facebook.com/Horse-House-109615061163149',
            ],
    [
        'id'=>'3',
        'title'=>'Bisonte Saddlery',
        'detail'=>'Outdoor & sporting goods company.',
        'img'=>'provider3.jpg',
        'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.097761780563!2d35.86651267306646!3d31.958244422910113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1015808d077%3A0x23b78e67dc203825!2sBisonte%20Saddlery!5e0!3m2!1sen!2sjo!4v1647086133095!5m2!1sen!2sjo',
        'contact'=>'07 9566 6065',
        'link'=>'https://www.facebook.com/Bisonte-Saddlery-366376600166852/',
            ],
    [
        'id'=>'4',
        'title'=>'Al Asalah For Equestrian Supplies & Feed',
        'detail'=>'Equestrian Store in Amman.',
        'img'=>'provider4.png',
        'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3389.9765000503503!2d35.909572315158144!3d31.825632981269703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca801634f819f%3A0x8eb386307174bdef!2sAl%20Asalah%20For%20Equestrian%20Supplies%20%26%20Feed!5e0!3m2!1sen!2sjo!4v1647086211797!5m2!1sen!2sjo',
        'contact'=>'07 7999 9152',
        'link'=>'https://al-asalah-for-equestrian-supplies-feed.business.site/',
            ],
    ]);
}
}
