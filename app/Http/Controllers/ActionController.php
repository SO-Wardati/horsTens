<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Service;
use App\Models\Massage;
use App\Models\Event;
use App\Models\Formula;
use Illuminate\Support\Facades\Storage;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ActionController extends Controller
{

    public function addNewMassage(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|min:0|max:5048'
        ]);
        $filename = time() . '.' . $request->image->extension();

        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );

        $massage = new Massage();
        $massage->image_path = $path;
        $massage->name = $request->name;
        $massage->description = $request->description;
        $massage->slogan = $request->slogan;
        $massage->timer = $request->timer;
        $massage->price = $request->price;
        $massage->save();
        return redirect('/listeMassages');
    }

    public function updateMassage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|min:0|max:5048'
        ]);
        $filename = time() . '.' . $request->image->extension();

        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );

        $massage = Massage::findOrFail($id);
        Storage::delete('public/' . $massage->image_path);
        $massage->image_path = $path;
        $massage->name = $request->name;
        $massage->description = $request->description;
        $massage->slogan = $request->slogan;
        $massage->timer = $request->timer;
        $massage->price = $request->price;
        $massage->save();

        return redirect('/listeMassages');
    }

    public function deleteMassage(Request $request)
    {
        $massage = Massage::find($request->id);
        Storage::delete('public/' . $massage->image_path);
        $massage->delete();
        return redirect('/listeMassages');
    }

    public function addNewEvent(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|min:0|max:5048'
        ]);
        $filename = time() . '.' . $request->image->extension();

        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );

        $event = new Event();
        $event->image_path = $path;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->place = $request->place;
        $event->save();
        return redirect('/');
    }
}
