<?php
public function update()
{
    $data = request()->validate([
        'title' => 'required',
        'category' => 'required',
        'item' => 'required',
        'image' => ['required','image'],
    ]);

    $imagePath =request('image')->store('uploads','public');

    $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 250);
    $image->save();

    auth()->user()->procedures()->update([
        'title' => $data['title'],
        'category' => $data['category'],
        'item' => $data['item'],
        'image' => $imagePath,
    ]);
}



public function store()
{
    $data = request()->validate([
    'title' => 'required',
    'category' => 'required',
    'item' => 'required',
    'image' => ['required','image'],
    ]);

    $imagePath =request('image')->store('uploads','public');

    $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 250);
    $image->save();

    auth()->user()->procedures()->create([
    'title' => $data['title'],
    'category' => $data['category'],
    'item' => $data['item'],
    'image' => $imagePath,
    ]);

    return redirect('/profile/' . auth()->user()->id);
}