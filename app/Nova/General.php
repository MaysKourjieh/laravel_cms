<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class General extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\General>
     */
    public static $model = \App\Models\General::class;

    /**
     * Get the URI key for the resource.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'general';
    }

    /**
     * Determine if the current user can create new resources.
     *
     * @param Request $request
     *
     * @return bool
     */
    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    /**
     * Determine if the current user can delete the given resource or throw an exception.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    /**
     * Determine if the current user can replicate the given resource or throw an exception.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function authorizedToReplicate(Request $request)
    {
        return false;
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            new Panel('Website Info', $this->infoFields()),
            new Panel('Navbar', $this->navbarFields()),
            new Panel('Footer', $this->footerFields()),
        ];
    }

    public function infoFields() {
        return [
            File::make('Logo', 'logo')
                ->prunable()
                ->acceptedTypes('image/*')
                ->path('logo'),

            Text::make('Title', 'website_title')
                ->required(),
        ];
    }

    public function navbarFields() {
        return [
            Text::make('Products Title', 'navbar_products_title')
                ->nullable(),
            Text::make('About Title', 'navbar_about_title')
                ->nullable(),
            Text::make('Team Title', 'navbar_team_title')
                ->nullable(),
            Text::make('Contact Title', 'navbar_contact_title')
                ->nullable(),
        ];
    }

    public function footerFields() {
        return [
            Text::make('Instagram Link', 'instagram_link')
                ->nullable(),
            Text::make('Email', 'contact_email')
                ->nullable(),
            Text::make('Phone Number', 'phone_number')
                ->nullable(),
            Textarea::make('Description', 'footer_description')
                ->nullable(),
            Text::make('Products Title', 'footer_products_title')
                ->nullable(),
            Text::make('Contact Title', 'footer_contact_title')
                ->nullable(),
            Text::make('Latitude', 'lat')
                ->nullable(),
            Text::make('Longitude', 'lng')
                ->nullable(),
            Text::make('Quick Links Title', 'footer_quick_links_title')
                ->nullable(),
            Text::make('Copyrights Title', 'footer_copyrights_title')
                ->nullable(),
            Text::make('Privacy Policy Title', 'footer_privacy_policy_title')
                ->nullable(),
            Text::make('Terms and Conditions Title', 'footer_terms_and_conditions_title')
                ->nullable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
