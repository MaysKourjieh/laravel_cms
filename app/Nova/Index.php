<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Index extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Index>
     */
    public static $model = \App\Models\Index::class;

    /**
     * Get the URI key for the resource.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'index';
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
            new Panel('Carousel Section', $this->carouselFields()),
            new Panel('Product Section', $this->productFields()),
            new Panel('About Section', $this->aboutFields()),
            new Panel('Team Section', $this->teamFields()),
            new Panel('Contact Section', $this->contactFields()),
        ];
    }

    public function carouselFields() {
        return [
            Text::make('Carousel 1 Heading', 'carousel_1_heading')
                ->nullable(),
            Text::make('Carousel 1 Subheading', 'carousel_1_subheading')
                ->nullable(),
            Text::make('Carousel 2 Heading', 'carousel_2_heading')
                ->nullable(),
            Text::make('Carousel 2 Subheading', 'carousel_2_subheading')
                ->nullable(),
            Text::make('Carousel 3 Heading', 'carousel_3_heading')
                ->nullable(),
            Text::make('Carousel 3 Heading', 'carousel_3_subheading')
                ->nullable(),
        ];
    }

    public function productFields() {
        return [
            Text::make('Title', 'product_title')
                ->nullable(),
            Textarea::make('Description', 'product_description')
                ->nullable(),
            Textarea::make('CTA Paragraph', 'product_cta')
                ->nullable(),
        ];
    }

    public function aboutFields() {
        return [
            Text::make('Title', 'about_title')
                ->nullable(),
            Text::make('Subtitle', 'about_subtitle')
                ->nullable(),
            Text::make('Heading', 'about_heading')
                ->nullable(),
            Textarea::make('Description', 'about_description')
                ->nullable(),
            Text::make('CTA Button Text', 'about_cta')
                ->nullable(),
        ];
    }

    public function teamFields() {
        return [
            Text::make('Title', 'team_title')
                ->nullable(),
            Text::make('Subtitle', 'team_subtitle')
                ->nullable(),
        ];
    }

    public function contactFields() {
        return [
            Text::make('Title', 'contact_title')
                ->nullable(),
            Text::make('Subtitle', 'contact_subtitle')
                ->nullable(),
            Text::make('Submit Button Text', 'contact_submit_button_title')
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
