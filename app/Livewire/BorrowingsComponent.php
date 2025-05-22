<?php

namespace App\Livewire;

use App\Models\Books;
use App\Models\Borrowings;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BorrowingsComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $id, $user, $books, $date_borrow, $date_return;
    public function render()
    {
        $data['member']= User::where('level', 'member')->get();
        $data['books_id'] = Books::all();
        $data['borrowings'] = Borrowings::paginate(10);
        $layout['title'] = 'Borrowings Book';
        
        return view('livewire.borrowings-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'user'=> 'required',
            'books'=> 'required'
        ],[
            'user.required'=>'Member must be selected!',
            'books.required'=>'Book must be selected!'
        ]);
        $this->date_borrow = date('Y-m-d');
        $this->date_return = date('Y-m-d', strtotime($this->date_borrow.'+7 days'));

        // Kurangi stok buku
        $book = Books::find($this->books);
        if ($book->stock > 0) {
            $book->decrement('stock'); // Kurangi stok buku sebanyak 1
        } else {
            session()->flash('error', 'The selected book is out of stock.');
            return;
        }

        Borrowings::create([
            'user_id'=> $this->user,
            'books_id'=> $this->books,
            'date_borrow'=>$this->date_borrow,
            'date_return'=>$this->date_return,
            'status'=> 'Borrowed'
        ]);
        $this->reset();
        session()->flash('success','Save Successfully!');
        return redirect()->route('borrowings');
    }
    
    public function edit($id){
        $borrowings = Borrowings::find($id);
        $this->id= $borrowings->id;
        $this->user= $borrowings->user_id;
        $this->books= $borrowings->books_id;
        $this->date_borrow= $borrowings->date_borrow;
        $this->date_return= $borrowings->date_return;
    }

    public function update() {
        $borrowings = Borrowings::find($this->id);
    
        // Kembalikan stok buku lama
        $oldBook = Books::find($borrowings->books_id);
        if ($oldBook) {
            $oldBook->increment('stock'); // Tambah stok buku lama sebanyak 1
        }
    
        // Kurangi stok buku baru
        $newBook = Books::find($this->books);
        if ($newBook->stock > 0) {
            $newBook->decrement('stock'); // Kurangi stok buku baru sebanyak 1
        } else {
            session()->flash('error', 'The selected book is out of stock.');
            return;
        }
    
        // Update peminjaman
        $this->date_borrow = date('Y-m-d');
        $this->date_return = date('Y-m-d', strtotime($this->date_borrow . '+7 days'));
        $borrowings->update([
            'user_id' => $this->user,
            'books_id' => $this->books,
            'date_borrow' => $this->date_borrow,
            'date_return' => $this->date_return,
            'status' => 'Borrowed'
        ]);
    
        $this->reset();
        session()->flash('success', 'Update Successfully!');
        return redirect()->route('borrowings');
    }
    

    public function confirm($id){
        $this->id = $id;
    }

    public function destroy() {
        $borrowings = Borrowings::find($this->id);
    
        // Periksa jika status peminjaman masih "Borrowed"
        if ($borrowings->status === 'borrowed') {
            $book = Books::find($borrowings->books_id);
            if ($book) {
                $book->increment('stock'); // Tambah stok buku sebanyak 1
            }
        }
    
        // Hapus data peminjaman
        $borrowings->delete();
    
        $this->reset();
        session()->flash('success', 'Delete Successfully!');
        return redirect()->route('borrowings');
    }
    
    
}
