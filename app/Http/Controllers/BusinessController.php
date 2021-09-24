<?php

namespace App\Http\Controllers;

use App\Models\Business;
// use App\Http\Requests\StoreBusinessFormRequest; // uncomment to use the form request
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', ['businesses' => $businesses]);
    }

    public function show(Business $business)
    {
        return view('businesses.show', ['business' => $business]);
    }

    public function create()
    {
        return view('businesses.create');
    }

    // comment this method to use the FormRequest version
    public function store(Request $request)
    {
        $rules = [
            'name'                        => 'required|max:255',
            'type'                        => 'required|in:salon,freelance,home,venue',
            'instagram_username'          => 'sometimes|max:50',
            'where_did_you_hear_about_us' => 'required|in:internet search,facebook,instagram,word of mouth,tiktok,other',
            'discount_code'               => 'sometimes|max:8',
        ];

        $messages = [
            'where_did_you_hear_about_us.required' => 'Please tell us where you heard about us.',
            'where_did_you_hear_about_us.in'       => 'Please tell us where you heard about us.',
        ];

        $customAttributes = [
            'name' => 'business name',
            'type' => 'business type',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $business = Business::create([
            'name'                        => $request->name,
            'type'                        => $request->type,
            'instagram_username'          => $request->instagram_username,
            'where_did_you_hear_about_us' => $request->where_did_you_hear_about_us,
            'discount_code'               => $request->discount_code,
        ]);

        return redirect(route('businesses.show', ['business' => $business]));
    }

    // uncomment this method to use the FormRequest version
    // public function store(StoreBusinessFormRequest $request)
    // {
    //     // using $request->validated() means we only have validated data to use later
    //     // this prevents any non validated input slipping through
    //     $validated = $request->validated();

    //     $business = Business::create([
    //         'name'                        => $validated['name'],
    //         'type'                        => $validated['type'],
    //         'instagram_username'          => $validated['instagram_username'],
    //         'where_did_you_hear_about_us' => $validated['where_did_you_hear_about_us'],
    //         'discount_code'               => $validated['discount_code'],
    //     ]);

    //     return redirect(route('businesses.show', ['business' => $business]));
    // }
}
