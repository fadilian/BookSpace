<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = "bootstrap";
    public $name, $email, $password, $id, $search;
    public function render()
    {
        $layout['title'] = "Manage Admin";
        if ($this->search != "") {
            $data['user'] = User::where('name','like','%'. $this->search .'%')
            ->orWhere('email','like','%'. $this->search .'%')
            ->paginate(10);
        } else {
            $data['user']=User::where('level', 'admin')->paginate(10);
        }
        
        return view('livewire.user-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ], [
            'name.required' => 'Name cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
        ]);

        User::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> $this->password,
            'level'=> 'admin'
        ]);
        session()->flash('success','Save Successfully!');
        return redirect()->route('user');
    }

    public function edit($id){
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->id = $user->id;
    }

    public function update(){
        $user=User::find($this->id);
        if ($this->password=="") {
            $user->update([
                'name'=> $this->name,
                'email'=> $this->email
            ]);
        } else {
            $user->update([
                'name'=> $this->name,
                'email'=> $this->email,
                'password'=> $this->password
            ]);
        }
        session()->flash('success','Update Successfully!');
        return redirect()->route('user');
    }

    public function confirm($id){
        $this->id = $id;
    }

    public function destroy(){
        $user = User::find($this->id);
        $user->delete();
        session()->flash('success','Delete Successfully!');
        return redirect()->route('user');
    }
}
