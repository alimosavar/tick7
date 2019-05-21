<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        Category::truncate();

        $this->categoryVue();
        $this->categoryJavascript();
        $this->categoryPhp();
        $this->categoryLaravel();

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }

    private function categoryVue()
    {
        Category::create([
            'title'=>'ویو جی اس',
        ]);
    }

    private function categoryJavascript()
    {
        Category::create([
            'title'=>'جاوا اسکریپت',
        ]);
    }

    private function categoryPhp()
    {
        Category::create([
            'title'=>'پی اچ پی',
        ]);
    }

    private function categoryLaravel()
    {
        Category::create([
            'title'=>'لاراول',
        ]);
    }
}
