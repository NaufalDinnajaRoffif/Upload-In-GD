<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GDStorageController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request to ensure a file and custom filename are present
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png',
            'file_name' => 'required|string|max:255'
        ]);

        // Retrieve the uploaded file and custom filename
        $uploadedFile = $request->file('file');
        $customFilename = $request->file_name;

        // Append the original file extension to the custom filename
        $extension = $uploadedFile->getClientOriginalExtension();
        $filename = $customFilename . '.' . $extension;

        // Store the file locally
        $localPath = $uploadedFile->storeAs('files', $filename);

        // Ensure the file exists at the local path
        if (!File::exists(storage_path('app/' . $localPath))) {
            return redirect()->back()->with('errors', 'File does not exist at the local path.');
        }

        // Upload the file to Google Drive
        Storage::disk('google')->put($filename, File::get(storage_path('app/' . $localPath)));

        return redirect()->back()->with('success', 'File uploaded to Google Drive successfully.');
    }
}
