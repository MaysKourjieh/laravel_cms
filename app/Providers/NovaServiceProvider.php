<?php

namespace App\Providers;

use App\Nova\ContactForm;
use App\Nova\ContactFormInterest;
use App\Nova\General;
use App\Nova\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuGroup;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::make('Website', [
                    MenuItem::make('General')->path('/resources/general/1/edit'),
                    MenuGroup::make('Pages', [
                        MenuItem::make('Index')->path('/resources/index/1/edit'),
                    ]),
                    MenuGroup::make('Resources', [
                        MenuItem::resource(TeamMember::class),
                    ]),
                    MenuGroup::make('Contact Forms Section', [
                        MenuItem::resource(ContactForm::class),
                        MenuItem::resource(ContactFormInterest::class),
                    ]),
                ]),



            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'admin@email.com',
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
