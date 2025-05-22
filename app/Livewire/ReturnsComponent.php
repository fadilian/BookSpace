<?php

namespace App\Livewire;

use App\Models\Borrowings;
use App\Models\Books;
use App\Models\Returns;
use DateTime;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ReturnsComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $id, $title, $member, $dateReturn, $long, $status;

    public function render()
    {
        $layout['title'] = 'Returns Book';
        $data['borrowings'] = Borrowings::where('status', 'Borrowed')->paginate(10);
        $data['returns'] = Returns::paginate(10);
        return view('livewire.returns-component', $data)->layoutData($layout);
    }

    public function select($id){
        $borrowings = Borrowings::find($id);
        $this->title = $borrowings->books->title;
        $this->member = $borrowings->user->name;
        $this->dateReturn = $borrowings->date_return;
        $this->id = $borrowings->id;

        $return = new DateTime($this->dateReturn);
        $today = new DateTime();
        $difference = $today->diff($return);
        
        // Hitung lama keterlambatan hanya jika hari ini setelah dateReturn
        if ($difference->invert == 1) {
            $this->status = true; // Terlambat
            $this->long = $difference->d; // Jumlah hari keterlambatan
        } else {
            $this->status = false; // Tidak terlambat
            $this->long = 0;
        }
    }

    public function store() {
        $penalty = 0; // Default denda adalah 0
    
        if ($this->status) {
            // Jika terlambat
            $penalty = $this->long * 2000; // Hitung denda berdasarkan jumlah hari keterlambatan
        } else {
            // Jika tidak terlambat
            $penalty = 0; // Tidak ada denda
        }
    
        $borrowings = Borrowings::find($this->id);
        $book = $borrowings->books;
    
        Returns::create([
            'borrowings_id' => $this->id,
            'date_return' => date('Y-m-d'),
            'penalty' => $penalty
        ]);
    
        // Tambah stok buku
        $book->increment('stock');
    
        $borrowings->update([
            'status' => 'Returned'
        ]);
    
        $this->reset();
        session()->flash('success', 'Process Successfully!');
        return redirect()->route('returns');
    }
    
}
