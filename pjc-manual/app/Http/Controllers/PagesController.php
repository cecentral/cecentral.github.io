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
        $fileContents = File::get('../resources/markdown/README.md');
        return view('readme')->with('fileContents', $fileContents);
    }

    public function summary(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/SUMMARY.md');
        return view('summary')->with('fileContents', $fileContents);
    }

    public function accreditation(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Accreditation.md');
        return view('activity.accreditation')->with('fileContents', $fileContents);
    }

    public function details(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Details.md');
        return view('activity.details')->with('fileContents', $fileContents);
    }

    public function getCredit(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Get-Credit.md');
        return view('activity.get-credit')->with('fileContents', $fileContents);
    }

    public function location(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Location.md');
        return view('activity.location')->with('fileContents', $fileContents);
    }

    public function options(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Options.md');
        return view('activity.options')->with('fileContents', $fileContents);
    }

    public function outcomes(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Outcomes.md');
        return view('activity.outcomes')->with('fileContents', $fileContents);
    }

    public function publishingOptions(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Publishing-Options.md');
        return view('activity.publishing-options')->with('fileContents', $fileContents);
    }

    public function topics(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/Activity-Topics.md');
        return view('activity.topics')->with('fileContents', $fileContents);
    }

    public function locationsDropDownSelectBox(Parsedown $parsedown) {
        $fileContents = File::get('../resources/markdown/locations_drop_down_select_box.md');
        return view('activity.locations-drop-down-select-box')->with('fileContents', $fileContents);
    }


}
