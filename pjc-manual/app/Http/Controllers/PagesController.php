<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\FileDoctor;
use App\Parsedown;

use App\Http\Requests;
class PagesController extends Controller
{

    public function readMe(Parsedown $parsedown) {
        $title = "Read Me";
        $fileContents = File::get('../resources/markdown/README.md');
        return view('readme')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function summary(Parsedown $parsedown) {
        $title = "Summary";
        $fileContents = File::get('../resources/markdown/SUMMARY.md');
        return view('summary')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function accreditation(Parsedown $parsedown) {
        $title = "Accreditation";
        $fileContents = File::get('../resources/markdown/Activity-Accreditation.md');
        return view('activity.accreditation')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function details(Parsedown $parsedown) {
        $title = "Activity Details";
        $fileContents = File::get('../resources/markdown/Activity-Details.md');
        return view('activity.details')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function getCredit(Parsedown $parsedown) {
        $title = "Get Credit";
        $fileContents = File::get('../resources/markdown/Activity-Get-Credit.md');
        return view('activity.get-credit')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function location(Parsedown $parsedown) {
        $title = "Location";
        $fileContents = File::get('../resources/markdown/Activity-Location.md');
        return view('activity.location')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function options(Parsedown $parsedown) {
        $title = "Options";
        $fileContents = File::get('../resources/markdown/Activity-Options.md');
        return view('activity.options')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function outcomes(Parsedown $parsedown) {
        $title = "Outcomes";
        $fileContents = File::get('../resources/markdown/Activity-Outcomes.md');
        return view('activity.outcomes')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function publishingOptions(Parsedown $parsedown) {
        $title = "Publishing Options";
        $fileContents = File::get('../resources/markdown/Activity-Publishing-Options.md');
        return view('activity.publishing-options')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function topics(Parsedown $parsedown) {
        $title = "Topics";
        $fileContents = File::get('../resources/markdown/Activity-Topics.md');
        return view('activity.topics')->with('fileContents', $fileContents)->with('title', $title);
    }

    public function locationsDropDownSelectBox(Parsedown $parsedown) {
        $title = "Locations Drop Down";
        $fileContents = File::get('../resources/markdown/locations_drop_down_select_box.md');
        return view('activity.locations-drop-down-select-box')->with('fileContents', $fileContents)->with('title', $title);
    }


}
