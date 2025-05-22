<div>
    <div class="card">
        <div class="card-header">
          Manage Member
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <input type="text" wire:model.live="search" class="form-control w-25" placeholder="search...">
            <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th>Process</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($member as $data)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->email}}</td>
                            <td>
                                <a href="#" wire:click="edit({{$data->id}})" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editPage">Edit</a>
                                <a href="#" wire:click="confirm({{$data->id}})" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePage">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{$member->links()}}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add</a>
        </div>
    </div>

    <!-- Tambah -->
<div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" wire:model="name" value="{{@old('name')}}">
                @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" wire:model="phone" value="{{@old('phone')}}">
                @error('phone')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" wire:model="email" value="{{@old('email')}}">
                @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" wire:model="password" value="{{@old('password')}}">
                @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" wire:click="store" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit -->
<div wire:ignore.self class="modal fade" id="editPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" wire:model="name" value="{{@old('name')}}">
                @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" wire:model="phone" value="{{@old('phone')}}">
                @error('phone')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" wire:model="email" value="{{@old('email')}}">
                @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" wire:model="password" value="{{@old('password')}}">
                @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" wire:click="update" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete -->
<div wire:ignore.self class="modal fade" id="deletePage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete data?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" wire:click="destroy" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>