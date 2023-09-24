<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.message', [
            'messages' => Message::latest()->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $name)
    {
        Message::destroy($name->id);

        return back()->with('messageDeleted', 'Pesan Dengan Nama "' . $name->name . '" Berhasil Dihapus!');
    }
}
