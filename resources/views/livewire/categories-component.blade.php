<div>
    <div class="card">
        <div class="card-header">
          Manage Book Categories
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
                    <th scope="col">Genre</th>
                    <th>Process</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $data)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->genre}}</td>
                            <td>
                                <a href="#" wire:click="edit({{$data->id}})" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editPage">Edit</a>
                                <a href="#" wire:click="confirm({{$data->id}})" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePage">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{$categories->links()}}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add</a>
        </div>
    </div>

    <!-- Tambah -->
<div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" class="form-control" wire:model="genre" value="{{@old('genre')}}">
                @error('genre')
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" class="form-control" wire:model="genre" value="{{@old('genre')}}">
                @error('genre')
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
          <h5 class="modal-title" id="exampleModalLabel">Delete Categories</h5>
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