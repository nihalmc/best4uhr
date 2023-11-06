<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberFormat;
use Illuminate\Http\Request;
use App\Models\Employers;

class EmployerController extends Controller
{
    public function index()
{
    $employers = Employers::orderBy('created_at', 'desc')->get(); // Fetch all employers from the database, ordered by 'created_at' in descending order
    return view('admin.employers.index', ['employers' => $employers]);
}


    // Show the form for creating a new employer
    public function create()
    {
        return view('admin.employers.create');
    }

   public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_email' => 'required|email|unique:employers,contact_email',
            'mobile' => 'required|string',
            'username' => 'required|string|unique:employers,username',
            'password' => 'required|min:6',
        ]);

        $employers = new Employers();
        $employers->company_name = $request->company_name;
        $employers->contact_person = $request->contact_person;
        $employers->contact_email = $request->contact_email;

        // Format and store the mobile number with the country code
        $mobileNumber = $this->formatMobileNumber($request->mobile);
        $employers->mobile = $mobileNumber;

        $employers->username = $request->username;
        $employers->isEmployer = true;
        $employers->password = Hash::make($request->password);

        $employers->save();

        return redirect()->route('employers.index')->with('success', 'Employer created successfully');
    }
/**
 * Extract the country code and format the mobile number using intl-tel-input.
 */


    // Show the form for editing an employer
    public function edit($id)
    {
        $employers = Employers::findOrFail($id); // Find the employer by ID
        return view('admin.employers.edit', ['employers' => $employers]);
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_email' => 'required|email|unique:employers,contact_email,' . $id,
            'mobile' => 'required|string',
            'username' => 'required|string|unique:employers,username,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $employers = Employers::findOrFail($id);

        $employers->company_name = $request->company_name;
        $employers->contact_person = $request->contact_person;
        $employers->contact_email = $request->contact_email;

        // Format and update the mobile number with the country code
        $mobileNumber = $this->formatMobileNumber($request->mobile);
        $employers->mobile = $mobileNumber;

        $employers->username = $request->username;

        if ($request->password) {
            $employers->password = Hash::make($request->password);
        }

        $employers->save();

        return redirect()->route('employers.index')->with('success', 'Employer updated successfully');
    }

    // Remove the specified employer from the database
    public function destroy($id)
    {
         try {
        $employer = Employers::findOrFail($id);
        $employer->delete();

        return redirect()->route('employers.index')->with('success', 'Employer deleted successfully');
         } catch (\Exception $e) {
        // Handle any exceptions that occur during the deletion process
        // You can log the error for debugging purposes
        // Log::error($e->getMessage());

        // Redirect back with an error message
        return redirect()->back()->with('error', 'Cannot delete  the employer because related jobs exist.');
    }
    }

 // Helper function to format mobile number with country code
public function formatMobileNumber($mobile)
{
    $phoneUtil = PhoneNumberUtil::getInstance();

    try {
        $phoneNumber = $phoneUtil->parse($mobile, null); // Don't set a default region
        return $phoneUtil->format($phoneNumber, PhoneNumberFormat::E164);
    } catch (NumberParseException $e) {
        return $mobile; // Return the original mobile number if formatting fails
    }
}



}
