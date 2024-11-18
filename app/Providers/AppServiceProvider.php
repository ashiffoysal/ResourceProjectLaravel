<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyInformation;
use App\Models\Seo;
use App\Models\Social;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $companyInformation = CompanyInformation::first();
        $seo = Seo::first();
        $social = Social::first();
        $allCategory = Category::where('is_deleted',0)->where('is_active',1)->get();
        view()->share('companyInformation', $companyInformation);
        view()->share('social', $social);
        view()->share('seo', $seo);
        view()->share('allCategory', $allCategory);
        
    }
}
