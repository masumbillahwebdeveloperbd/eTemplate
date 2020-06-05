<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\ImageModel;
use View;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer(('frontEnd.pages.menu'),function($view){
               
               
                    

             $publishedCategories=
             Category::where('publication_status',1)
                        ->where('parent_id',null)
                        ->get();
            $view->with('publishedCategories',$publishedCategories);
        });

        View::composer(('frontEnd.pages.womenSlide'),function($view){
           $imageTypes=ImageModel::all();
           $view->with('imageTypes',$imageTypes);

        });

    }
}
