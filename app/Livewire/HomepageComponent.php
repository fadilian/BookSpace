<?php

namespace App\Livewire;

use App\Models\Books;
use App\Models\Borrowings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomepageComponent extends Component
{

    public $user, $name, $books, $availableBooks;
    public function render()
    {
        $data['member']= User::where('level', 'member')->get();
        $data['books_id'] = Books::all();
        $layout['title'] = 'Homepage';
        return view('livewire.homepage-component')->layout('components.layouts.homepage')
        ->layoutData($layout);
    }

    public function mount()
    {
        $loggedInUser = Auth::user(); // Ambil pengguna yang login
        $this->user = $loggedInUser->id; // ID user login
        $this->name = $loggedInUser->name; // Nama user login
        $this->availableBooks = Books::where('stock', '>', 0)->get(); // Buku yang tersedia
    }

    public function store()
    {
        $this->validate([
            'books' => 'required',
        ], [
            'books.required' => 'Book must be selected!',
        ]);

        $dateBorrow = date('Y-m-d');
        $dateReturn = date('Y-m-d', strtotime($dateBorrow . '+7 days'));

        // Kurangi stok buku
        $book = Books::find($this->books);
        if ($book->stock > 0) {
            $book->decrement('stock');
        } else {
            session()->flash('error', 'The selected book is out of stock.');
            return;
        }

        // Buat data peminjaman
        Borrowings::create([
            'user_id' => $this->user,
            'books_id' => $this->books,
            'date_borrow' => $dateBorrow,
            'date_return' => $dateReturn,
            'status' => 'Borrowed',
        ]);

        $this->reset('books'); // Reset input books
        session()->flash('success', 'Borrowing recorded successfully!');
        return redirect()->route('homepage');
    }
}
