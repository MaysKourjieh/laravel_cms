<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\ContactFormInterest;
use App\Models\General;
use App\Models\Index;
use App\Models\MetricCard;
use App\Models\PrivacyPolicy;
use App\Models\PrivacyPolicyPage;
use App\Models\Product;
use App\Models\TeamMember;
use App\Models\TermAndCondition;
use App\Models\TermsAndConditionsPage;

class PagesController extends Controller
{
    public function content() {
        $general = General::findOrFail(1);
        $data['general'] = $general;

        $about = About::findOrFail(1);
        $data['about'] = $about;

        $index = Index::findOrFail(1);
        $data['index'] = $index;

        $privacyPolicyHeading = PrivacyPolicyPage::findOrFail(1);
        $data['privacyPolicyHeading'] = $privacyPolicyHeading;

        $termsAndConditionsHeading = TermsAndConditionsPage::findOrFail(1);
        $data['termsAndConditionsHeading'] = $termsAndConditionsHeading;

        $privacyPolicies = PrivacyPolicy::all();
        $data['privacyPolicies'] = $privacyPolicies;

        $termsAndConditions = TermAndCondition::all();
        $data['termsAndConditions'] = $termsAndConditions;

        $contactFormInterests = ContactFormInterest::all();
        $data['contactFormInterests'] = $contactFormInterests;

        $teamMembers = TeamMember::all();
        $data['teamMembers'] = $teamMembers;

        $metricCards = MetricCard::all();
        $data['metricCards'] = $metricCards;

        $categories = Category::all();
        $data['categories'] = $categories;

        $products = Product::all();

        foreach ($products as $prod) {
            $productImages = [];
            foreach ($prod->images as $img) {
                $productImages[] = $img->image;
            }
            $prod->productImages = $productImages;
            unset($prod->images);
        }

        $data['products'] = $products;

        return response()->json([
           'message' => 'Content fetched successfully',
           'data' => $data
        ]);
    }
}
