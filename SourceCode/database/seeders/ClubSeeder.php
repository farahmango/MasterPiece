<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
                    [
                'id'=>'1',
                'title'=>'Arabian Horse Center',
                'detail'=>'The Arabian Horse Club was established in 1982 by a group of horse enthusiasts lead by Hani Bisharat (Currently the Captain of the Jordanian Show Jumping Team). The Club has trained many of Jordanian riders, two of which qualified to the Olympics; HRH Princess Haya Bint Al-Hussein and Ibrahim Bisharat who have been qualified to the Olympics representing Jordan three times in a row.
                Other accomplishments done by the Club are training rider to be able to compete regionally and internationally.',
                'img'=>'club1.png',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3389.2846861686535!2d35.880118215113676!3d31.844467581263576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca95d68568273%3A0x56b474c8292bb0c0!2z2YbYp9iv2Yog2KfZhNis2YjYp9ivINin2YTYudix2KjZig!5e0!3m2!1sen!2sjo!4v1647080412277!5m2!1sen!2sjo',
                'contact'=>'07 9744 0059',
                'link'=>'https://ar-ar.facebook.com/TheArabianHorseClub/',
                ],
            [
                'id'=>'2',
                'title'=>'Forest Hill Equestrain',
                'detail'=>'Jordans Premier Equestrian Center,Two arena Olympic-standard Equestrian Center, with stables and banquet facility. Located 17 km from Amman, Jordan on the road to Jerash.',
                'img'=>'club2.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3377.669098656837!2d35.86238311512176!3d32.1592272811629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c9cd3a66aa887%3A0xb691c2f521cdc5b1!2sForest%20Hill%20Equestrian%20Center%20Amman!5e0!3m2!1sen!2sjo!4v1647080736739!5m2!1sen!2sjo',
                'contact'=>'07 7997 9700',
                'link'=>'https://business.facebook.com/ForestHillEquestrianCenter/?__xts__[0]=68.arcvuaep4l49x4rz',
                ],
            [
                'id'=>'3',
                'title'=>'Ghamadan Center For Training And Rehabiltation',
                'detail'=>'Horse Center',
                'img'=>'club3.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.887905172168!2d35.909953415112696!3d31.80080478127769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca8262eaa816b%3A0x6ef1d2e7566cc772!2z2YXYsdmD2LIg2LrZhdiv2KfZhiDZhNmE2YHYsdmI2LPZitip!5e0!3m2!1sen!2sjo!4v1647080842747!5m2!1sen!2sjo',
                'contact'=>'07 7066 6669',
                'link'=>'https://www.facebook.com/%D9%85%D8%B1%D9%83%D8%B2-%D8%BA%D9%85%D8%AF%D8%A7%D9%86-%D9%84%D9%84%D9%81%D8%B1%D9%88%D8%B3%D9%8A%D8%A9-1818996411473856/',
                ],
            [
                'id'=>'4',
                'title'=>'Al-Aryan Equestrain Center',
                'detail'=>'Al-Arian Equestrian Center is located on Madaba Road, behind the King Academy, south of Amman in the Hashemite Kingdom of Jordan. The center contains the largest horse and equestrian facilities, where the facilities vary between the Olympic stadium, and other training grounds, in addition to horse stables and a walkway, and to facilities equipped to receive competitions, guests, and trainees.
                The Equestrian Center offers equestrian training courses for horse riding, jumping and equestrianism for all ages and levels, in addition to its participation in local, regional and international tournaments, where there are a large number of horses of various origins and nationalities that participate in various championships such as jumping, camels, and endurance races.
                Our Mission: Al-Arian Equestrian Center aims to be a leader in horses in the Middle East.
                Vision Statement: Provide a world class equestrian experience and create champions for our community.',
                'img'=>'club4.png',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.6429718179047!2d35.825655884843606!3d31.752944881293303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151cac76e9a4d101%3A0x625a72080b4f48e6!2z2YXYsdmD2LIg2KfZhNi52LHZitin2YYg2YTZhNmB2LHZiNiz2YrYqQ!5e0!3m2!1sar!2sjo!4v1647080918271!5m2!1sar!2sjo',
                'contact'=>'07 9214 1516',
                'link'=>'https://www.facebook.com/Alaryanec',
                ],
            [
                'id'=>'5',
                'title'=>'Rum Equestrain Academy',
                'detail'=>'Horse riding centre',
                'img'=>'club5.png',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216868.17284639063!2d35.758404184321364!3d31.864044969549063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151caa3a9c8c231b%3A0x293b19272b6cd3e8!2sUmm%20Rummanah%2C%20Amman!5e0!3m2!1sen!2sjo!4v1647081183327!5m2!1sen!2sjo',
                'contact'=>'07 9945 0055',
                'link'=>'https://www.facebook.com/Rum.Equestrian.Academy',
                ],
            [
                'id'=>'6',
                'title'=>'The Academy and Stables of Al-Nashma for Ability and Endurance',
                'detail'=>'We provide all services from jockey training, care and accommodation, horse training and equipment for endurance races under the supervision of experienced trainers.',
                'img'=>'club6.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14903.08851197488!2d35.867780605002636!3d31.77135198359003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca9829b4b5989%3A0xbce793e2cfc43acb!2sAl%20Khadra&#39;%2C%20Amman!5e0!3m2!1sen!2sjo!4v1647081353990!5m2!1sen!2sjo',
                'contact'=>'07 7598 2326',
                'link'=>'https://www.facebook.com/al.nashama.endurance',
                ],
            [
                'id'=>'7',
                'title'=>'Alhmoud Stud',
                'detail'=>'Stadium, arena & sports venue',
                'img'=>'club7.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211.61863094930348!2d36.12806695843987!3d31.936523931186912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b698dcd43c61d%3A0x71cc58a3d2309449!2zQWxobW91ZCBzdHVkIC0g2YXYsdio2Lcg2KfZhNit2YXZiNiv!5e0!3m2!1sen!2sjo!4v1647081472328!5m2!1sen!2sjo',
                'contact'=>'',
                'link'=>'https://www.facebook.com/%D9%85%D8%B1%D8%A8%D8%B7-%D8%A7%D9%84%D8%AD%D9%85%D9%88%D8%AF-Alhmoud-stud-106303311251506',
                ],
            [
                'id'=>'8',
                'title'=>'Saifi Stables',
                'detail'=>'Founded in 1989, the Saifi Stables offer the best in horsemanship and horse care instruction for riders of all ages and standards. A member of the Royal Jordanian Equestrian Federation as well as the British Riding Club, the Saifi Stables offer private and group instruction in dressage, show jumping, cross-country jumping and leisure riding for all levels by highly qualified and experienced instructors.
                The stables are situated just outside Amman, about 15 km from the 7th circle, in a pleasant, family-oriented, multinational, countryside environment with well kept and professionally-run facilities',
                'img'=>'club8.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1646.3701295985659!2d35.87888436962644!3d31.84609696274048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca7d0db3b8bb1%3A0x54f22cf0bb270a7a!2sSaifi%20Stables!5e0!3m2!1sen!2sjo!4v1647081839709!5m2!1sen!2sjo',
                'contact'=>'0777442222',
                'link'=>'https://www.facebook.com/SaifiStables',
                ],
            [
                'id'=>'9',
                'title'=>'Alia Alassaf Academy',
                'detail'=>'Horse Center',
                'img'=>'club9.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.7014285138434!2d35.81926191511154!3d31.75134968129387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca7707f3cbf69%3A0x992418707d2e688e!2sThe%20Alia%20Alassaf%20Academy!5e0!3m2!1sen!2sjo!4v1647081910410!5m2!1sen!2sjo',
                'contact'=>'07 9555 3000',
                'link'=>'https://www.facebook.com/alia.alassaf.academy',
                ],
            [
                'id'=>'10',
                'title'=>'Hijazi Equestrian and Horse Riding Stables',
                'detail'=>'Horse Center',
                'img'=>'club10.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.552439083954!2d35.83795511511082!3d31.72811868130139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151cabb2821f4d97%3A0xe6f4d8c0db39152!2z2KfYs9i32KjZhNin2Kog2LnZhdin2LEg2K3YrNin2LLZiiDZhNmE2YHYsdmI2LPZitipINmI2LHZg9mI2Kgg2KfZhNiu2YrZhA!5e0!3m2!1sen!2sjo!4v1647082018614!5m2!1sen!2sjo',
                'contact'=>'07 9665 5826',
                'link'=>'https://www.facebook.com/hijazistables/',
                ],
            [
                'id'=>'11',
                'title'=>'Arabian knight horse club',
                'detail'=>'Horse riding, Horse riding training by professionals from entry level to professional level, Horses care, professional services & advises to horses owers.',
                'img'=>'club11.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.3728461618443!2d35.931802115113065!3d31.814837981273232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b57f2f38aba99%3A0xbdac62644f71c12b!2z2YbYp9iv2Yog2KfZhNmB2KfYsdizINin2YTYudix2KjZig!5e0!3m2!1sen!2sjo!4v1647082108786!5m2!1sen!2sjo',
                'contact'=>'0790272275',
                'link'=>'https://www.facebook.com/ArabianKnightClub/',
            ],
                [
                'id'=>'12',
                'title'=>'Rangers equestrian club',
                'detail'=>'Al Jawala Equestrian Club, indoor and outdoor sessions for families
                Horse riding for all ages
                Outdoor tracks and other events.',
                'img'=>'club12.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61263.69052482438!2d35.962125449407786!3d31.91495327619323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5d7fc805c9ed%3A0xc860a3737532f02e!2zUmFuZ2VycyBlcXVlc3RyaWFuIGNsdWIg2YbYp9iv2Yog2KfZhNis2YjYp9mE2Kkg2YTZhNmB2LHZiNiz2YrYqQ!5e0!3m2!1sen!2sjo!4v1647082190598!5m2!1sen!2sjo',
                'contact'=>'07 9101 0439',
                'link'=>'https://www.facebook.com/RANGERSEQUESTRIANCLUB/',
                    ],
                [
                'id'=>'13',
                'title'=>'Canaan stables for ability and endurance',
                'detail'=>'Endurance horses , horse riding center , buy and sell horses , renting rooms , horse treatment',
                'img'=>'club13.jpg',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.7397525480073!2d35.97536631510938!3d31.668339081320966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b55bf078d7b0f%3A0xaef5b047aa1a0b3b!2z2KfYs9i32KjZhNin2Kog2YPZhti52KfZhiDZhNmE2YLYr9ix2Kkg2YjYp9mE2KrYrdmF2YQ!5e0!3m2!1sen!2sjo!4v1647082380442!5m2!1sen!2sjo',
                'contact'=>'07 9728 9439',
                'link'=>'https://www.facebook.com/kanaanendurancestable/',
                    ],

                [
                'id'=>'14',
                'title'=>'Ghamdan to train people with special needs',
                'detail'=>'Successfully integrate children with autism into the local community by providing effective equine programs',
                'img'=>'club14.png',
                'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.1251869626526!2d35.90046431511254!3d31.7943379812798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca832c6120e8d%3A0xf65b45ee5d31a9b7!2z2YXYsdmD2LIg2LrZhdiv2KfZhiDZhNiq2K_YsdmK2Kgg2Ygg2KrYo9mH2YrZhCDYp9mE2K7ZitmE!5e0!3m2!1sen!2sjo!4v1647082526053!5m2!1sen!2sjo',
                'contact'=>'07 7066 6669',
                'link'=>'https://www.facebook.com/%D8%BA%D9%85%D8%AF%D8%A7%D9%86-%D9%84%D8%AA%D8%AF%D8%B1%D9%8A%D8%A8-%D8%B0%D9%88%D9%8A-%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D8%AC%D8%A7%D8%AA-%D8%A7%D9%84%D8%AE%D8%A7%D8%B5%D8%A9-109864658196455/',
                        ],

        ]);
    }


}
