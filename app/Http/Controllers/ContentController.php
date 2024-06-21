<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        // dd($content);
        return view('dashboard.contents.edit', [
            'content' => $content,
            "services" => Service::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $validatedData = $request->validate([
            'title1' => 'required|min:3|max:225',
            'title2' => 'required|min:3|max:225',
            'title3' => 'required|min:3|max:225',
            'title4' => 'required|min:3|max:225',
            'asset1' => 'image|file|max:2048',
            'asset2' => 'image|file|max:2048',
            'asset3' => 'image|file|max:2048',
            'hero1' => 'image|file|max:2048',
            'hero2' => 'image|file|max:2048'
        ]);

        // Handle file upload image icon 1
        if ($request->file('asset1')) {
            // hapus image sebelumnya jika ada
            if ($content->asset1) {
                Storage::delete($content->asset1);
            }

            // dapatkan original name
            $originalFileName = $request->file('asset1')->getClientOriginalName();

            // buat nama file unik
            $fileName = time() . '_' . $originalFileName;

            // store ke storage
            $path = $request->file('asset1')->storeAs('public/assets', $fileName);
            $validatedData['asset1'] = str_replace('public/', '', $path);
        }

        // Handle file upload image icon 2
        if ($request->file('asset2')) {
            // hapus image sebelumnya jika ada
            if ($content->asset2) {
                Storage::delete($content->asset2);
            }

            // dapatkan original name
            $originalFileName = $request->file('asset2')->getClientOriginalName();

            // buat nama file unik
            $fileName = time() . '_' . $originalFileName;

            // store ke storage
            $path = $request->file('asset2')->storeAs('public/assets', $fileName);
            $validatedData['asset2'] = str_replace('public/', '', $path);
        }

        // Handle file upload image icon 3
        if ($request->file('asset3')) {
            // hapus image sebelumnya jika ada
            if ($content->asset3) {
                Storage::delete($content->asset3);
            }

            // dapatkan original name
            $originalFileName = $request->file('asset3')->getClientOriginalName();

            // buat nama file unik
            $fileName = time() . '_' . $originalFileName;

            // store ke storage
            $path = $request->file('asset3')->storeAs('public/assets', $fileName);
            $validatedData['asset3'] = str_replace('public/', '', $path);
        }

        // handle file upload image hero 1
        if ($request->file('hero1')) {
            // hapus image sebelumnya jika ada
            if ($content->hero1) {
                Storage::delete($content->hero1);
            }
            // dapatkan original name
            $originalFileName = $request->file('hero1')->getClientOriginalName();

            // buat nama file unik
            $fileName = time() . '_' . $originalFileName;
            // store ke storage
            $path = $request->file('hero1')->storeAs('public/images', $fileName);
            $validatedData['hero1'] = str_replace('public/', '', $path);
        }

        // handle file upload hero 2
        if ($request->file('hero2')) {
            // hapus image sebelumnya jika ada
            if ($content->hero2) {
                Storage::delete($content->hero2);
            }
            // dapatkan original name
            $originalFileName = $request->file('hero2')->getClientOriginalName();

            // buat nama file unik
            $fileName = time() . '_' . $originalFileName;

            // store ke storage
            $path = $request->file('hero2')->storeAs('public/images', $fileName);
            $validatedData['hero2'] = str_replace('public/', '', $path);
        }

        // update content
        $content->update($validatedData);

        return redirect()->route('content.edit', 1)->with('success', "Content has been updated!");
    }
}
