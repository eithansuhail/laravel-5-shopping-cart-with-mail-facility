<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$product = new App\Product([
            'category'=>'mobiles',
    		'modelno'=>'G011C / GA00125-IN',
            'productname'=>'Google Pixel 2 XL (Just Black, 64 GB)  (4 GB RAM)',
            'price'=>39999,
            'inthebox'=>'Handset, USB Type-C 18W Adapter with USB-PD, C-C Cable (USB 2.0), SIM Tool, Quick Switch Adapter, 3.5 mm to USB-C Earbud Adapter',
            'description_1'=>'15.24 cm (6 inch) 2880 x 1440 Pixels',
            'description_2'=>'Android Oreo 8.0.1 Qualcomm Snapdragon 835 64-bit Octa Core',
            'description_3'=>'64 GB ',
            'description_4'=>'12.20 MP | 1.4 micrometer, Autofocus with Laser + Dual Pixel Phase Detection, Optical + Electronic Image Stabilization, f/1.8 Aperture',
            'description_5'=>'8MP | 1.4 micrometer, f/2.4 Aperture, Fixed Focus',
            'yearoflaunch'=>'2018',
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/j8esr680/mobile/y/2/3/google-pixel-2-xl-na-original-imaeyfuhw8rxqhya.jpeg?q=70'
    	]);
    	$product->save();


        
        $product = new App\Product([
            'category'=>'mobiles',
            'modelno'=>'SM-G960FZKDINS',
            'productname'=>'Samsung Galaxy S9 (Midnight Black, 64 GB)  (4 GB RAM)',
            'price'=>57990,
           
            'inthebox'=>'Handset, Travel Adapter, Data Cable, Stereo Headset, Ejection Pin, Case, USB Connector, User Manual',
            'description_1'=>'14.73 cm (5.8 inch)2960 x 1440 Pixels',
            'description_2'=>'Android Oreo 8 Exynos 9810',
            'description_3'=>'64 GB 400 GB',
            'description_4'=>'16MP + 2MP | Auto, Food, Hyperlapse, Panorama, Pro, Selective Focus, Slow Motion, Sports, Stickers, Super slow-mo',
            'description_5'=>'20 MP | Features Selfie, Wide Selfie',
            'yearoflaunch'=>'nullable',
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jeiukcw0/mobile/9/y/y/samsung-galaxy-s9-plus-sm-g965fzkdins-original-imaf372g5zukw8wr.jpeg?q=70'
        ]);
        $product->save();
        $product = new App\Product([
            'category'=>'mobiles',
            'modelno'=>'RMX1801',
            'productname'=>'Realme 2 Pro (Ice Lake, 64 GB)  (4 GB RAM)',
            'price'=>12990,
              
            'mrp'=>14990,
            'inthebox'=>'Handset, Adapter, Case, Cable, Warranty Card, Quick Guide, Screen Protector (Applied)',
            'description_1'=>'16.0 cm (6.3 inch) 2340 x 1080 pixels',
            'description_2'=>'Android Oreo 8.1 Qualcomm Snapdragon 660 Octa Core 2.0GHz AIE',
            'description_3'=>'64 GB 256 GB',
            'description_4'=>'16MP + 2MP | 16MP + 2MP',
            'description_5'=>'16MP | f/2.0, AI Selfie',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jmgmmq80/mobile/x/m/y/realme-2-pro-rmx1801-original-imaf9cu2przq9g8z.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'mobiles',
            'modelno'=>'SM-J415FZKFINS',
            'productname'=>'Samsung Galaxy J4 Plus (Black, 32 GB)  (2 GB RAM)',
            'price'=>8490,
              
            'mrp'=>8990,
            'inthebox'=>'Handset, Earphones, Travel Adapter, USB Cable, Ejection Pin, User Manual',
            'description_1'=>'15.24 cm (6 inch) 720 x 1480 pixels',
            'description_2'=>'Android Oreo 8.1 Qualcomm Snapdragon SD425',
           'description_3'=>'32 GB 512 GB',
            'description_4'=>'13MP | Aperture f/1.9, Auto Focus, Digital Zoom',
            'description_5'=>'5MP | Beauty Mode',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/832/832/jmgmmq80/mobile/b/r/h/samsung-galaxy-j4-plus-sm-j415fzkfins-original-imaf9d4khsftw4pz.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'mobiles',
            'modelno'=>'SM-N960FZWDINS',
            'productname'=>'Samsung Galaxy Note 9 (Alpine White, 128 GB)  (6 GB RAM)',
            'price'=>67990,
            
            'mrp'=>73600,
            'inthebox'=>'Handset (With S-pen & Non-removable Battery Included), Earphones, Travel Adapter, USB Cable, User Manual',
            'description_1'=>'15.24 cm (6 inch) 2960 x 1440 Pixels',
            'description_2'=>'Android Oreo 8.1 Octa Core',
            'description_3'=>'128 GB 512 GB',
            'description_4'=>'12MP + 12MP | Aperture f/1.9, Auto Focus, Digital Zoom',
            'description_5'=>'8 MP | Beauty Mode',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jp02t8w0/mobile/s/x/s/samsung-galaxy-note-9-sm-n960fzwdins-original-imafbccz4z7gzwvy.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'mobiles',
            'modelno'=>'SM-G615FZDUINS',
            'productname'=>'Samsung Galaxy On Max (Gold, 32 GB)  (4 GB RAM)',
            'price'=>10990,            
            'mrp'=>16990,
            'inthebox'=>'
            Handset, Earphones, Travel Adapter, USB Cable, Ejection Pin, User Manual',
            'description_1'=>'14.48 cm (5.7 inch) 720 x 1480 pixels',
            'description_2'=>'Android ougat 7 Qualcomm Snapdragon SD425',
            'description_3'=>'32 GB 256 GB',
            'description_4'=>'13MP | Aperture f/1.9, Auto Focus, Digital Zoom',
            'description_5'=>'13MP | Beauty Mode',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/j4sronk0/mobile/3/z/h/samsung-on-max-sm-g615fzduins-original-imaevmfxfpxpfyce.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'mobiles',
            'modelno'=>'SM-G570FZDDINS',
            'productname'=>'Samsung Galaxy J5 Prime (Gold, 16 GB)  (2 GB RAM)',
            'price'=>13499,
            
            
            'inthebox'=>'Handset, Earphones, Travel Adapter, USB Cable, Ejection Pin, User Manual',
            'description_1'=>'12.7 cm (5 inch) 1280 x 720',
            'description_2'=>'Android Marshmallow 6 Qualcomm Snapdragon SD425',
            'description_3'=>'16 GB 256 GB',
            'description_4'=>'13MP | Aperture f/1.9, Auto Focus, Digital Zoom',
            'description_5'=>'5MP | Beauty Mode',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/mobile/c/j/r/samsung-galaxy-j5-prime-na-original-imaemsyq2ptbfcmw.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'mobiles',
            'modelno'=>'SM-G935FZDUINS/SM-G935FZSUINS/ SM-G935FZKUINS',
            'productname'=>'Samsung Galaxy S7 Edge (Silver Titanium, 32 GB)  (4 GB RAM)',
            'price'=>50900,
            
            'inthebox'=>'
            Handset, Earphones, Travel Adapter, USB Cable, Ejection Pin, User Manual',
            'description_1'=>'13.97 cm (5.5 inch 2560 X 1440 Pixels',
            'description_2'=>'Android Marshmallow 6 Qualcomm Snapdragon SD425',
            'description_3'=>'32 GB 200 GB',
            'description_4'=>'13MP | Aperture f/1.9, Auto Focus, Digital Zoom',
            'description_5'=>'5MP | Beauty Mode',
             
            'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/mobile/h/c/v/samsung-galaxy-s7-edge-na-original-imaegmk53n7cnuv6.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'tvs',
            'modelno'=>'L49M5-AN',
            'productname'=>'Mi LED Smart TV 4A Pro 123.2 cm (49) with Android',
            'price'=>30999,    
            'mrp'=>32999,        
            'inthebox'=>'TV Set
User Manual
Screws
Power Cord
Remote Control (Batteries for the Remote Control are Not Provided with the Package)',
            'description_1'=>'20 W Speaker Output : Rich, powerful sound',
            'description_2'=>'1920 x 1080 Full HD - Watch Blu-ray movies at their highest level of detai',
            'description_3'=>'60 Hz : Standard refresh rate for blur-free picture quality',
            'description_4'=>'3 x HDMI : For set top box, consoles and Blu-ray players',
            'description_5'=>'2 x USB : Easily connect your digital camera, camcorder or USB device',
            'description_long'=>'Bring your family together and enjoy your favourite shows, movies, and more on the Mi LED TV 4A Pro. From accessing your favourite content from the homepage to connecting your peripherals using the multiple ports, this television will be your pathway to watch anything you feel like. What’s more? Its built-in Chromecast feature lets you mirror your phone\'s screen on to the television.',
             'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jraycnk0/television/d/h/f/mi-l49m5-an-original-imafd4hwuygdwfys.jpeg?q=70'
        ]);
        $product->save();

        $product = new App\Product(['category'=>'tvs',
            'modelno'=>'32HSHD',
            'productname'=>'MarQ by Flipkart Dolby 32 inch(80 cm) HD Ready Smart LED TV  (32HSHD)',
            'price'=>10999,
            'mrp'=>15499,            
            'inthebox'=>'',
            'description_1'=>'20 W Speaker Output : Rich, powerful sound',
            'description_2'=>'1366 x 768 HD Ready - Great picture quality',
            'description_3'=>'60 Hz : Standard refresh rate for blur-free picture quality',
            'description_4'=>'3 x HDMI : For set top box, consoles and Blu-ray players',
            'description_5'=>'2 x USB : Easily connect your digital camera, camcorder or USB device',
            'description_long'=>'Dolby Digital with Trusurround Sound.
To provide you with a theatre-like experience at home with an immersive and multi-dimensional sound, this TV comes with Dolby Digital with Trusurround Sound.',
             'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jmz7csw0/television/t/f/g/marq-by-flipkart-32hshd-original-imaf9rdgwnrfdcpr.jpeg?q=70'
        ]);
        $product->save();


        $product = new App\Product(['category'=>'tvs',
            'modelno'=>'L43M5-AI',
            'productname'=>'Mi LED Smart TV 4A 108 cm (43)',
            'price'=>25890,
            'mrp'=>25999 ,        
            'inthebox'=>'TV Set User Manual Screws
            Power Cord  Remote Control (Batteries for the Remote Control are Not Provided with the Package)',
            'description_1'=>'20 W Speaker Output',
            'description_2'=>'1920 x 1080 Full HD - Watch Blu-ray movies at their highest level of detail',
            'description_3'=>'60 Hz : Standard refresh rate for blur-free picture quality
',
            'description_4'=>'3 x HDMI : For set top box, consoles and Blu-ray players',
            'description_5'=>'3 x USB : Easily connect your digital camera, camcorder or USB device',
            'description_long'=>'Bring home the Mi LED Smart TV 4A 108 cm (43) and delight your senses with crisp images and rich audio quality. It features Full HD LED Display that gives you crystal clear visuals while the Stereo Speakers make for immersive sound quality, leaving no room for a dull moment.',
             'imageurl'=>'https://rukminim1.flixcart.com/image/704/704/jefzonk0/television/r/a/f/mi-l43m5-ai-original-imaf34hgzwbnfgex.jpeg?q=70'
        ]);
        $product->save();

        // $product = new App\Product(['category'=>'tv',
        //     'modelno'=>'',
        //     'productname'=>'',
        //     'price'=>,            
        //     'inthebox'=>'',
        //     'description_1'=>'',
        //     'description_2'=>'',
        //     'description_3'=>'',
        //     'description_4'=>'',
        //     'description_5'=>'',
        //      'imageurl'=>''
        // ]);
        // $product->save();


        //   $product = new App\Product(['category'=>'mobiles',
        //     'modelno'=>'',
        //     'productname'=>'',
        //     'price'=>,
        //       ,
        //     'mrp'=>,
        //     'inthebox'=>'',
        //     'description_1'=>'',
        //     'resolution'=>'',
        //     'description_2'=>'',
        //     'processortype'=>'',
        //     'description_3'=>'',
        //     'expandablestorage'=>'',
        //     'description_4'=>'',
        //     'description_4feature'=>'',
        //     'description_5'=>'',
        //     'secondarycamerafeature'=>'',
        //      
        //     'imageurl'=>''
        // ]);
        // $product->save();
        
    }
}
