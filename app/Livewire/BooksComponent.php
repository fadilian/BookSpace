<?php

namespace App\Livewire;

use App\Models\Books;
use App\Models\Categories;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BooksComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $title, $categories, $author, $year, $stock, $id, $search;
    public function render()
    {
        if ($this->search !="") {
            $data['books'] = Books::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('author', 'like', '%' . $this->search . '%')
            ->orWhere('year', 'like', '%' . $this->search . '%')
            ->orWhereHas('categories', function ($query) {
                $query->where('genre', 'like', '%' . $this->search . '%');
            })
            ->paginate(10);

        } else {
            $data['books']= Books::paginate(10);
        }
        
        $data['category']= Categories::all();
        $layout['title'] = 'Manage Books';
        return view('livewire.books-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'title'=> 'required',
            'categories'=> 'required',
            'author'=> 'required',
            'year'=> 'required',
            'stock'=> 'required'
        ], [
            'title.required' => 'Title cannot be empty!',
            'categories.required' => 'Categories cannot be empty!',
            'author.required' => 'Author cannot be empty!',
            'year.required' => 'Year cannot be empty!',
            'stock.required' => 'Stock cannot be empty!'
        ]);

        Books::create([
            'title'=> $this->title,
            'categories_id'=> $this->categories,
            'author'=> $this->author,
            'year'=> $this->year,
            'stock'=> $this->stock
        ]);
        $this->reset();
        session()->flash('success','Save Successfully!');
        return redirect()->route('books');
    }

    public function edit($id){
        $books = Books::find($id);
        $this->id = $books->id;
        $this->title = $books->title;
        $this->categories = $books->categories->id;
        $this->author = $books->author;
        $this->year = $books->year;
        $this->stock = $books->stock;
    }

    public function update(){
        $books= Books::find($this->id);
        $books->update([
            'title'=> $this->title,
            'categories_id'=> $this->categories,
            'author'=> $this->author,
            'year'=> $this->year,
            'stock'=> $this->stock
        ]);
        $this->reset();
        session()->flash('success','Update Successfully!');
        return redirect()->route('books');
    }

    public function confirm($id){
        $this->id = $id;
    }

    public function destroy(){
        $books = Books::find($this->id);
        $books->delete();
        $this->reset();
        session()->flash('success','Delete Successfully!');
        return redirect()->route('books');
    }
}
