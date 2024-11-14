<?php

namespace App\Http\Controllers;

use App\Product;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Intervention\Image\Facades\Image;

class ProjectController extends  \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    // method for generate the form wizzard url
    public function form_link(Request $request){

        $project =  Project::where('id',$request->project_id)->with('client','products','company')->first();


        if($project->status == 1){
            return redirect()->route('form_done',['project_id'=> $project->id , 'client_name' => $project->client->full_name]);
        }

        if(LaravelLocalization::getCurrentLocale() == 'ar'){
            return view('sites.ar_form' , compact('project'));
        }else{
            return view('sites.form' , compact('project'));
        }

    }


    public function update(Request $request, $id)
    {

        $request->merge(['salesperson' => Auth::user()->name]);


        // Add custom redirect logic
        return parent::update($request, $id)->with('products','company');
    }


    public function store(Request $request)
    {

        $request->merge(['salesperson' => Auth::user()->name]);


        // Call parent logic
        return parent::store($request);
    }


    public function store_form_wizzard(Request $request){



        // get the project
        $project = Project::where('id', $request->project_id)->with('products','company')->first();

        // steep 1
        $selectedProducts = $request->input('selected_products', []); // Get product IDs and values
        foreach ($selectedProducts as $productId => $status) {
            // Perform actions with $productId and $status
            // For example, update the product's status in the database:
            $product = Product::find($productId);
            if ($product) {
                $product->status = $status; // 1 for checked, 0 for unchecked
                $product->save();
            }
        }

        // steep 2 first
        $ratings = $request->input('productQualityVanity', []);
        foreach ($ratings as $productId => $rating) {
            // Process the rating for each product
            $product = Product::find($productId);
            if ($product) {
                // Save or process the rating
                $product->rating = $rating;
                $product->save();
            }
        }

        // steep 2 second
        // Retrieve submitted values
        // Validate input
        $request->validate([
            'teamProfessionalism' => 'required|integer|min:1|max:5',
            'teamPunctuality' => 'required|integer|min:1|max:5',
            'teamCleanliness' => 'required|integer|min:1|max:5',
            'teamSkill' => 'required|integer|min:1|max:5',
        ]);

        // Retrieve values
            $Professionalism = $request->input('teamProfessionalism');
            $Punctuality = $request->input('teamPunctuality');
            $Cleanliness = $request->input('teamCleanliness');
            $SkillWorkmanship = $request->input('teamSkill');

        // retrive comments
        $product_comment = $request->product_comment;
        $team_performance_comments = $request->team_performance_comments;


        // Process or save the feedback
        $project->update([
            'professionalism' => $Professionalism,
            'punctuality' => $Punctuality,
            'cleanliness' => $Cleanliness,
            'skill_workmanship' => $SkillWorkmanship,
            'product_quality_comment' => $product_comment,
            'product_team_performance_comment' => $team_performance_comments,
        ]);

        /* signature image and signature date */
        $request->validate([
            'img_signature' => 'required|string',
        ]);

        if ($request->has('img_signature')) {
            $base64Image = $request->input('img_signature');
            $imageData = explode(',', $base64Image)[1]; // Remove the "data:image/png;base64," part
            $image = base64_decode($imageData);

            // Create an Intervention Image instance
            $img = Image::make($image);

            // Ensure transparency by making the canvas background transparent
            $transparentCanvas = Image::canvas($img->width(), $img->height(), null);
            $transparentCanvas->insert($img, 'center');

            // Encode the image back to PNG with transparency
            $finalImage = $transparentCanvas->encode('png');

            // Generate a unique file name
            $fileName = uniqid() . '.png';
            $filePath = 'images/' . $fileName;

            $project->update([
                'img_signatur' => $filePath,
                'date_signature' =>   $request->form_date
            ]);

            // Save the transparent image in Voyager's storage
            Storage::disk(config('voyager.storage.disk'))->put($filePath, $finalImage);

            // Update the request data to use the saved file path
            //$request->merge(['image' => $filePath]);

        }
        /* signature image */

        return redirect()->route('document',['project_id'=>$project->id , 'client_name' => $project->client->full_name]);

    }


    // method for form done
    public function form_done(Request $request){
        // get the project
        $project = Project::where('id', $request->project_id)->with('products','company')->first();
        return view('sites.form_done' , compact('project'));
    }


    // method for document
    public function document(Request $request){

        $project = Project::where('id', $request->project_id)->with('products','company')->first();

        if(LaravelLocalization::getCurrentLocale() == 'ar'){
            return view('sites.ar_document',compact('project'));
        }else{
            return view('sites.document',compact('project'));
        }


    }























}



/* public function update(Request $request, $id)
    {
        // Call parent logic
        $data = parent::update($request, $id);

        dd($data);

        // Add custom redirect logic
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // Call parent logic
        $data = parent::store($request);

        dd($data);

        // Add custom redirect logic
        return redirect()->back();
    } */

            /*
            {
            "0": "Laveso",
            "1": "Justime",
            "2": "Meir"
            }
            */

        /*
            {
                "1": "Poor 😕",
                "2": "Fair 😐",
                "3": "Good 🙂",
                "4": "Very Good 😊",
                "5": "Excellent 😃"
            }
        */
