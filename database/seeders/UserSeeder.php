<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create ([
        	'name'=> 'admin',
        	'email'=> 'admin@gmail.com',
        	'password'=> bcrypt('12345678')

        ]);
        
        $admin->assignRole('admin');


		$guru = User::create ([
        	'name'=> 'Siti Robiah Adawiyah, S.Pd',
        	'email'=> 'sitirobiah1970@gmail.com',
            'image'=>'10',
        	'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Deni Setiawan, S.ST',
            'email'=> 'octoradenis@gmail.com',
            'image'=>'2',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $management = User::create ([
            'name'=> 'Hamdan Firmansyah, S.Pd',
            'email'=> 'odney04@gmail.com',
            'image'=>'4',
            'password'=> bcrypt('12345678')

        ]);
        $management->assignRole('management');

        $guru = User::create ([
            'name'=> 'Riana Budianti, S.Sos',
            'email'=> 'yanabudiyanti72@gmail.com',
            'image'=>'32',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Arie Martanto, ST',
            'email'=> 'default1@gmail.com',
            'image'=>'33',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Annisa Komalasari, S.Pd',
            'email'=> 'annisakomalasari02@gmail.com',
            'image'=>'17',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Leni Maulani, S.Pd',
            'email'=> 'nielenimaulani@gmail.com',
            'image'=>'16',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru'); 

        $guru = User::create ([
            'name'=> "Siti Sa'adah, S.Pdi",
            'email'=> 'ssaada773@gmail.com',
            'image'=>'15',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru'); 

        $guru = User::create ([
            'name'=> 'Dede Suryana, A,Md',
            'email'=> 'desurya52@gmail.com',
            'image'=>'8',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru'); 

        $guru = User::create ([
            'name'=> 'Rosmelia, S.Pd',
            'email'=> 'rose.meliamels@gmail.com',
            'image'=>'13',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

         $guru = User::create ([
            'name'=> 'Essa Amalia Khairina, S.Pd',
            'email'=> 'Sirius_essa@yahoo.co.id',
            'image'=>'14',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Agfie Nurani Hanifah, M.Pd',
            'email'=> 'agfienuranih.anh@gmail.com',
            'image'=>'12',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Dewi Astri Indriani,, S.Pd',
            'email'=> 'indrianidewiastri@gmail.com',
            'image'=>'11',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');
        
        $guru = User::create ([
            'name'=> 'Dyah Wiwit Cahyaningsih, S.Pd',
            'email'=> 'dyahwiwitcahyaningsih@gmail.com',
            'image'=>'6',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Mulpiyanti',
            'email'=> 'mulpiyanti48703@gmail.com ',
            'image'=>'28',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Raynaldi Syahputra Nonci, S.Pd',
            'email'=> 'raynaldisahputranonci@gmail.com',
            'image'=>'9',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Rizki Reynaldi Erizon, S.Hum',
            'email'=> 'default2@gmail.com',
            'image'=>'18',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Yusuf M.Aripin',
            'email'=> 'yusufmaulanaaripin@gmail.com',
            'image'=>'7',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('management');

        $guru = User::create ([
            'name'=> 'Mia Garmianti, S.Sos',
            'email'=> 'garmiantim@gmail.com',
            'image'=>'20',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Roslaila, S.Kom',
            'email'=> 'default3@gmail.com ',
            'image'=>'19',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Shyffa Ilmalia Noer Fhadillah, S.Kom',
            'email'=> 'sgyffainf16@gmail.com',
            'image'=>'22',
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');  

        $guru = User::create ([
            'name'=> 'Intan Nurkhoirunnisa.,S,Pd',
            'email'=> 'default4@gmail.com ',
          
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Ananda Nurmalia Pramesti',
            'email'=> 'meinandaaff@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Ruly Rizki Perdana, S.Kom',
            'email'=> 'rulyrp23@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Refangga Agus Triono',
            'email'=> 'anggacord92@gmail.com',
           
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Vera Marta Sari, S.Pd',
            'email'=> 'verabindo@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $guru = User::create ([
            'name'=> 'Sona Pranata S.Tr.Kom',
            'email'=> 'default5@gmail.com',
           
            'password'=> bcrypt('12345678')

        ]);
        $guru->assignRole('guru');

        $staff = User::create ([
            'name'=> 'Agus Sofyan, S.E',
            'email'=> 'agus.sofyan03@yahoo.com',
            'image'=>'3',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> "Nuron Mu'min",
            'email'=> 'staff1@gmail.com',
            'image'=>'26',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Enjang Suryana',
            'email'=> 'enjangsuryana67@gmail.com',
            'image'=>'25',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Heriyanto',
            'email'=> 'staff2@gmail.com',
            'image'=>'30',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Dikdik Permana',
            'email'=> 'staff3@gmail.com',
            'image'=>'35',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Kharim Sasmita',
            'email'=> 'staff4@gmail.com',
            'image'=>'34',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Sofyan Fetriana',
            'email'=> 'staff5@gmail.com',
            'image'=>'29',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Rifka Nur Fitriyah',
            'email'=> 'rifka22082000@gmail.com',
            'image'=>'27',
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Adang Surahman',
            'email'=> 'staff6@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Romy Sunansyah Wijaya',
            'email'=> 'staff7@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');

        $staff = User::create ([
            'name'=> 'Taupik Pathurrohman',
            'email'=> 'taupikpathurrohman@gmail.com',
            
            'password'=> bcrypt('12345678')

        ]);
        $staff->assignRole('staff');
    }
}
