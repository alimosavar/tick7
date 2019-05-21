<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Product::truncate();

        $this->createVue();
        $this->createJavascript();
        $this->createPhp();
        $this->createLaravel();
//        factory(Product::class, 50)->create();

        Schema::enableForeignKeyConstraints();
    }

    private function createVue()
    {
        Product::create([
            'name' => 'آموزش ویو جی اس',
            'status' => 1,
            'description' =>
                'همونطور که اطلاع دارید در جلسه قبل بحث مربوط به Reflect API رو پیش بردیم و توضیحات کاملی در مورد متدهای defineProperty و getOwnPropertyDescriptor و deleteProperty و has دادیم. در این جلسه میخوایم کار با Reflect API
                 رو به اتمام برسانیم و تعدادی از متدهای دیگر اون رو با هم بررسی کنیم. خب در اینجا میخوایم دیگر متدهای مربوط به بازتاب رو آموزش بدیم. متد Reflect.getPrototypeOf این متد همانند Object.getPrototypeOf مقدار prototype شئ مورد نظرتون رو برگشت میده و میتونین از اون استفاده کنید.
                  این متد فقط یک ورودی رو دریافت میکنه و اون هم شئ مورد نظر برای دریافت prototype می باشد. اگر شئ مورد نظر ویژگی های به ارث برده شده نداشته باشد، مقدار null برگشت داده میشه. همچنین اگر ورودی مورد نظر شئ نباشد یک ارور در Console نمایش داده خواهد شد.',
            'slug' => 'آموزش-ویو-جی-اس',
            'price' => '100,000',
            'discount' => '25',
            'product_views' => '25',
            'video_url' => '',
            'photo' => '',
            'meta_description' => 'این یه متن تست میباشد',
            'meta_keyword' => 'آموزش ویو جی اس,آموزش Vue.js',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }

    private function createJavascript()
    {
        Product::create([
            'name' => 'آموزش جاوا اسکریپت',
            'status' => 1,
            'description' =>
                'همونطور که اطلاع دارید در جلسه قبل بحث مربوط به Reflect API رو پیش بردیم و توضیحات کاملی در مورد متدهای defineProperty و getOwnPropertyDescriptor و deleteProperty و has دادیم. در این جلسه میخوایم کار با Reflect API
                 رو به اتمام برسانیم و تعدادی از متدهای دیگر اون رو با هم بررسی کنیم. خب در اینجا میخوایم دیگر متدهای مربوط به بازتاب رو آموزش بدیم. متد Reflect.getPrototypeOf این متد همانند Object.getPrototypeOf مقدار prototype شئ مورد نظرتون رو برگشت میده و میتونین از اون استفاده کنید.
                  این متد فقط یک ورودی رو دریافت میکنه و اون هم شئ مورد نظر برای دریافت prototype می باشد. اگر شئ مورد نظر ویژگی های به ارث برده شده نداشته باشد، مقدار null برگشت داده میشه. همچنین اگر ورودی مورد نظر شئ نباشد یک ارور در Console نمایش داده خواهد شد.',
            'slug' => 'آموزش-جاوا-اسکریپت',
            'price' => '100,000',
            'discount' => '25',
            'product_views' => '25',
            'video_url' => '',
            'photo' => '',
            'meta_description' => 'این یه متن تست میباشد',
            'meta_keyword' => 'آموزش جاوا اسکریپت,آموزش javascript',
            'user_id' => 1,
            'category_id' => 2
        ]);
    }

    private function createPhp()
    {
        Product::create([
            'name' => 'آموزش پی اچ پی',
            'status' => 1,
            'description' =>
                'همونطور که اطلاع دارید در جلسه قبل بحث مربوط به Reflect API رو پیش بردیم و توضیحات کاملی در مورد متدهای defineProperty و getOwnPropertyDescriptor و deleteProperty و has دادیم. در این جلسه میخوایم کار با Reflect API
                 رو به اتمام برسانیم و تعدادی از متدهای دیگر اون رو با هم بررسی کنیم. خب در اینجا میخوایم دیگر متدهای مربوط به بازتاب رو آموزش بدیم. متد Reflect.getPrototypeOf این متد همانند Object.getPrototypeOf مقدار prototype شئ مورد نظرتون رو برگشت میده و میتونین از اون استفاده کنید.
                  این متد فقط یک ورودی رو دریافت میکنه و اون هم شئ مورد نظر برای دریافت prototype می باشد. اگر شئ مورد نظر ویژگی های به ارث برده شده نداشته باشد، مقدار null برگشت داده میشه. همچنین اگر ورودی مورد نظر شئ نباشد یک ارور در Console نمایش داده خواهد شد.',
            'slug' => 'آموزش-پی-اچ-پی',
            'price' => '100,000',
            'discount' => '25',
            'product_views' => '25',
            'video_url' => '',
            'photo' => '',
            'meta_description' => 'این یه متن تست میباشد',
            'meta_keyword' => 'آموزش پی اچ پی,آموزش php',
            'user_id' => 1,
            'category_id' => 3
        ]);
    }

    private function createLaravel()
    {
        Product::create([
            'name' => 'آموزش لاراول',
            'status' => 1,
            'description' =>
                'همونطور که اطلاع دارید در جلسه قبل بحث مربوط به Reflect API رو پیش بردیم و توضیحات کاملی در مورد متدهای defineProperty و getOwnPropertyDescriptor و deleteProperty و has دادیم. در این جلسه میخوایم کار با Reflect API
                 رو به اتمام برسانیم و تعدادی از متدهای دیگر اون رو با هم بررسی کنیم. خب در اینجا میخوایم دیگر متدهای مربوط به بازتاب رو آموزش بدیم. متد Reflect.getPrototypeOf این متد همانند Object.getPrototypeOf مقدار prototype شئ مورد نظرتون رو برگشت میده و میتونین از اون استفاده کنید.
                  این متد فقط یک ورودی رو دریافت میکنه و اون هم شئ مورد نظر برای دریافت prototype می باشد. اگر شئ مورد نظر ویژگی های به ارث برده شده نداشته باشد، مقدار null برگشت داده میشه. همچنین اگر ورودی مورد نظر شئ نباشد یک ارور در Console نمایش داده خواهد شد.',
            'slug' => 'آموزش-لاراول',
            'price' => '100,000',
            'discount' => '25',
            'product_views' => '25',
            'video_url' => '',
            'photo' => '',
            'meta_description' => 'این یه متن تست میباشد',
            'meta_keyword' => 'آموزش لاراول,آموزش laravel',
            'user_id' => 1,
            'category_id' => 4
        ]);
    }
}
