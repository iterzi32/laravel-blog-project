<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            'category_id' => '2',
            'title' => 'Atatürk',
            'slug' => 'atatürk',
            'content' => 'Mustafa Kemal Atatürk 1881 yılında Selanik’te doğdu. Ali Rıza Efendi babası, Zübeyde Hanım ise annesidir. Mustafa Kemal Atatürk’ün eğitim aldığı okullar baştan sona şöyledir; ilkokul eğitimini Mahalle Mektebinde ve Şemsi Efendi Okulunda, ortaokul eğitimini Selanik Mülkiye Rüştiyesi ve Selanik Askeri Rüştiyesinde, lise eğitimini Selanik Askeri İdadisi, üniversite eğitimini ise Harp Okulu ve Harp Akademisinde almıştır. 1893 yılında Askeri Rüştiye’de okurken matematik öğretmeni ona Kemal ismini verdi ve böylece ismi Mustafa Kemal oldu.
                          I. Dünya Savaşı nihayete erdiğinde Mondros Ateşkes antlaşması imzalanması ile vatan topraklarını paylaşılacaktı. Fakat duruma el koyan Mustafa Kemal, 19 Mayıs 1919’da Samsun’a çıkarak milli mücadelenin temellerini attı.
                          3 Nisan 1920 tarihinde TBMM’nin açılmasına önder olan Mustafa Kemal Meclis tarafından da Hükümet Başkanı seçildi. 5 Ağustos 1921’de yine Meclis tarafından Başkomutan seçildi. Sakarya Savaşı’nın kazanılmasındaki büyük emeklerinden dolayı Gazilik unvanı ve Mareşallik rütbesi ile şereflendirildi.
                          29 Ekim 1923 tarihinde Cumhuriyet ilan edildi ve Mustafa Kemal Atatürk Türkiye Cumhuriyeti’nin ilk Cumhurbaşkanı koltuğuna oturdu. 1934 yılında Gazi Mustafa Kemal’e meclis “Atatürk” soyadını lâyık gördü.
                          10 Kasım 1938 tarihinde Dolmabahçe Sarayı’nda hayatına veda etti. Tüm ülkeyi yasa boğdu. Ancak inkılapları ve ülkemize kazandırdıklarıyla kalbimizde sonsuzluğu ulaşmış bir liderdir.',
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ]);

        DB::table('articles')->insert([
            'category_id' => '3',
            'title' => 'Sagalassos',
            'slug' => 'sagalassos',
            'content' => 'Sagalassos, Türkiye’nin en iyi korunmuş antik kentlerinden birisidir ve Unesco Dünya Kültür Miras Listesine girmek için geçici kabulü almıştır. Ağlasun’un sadece 7 km kuzeyinde yer alır. 1990 yılından beri her yaz Leuven Üniversitesi’nden, Belçikalı, Türk ve diğer ülkelerden araştırmacılardan oluşan bir bilimsel ekip, Sagalassos’ta kazı çalışmaları yürütür. En başından beri kazı ve restorasyonlarda Ağlasun’un halkı, ekiple birlikte çalışır. Açığa çıkarılmış ve restore edilmiş eserler Ağlasunluların emeklerinin eseridir. Bugün Sagalassos’u gezenler, kentin Yukarı Agora’sında (meydanı), restore edilmiş ve suları çağlayan bir anıtsal çeşme, yaklaşık 13m. yüksekliğinde onursal sütünlar, iki kemerli kapı ve agorayı çevreleyen yapıların kalıntılarını görebilirler. Antik kentte ayrıca devasa bir Roma hamamı, bir kütüphane, suyu pınarından akan küçük bir çeşme, bir kent konağı, 9000 kişilik bir tiyatro ve şehrin bin yıllık tarihini anlatan başka pekçok eser yer alır. Kazılarda ele geçen buluntular ve dünyaca ünlü heykeller, Burdur Müzesi’nde sergilenir.',
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ]);

        DB::table('articles')->insert([
            'category_id' => '5',
            'title' => 'Menemen',
            'slug' => 'menemen',
            'content' => ' Sıvı yağı ve biberleri tavaya alarak biberlerin rengi dönünceye kadar kavurun.
                           Üzerine kabukları soyulup küçük küçük doğranmış domatesleri ilave edin.
                           Kısık ocakta tavanın kapağını kapatarak domateslerin iyice pişmesini bekleyin.
                           Domatesler çok suyu değil, tavaya yapışıyorsa birazcık kaynar su ekleyebilirsiniz. Genellikle de bu duruma gerek kalmayacaktır.
                           Fotoğraftaki gibi domatesler piştikten sonra yumurtaları kırabilirsiniz. Yumurtaları ister ayrı bir kapta çırpıp ekleyin isterseniz de benim gibi tavaya kırıp tavada karıştırabilirsiniz.
                           Üzerine tuz ve dilediğiniz baharatları ekleyerek yumurtalar pişene kadar bekleyin.
                           Kaşar peyniri eklemek istiyorsanız bu aşamada peynirleri de ilave edebilirsiniz. Menemeni sıcak olarak servis yapın.',
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ]);
    }
}
