<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Candidate;
use Illuminate\Support\Str;
use App\Models\CandidateDetail;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
public function index(Request $request)
{
    // Get all candidates by default, ordered by 'created_at' in descending order
    $candidates = Candidate::orderBy('created_at', 'desc')->get();

    // Get the selected candidate IDs from the request
    $selectedIds = $request->input('selected_ids', []);

    // If selected IDs are provided, filter the candidates
    if (!empty($selectedIds)) {
        $candidates = Candidate::whereIn('id', $selectedIds)->orderBy('created_at', 'desc')->get();
    }

    return view('admin.candidate.index', [
        'candidates' => $candidates,
        'selectedIds' => $selectedIds,
    ]);
}



    // Show the form for creating a new employer
    public function create()
    {
        return view('admin.candidate.create');
    }

  public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'contact_email' => 'required|email|unique:candidates,contact_email',
        'mobile' => 'nullable|string',
        'username' => 'required|string|unique:candidates,username',
        'password' => 'required|min:8',
        'registration_number' => 'required|string', // Add this line
    ]);

    $candidate = new Candidate();
    $candidate->name = $request->name;
    $candidate->contact_email = $request->contact_email;
    $candidate->mobile = $request->mobile;
    $candidate->username = $request->username;
    $candidate->registration_number = $request->registration_number; // Add this line
    $candidate->isCandidates = true;
    $candidate->password = Hash::make($request->password);

    $candidate->save();

    return redirect()->route('candidates.index')->with('success', 'Candidate created successfully');
}


    // Show the form for editing an employer
    public function edit($id)
    {
        $candidates = Candidate::findOrFail($id); // Find the employer by ID
        return view('admin.candidate.edit', ['candidates' => $candidates]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'contact_email' => 'required|email|unique:candidates,contact_email,' . $id,
        'username' => 'required|string|unique:candidates,username,' . $id,
        'mobile' => 'nullable|string',
        'password' => 'nullable|min:8',
        'registration_number' => 'required|string', // Add this line
    ]);

    $candidate = Candidate::findOrFail($id);

    $candidate->name = $request->name;
    $candidate->contact_email = $request->contact_email;
    $candidate->mobile = $request->mobile;
    $candidate->username = $request->username;
    $candidate->registration_number = $request->registration_number; // Add this line

    if (!empty($request->password)) {
        $candidate->password = Hash::make($request->password);
    }

    $candidate->save();

    return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully');
}



public function destroy($id)
{
    DB::beginTransaction();

    try {
        // Find the Candidate by its ID
        $candidate = Candidate::findOrFail($id);

        // Check if there are associated CandidateDetails
        if ($candidate->candidateDetail()->exists()) {
            // If there are associated CandidateDetails, delete them
            $candidate->candidateDetail()->delete();
        }

        // Now, delete the Candidate
        $candidate->delete();

        DB::commit();

        return redirect()->route('candidates.index')->with('success', 'Candidate and associated details deleted successfully');
    } catch (\Exception $e) {
        DB::rollBack();

        return redirect()->route('candidates.index')->with('error', 'Error deleting candidate and associated details');
    }
}

public function updateStatus(Candidate $candidate, $newStatus)
{
    $validStatuses = ['approved', 'rejected'];

    if (in_array($newStatus, $validStatuses)) {
        // Update the candidate's status here
        $candidate->update(['status' => $newStatus]);

        return redirect()->back()->with('success', 'Candidate status updated successfully');
    }

    return redirect()->back()->with('error', 'Invalid status');
}




}
