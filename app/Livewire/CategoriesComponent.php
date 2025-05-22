<?php

namespace App\Livewire;

use App\Models\Categories;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CategoriesComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $genre, $id, $search;
    public function render()
    {
        if ($this->search !="") {
            $data['categories']= Categories::where('genre','like','%'. $this->search .'%')->paginate(10);
        } else {
            $data['categories']= Categories::paginate(10);
        }
        $layout['title']='Manage Book Categories';
        return view('livewire.categories-component' , $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'genre'=>'required'
        ], [
            'genre.required' => 'Genre cannot be empty!'
        ]);

        Categories::create([
            'genre'=> $this->genre
        ]);
        $this->reset();
        session()->flash('success','Save Successfully!');
        return redirect()->route('categories');
    }

    public function edit($id){
        $categories = Categories::find($id);
        $this->id = $categories->id;
        $this->genre = $categories->genre;
    }

    public function update(){
        $categories=Categories::find($this->id);
        $categories->update([
            'genre'=> $this->genre
        ]);
        $this->reset();
        session()->flash('success','Update Successfully!');
        return redirect()->route('categories');
    }

    public function confirm($id){
        $this->id = $id;
    }

    public function destroy(){
        $categories = Categories::find($this->id);
        $categories->delete();
        $this->reset();
        session()->flash('success','Delete Successfully!');
        return redirect()->route('categories');
    }
}
