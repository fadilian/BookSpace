<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MemberComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $phone, $email, $password, $id, $search; 
    public function render()
    {
        if ($this->search != "") {
            $data['member'] = User::where('name','like','%'. $this->search .'%')
            ->orWhere('email','like','%'. $this->search .'%')
            ->paginate(10);
        } else {
            $data['member']=User::where('level', 'member')->paginate(10);
        }
        
        $layout['title']= 'Manage Member';
        return view('livewire.member-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            'phone'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ], [
            'name.required' => 'Name cannot be empty!',
            'phone.required' => 'Phone cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
        ]);

        User::create([
            'name'=> $this->name,
            'phone'=> $this->phone,
            'email'=> $this->email,
            'password'=> $this->password,
            'level'=> 'member'
        ]);
        session()->flash('success','Save Successfully!');
        return redirect()->route('member');
    }

    public function edit($id){
        $member = User::find($id);
        $this->name = $member->name;
        $this->phone = $member->phone;
        $this->email = $member->email;
        $this->id = $member->id;
    }

    public function update(){
        $member=User::find($this->id);
        if ($this->password=="") {
            $member->update([
                'name'=> $this->name,
                'phone'=> $this->phone,
                'email'=> $this->email
            ]);
        } else {
            $member->update([
                'name'=> $this->name,
                'phone'=> $this->phone,
                'email'=> $this->email,
                'password'=> $this->password
            ]);
        }
        session()->flash('success','Update Successfully!');
        return redirect()->route('member');
    }

    public function confirm($id){
        $this->id = $id;
    }

    public function destroy(){
        $member = User::find($this->id);
        $member->delete();
        session()->flash('success','Delete Successfully!');
        return redirect()->route('member');
    }
}
