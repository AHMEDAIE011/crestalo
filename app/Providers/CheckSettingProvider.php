<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\RelatedNewsSite;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class CheckSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $getSetting = Setting::firstOr(function(){
            return Setting::create([
                'site_name'=>'Ather',
                'logo'=>'assets/front/images/logoss3.png',
                'favicon'=>'default',
                'email'=>'Ather@gmail.com',
                'facebook'=>'https://www.facebook.com/athar.furniture1',
                'twitter'=>'',
                'insagram'=>'https://www.instagram.com/athar.furniture1/',
                'youtupe'=>'',
                'country'=>'Egypt',
                'city'=>'Nile Corniche – Helwan',
                'street'=>'Next to Mefko Helwan Furniture',
                'phone'=>'01002820312',
                'small_desc'=>'We design and craft furniture pieces that blend authentic craftsmanship with contemporary design, using carefully selected materials and precise execution. Our pieces go beyond function — they express taste, tell a story, and give each space its own unique identity.',
                'small_desc_ar'=>'
نصمّم وننفّذ قطع أثاث تجمع بين الحِرفة الأصيلة والتصميم العصري،
 بخامات مختارة بعناية وتنفيذ متقن، لنخلق قطعًا لا تؤدي وظيفة فقط،
 بل تعبّر عن ذوق، وتحكي قصة، وتمنح المكان هويته الخاصة',
            ]);
        });

        $getSetting->whatsapp = "https://wa.me/".$getSetting->phone;
        view()->share([
            'getSetting'=>$getSetting,
        ]);

    }
}
