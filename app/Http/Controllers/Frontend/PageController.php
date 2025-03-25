<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Country;
use App\Models\Faqs;
use App\Models\Event;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
{
    $countries = Country::all();
    $universities = University::all();  
    return view('welcome', compact('countries', 'universities'));
}
    public function about(){
        $about=\App\Models\AboutUs::first();
        return view('Frontend.Pages.about',compact('about'));
    }
    public function contact(){
        return view('Frontend.Pages.contact');
    }
    public function faqs(){
        $faqs = Faqs::all(); 
        return view('Frontend.Pages.faqs',compact('faqs'));
    }
    public function event(){
        $events = Event::all();
        return view('Frontend.Pages.Events.event',compact('events'));
    }
    public function details($id)
    {
        $event = Event::findOrFail($id); 
        return view('Frontend.Pages.Events.details', compact('event'));
    }
    public function testimonials(){
        return view('Frontend.Pages.testimonials');
    }
    public function success(){
        return view('Frontend.Pages.success');
    }
    public function successstory(){
        return view('Frontend.Pages.successstory');
    }
    public function countries(){
        $countries = Country::all(); 
        $universities = University::all();
    
        return view('Frontend.Pages.University.countries', compact('countries', 'universities'));
    }
    public function university(Request $request)
    {
        $countryId = $request->input('country');
        $country = Country::find($countryId);
        $universities = University::all();
    
        if (!$country) {
            return redirect()->back()->with('error', 'Country not found.');
        }
            return view('Frontend.Pages.University.university', compact('country', 'universities'));
    }
    
    public function universities($id){
        $university = University::with('courses')->findOrFail($id);
        return view('Frontend.Pages.University.universities', compact('university'));
    }

    public function services()
    {
        return view('Frontend.Pages.services.services');
    }

    public function predeparture()
    {
        return view('Frontend.Pages.services.pre_departure');
    }

    public function testpreparation()
    {
        return view('Frontend.Pages.services.test_preparation');
    }

    public function studentaccomodation()
    {
        return view('Frontend.Pages.services.student_accomodation');
    }

    public function educationcounseling()
    {
        return view('Frontend.Pages.services.education_counseling');
    }

    public function scholarshipguidence()
    {
        return view('Frontend.Pages.services.scholarship_guidence');
    }
    
    public function counselordashboard()
    {
        return view('Frontend.Pages.services.counselor_dashboard');
    } 

    public function predepartureguide()
    {
        return view('Frontend.Pages.services.pre_departure_guide');
    } 

    public function learning()
    {
        $universities=University::get();
        return view('Frontend.Pages.learning',compact('universities'));
    }

    public function ielts()
    {
        return view('Frontend.Pages.learningCenter.ielts');
    }

    public function pte()
    {
        return view('Frontend.Pages.learningCenter.pte');
    }

    public function toefl()
    {
        return view('Frontend.Pages.learningCenter.toefl');
    }
    public function sat(){
        return view('Frontend.Pages.learningCenter.sat');
    }
    public function gre(){
        return view('Frontend.Pages.learningCenter.gre');
    }
    public function gmat(){
        return view('Frontend.Pages.learningCenter.gmat');
    }
}
