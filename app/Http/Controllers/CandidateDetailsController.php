<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CandidateDetail;
use App\Models\Candidate;
use App\Models\Jobs;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;

class CandidateDetailsController extends Controller
{
    public function create(Request $request)
    {
        $candidate = auth('candidate')->user();

        if (!$candidate) {
            return redirect()->route('home')->with('error', 'Please log in to access this page.');
        }

        $candidateDetail = $candidate->candidateDetail;

        if ($candidateDetail) {
            return redirect()->route('candidate.details.edit')->with('candidate', $candidate);
        }

        $languages = Language::all();

        return view('candidate.details.create', compact('candidate', 'languages'));
    }

   public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'home_country' => 'required|string',
        'uae_status' => 'required|string',
        'nationality' => 'required|string',
        'driving_licence' => 'required|in:yes,no',
        'languages_known' => 'required|array',
        'languages_known.*' => 'string',
        'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        'uae_status_expiry_date' => 'nullable|date',
        'driving_licence_expiry_date' => 'nullable|date',
        'qualification' => 'required|string',
        'experience_region' => 'nullable|string',
        'experience_years' => 'nullable|integer',
        'gender' => 'required|in:Male,Female,Other', // Added 'gender' field
    ], [
        'resume.max' => 'The uploaded file exceeds the maximum allowed size of 2MB.',
        'driving_licence.in' => 'The driving license field must be either "yes" or "no."',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();

        if ($errors->has('resume')) {
            return redirect()
                ->route('candidate-details.create')
                ->with('error', $errors->first('resume'))
                ->withInput();
        }

        return redirect()
            ->route('candidate-details.create')
            ->withErrors($validator)
            ->withInput();
    }

    $candidate = auth('candidate')->user();

    $candidateDetail = new CandidateDetail([
        'home_country' => $request->input('home_country'),
        'uae_status' => $request->input('uae_status'),
        'nationality' => $request->input('nationality'),
        'driving_licence' => $request->input('driving_licence'),
        'languages_known' => json_encode($request->input('languages_known')),
        'resume' => $request->file('resume')->store('resumes', 'public'),
        'uae_status_expiry_date' => $request->input('uae_status_expiry_date'),
        'driving_licence_expiry_date' => $request->input('driving_licence_expiry_date'),
        'qualification' => $request->input('qualification'),
        'experience_region' => $request->input('experience_region'),
        'experience_years' => $request->input('experience_years'),
        'gender' => $request->input('gender'), // Added 'gender' field
    ]);

    $candidate->candidateDetail()->save($candidateDetail);

    return redirect()->route('candidate.details.edit')->with('success', 'Details added successfully');
}


    public function edit()
    {
        $candidate = auth('candidate')->user();

        if (!$candidate) {
            return redirect()->route('home')->with('error', 'Please log in to access this page.');
        }

        $candidateDetail = CandidateDetail::where('candidate_id', $candidate->id)->first();

        if (!$candidateDetail) {
            // Handle the case where a CandidateDetail does not exist
            // You might want to create one or handle this case accordingly
        }

        $languages = Language::all();

        $selectedLanguages = $candidateDetail ? json_decode($candidateDetail->languages_known) : [];

        return view('candidate.details.edit', compact('candidate', 'candidateDetail', 'languages', 'selectedLanguages'));
    }
public function update(Request $request)
{
    $candidate = auth('candidate')->user();
    $candidateId = $candidate->id;

    $rules = [
        'home_country' => 'required|string',
        'uae_status' => 'required|string',
        'nationality' => 'required|string',
        'driving_licence' => 'required|in:yes,no',
        'languages_known' => 'nullable|array',
        'languages_known.*' => 'string',
        'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
        'name' => 'required|string',
        'contact_email' => 'required|email|unique:candidates,contact_email,' . $candidateId,
        'mobile' => 'required|string',
        'uae_status_expiry_date' => 'nullable|date',
        'driving_licence_expiry_date' => 'nullable|date',
        'qualification' => 'required|string',
        'experience_region' => 'nullable|string',
        'experience_years' => 'nullable|integer',
        'gender' => 'nullable|string|in:Male,Female,Any',
    ];

    $messages = [
        'languages_known.required' => 'At least one language is required.',
        'contact_email.unique' => 'The email is already in use.',
    ];

    $request->validate($rules, $messages);

    $languagesKnown = $request->input('languages_known');

    $candidateDetail = $candidate->candidateDetail;

    $candidateDetailData = $request->only([
        'home_country',
        'uae_status',
        'nationality',
        'experience',
        'uae_status_expiry_date',
        'driving_licence_expiry_date',
        'qualification',
        'experience_region',
        'experience_years',
        'driving_licence',
        'gender', // Include the 'gender' field
    ]);

    $candidateDetailData['languages_known'] = json_encode($languagesKnown);

    if ($candidateDetail) {
        $candidateDetail->update($candidateDetailData);
    } else {
        $candidate->candidateDetail()->create($candidateDetailData);
    }

    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');

        if ($candidateDetail) {
            $candidateDetail->update(['resume' => $resumePath]);
        }
    }

    $candidate->update([
        'name' => $request->input('name'),
        'contact_email' => $request->input('contact_email'),
        'mobile' => $request->input('mobile'),
    ]);

    return redirect()->route('candidate.details.edit')->with('success', 'Details updated successfully');
}

}
