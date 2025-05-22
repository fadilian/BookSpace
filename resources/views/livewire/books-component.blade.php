<div>
    <div class="card">
        <div class="card-header">
          Manage Books
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
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">Stock</th>
                    <th>Process</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $data)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->title}}</td>
                            <td>{{$data->categories->genre}}</td>
                            <td>{{$data->author}}</td>
                            <td>{{$data->year}}</td>
                            <td>{{$data->stock}}</td>
                            <td>
                                <a href="#" wire:click="edit({{$data->id}})" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editPage">Edit</a>
                                <a href="#" wire:click="confirm({{$data->id}})" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePage">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{$books->links()}}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add</a>
        </div>
    </div>

    <!-- Tambah -->
<div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" wire:model="title" value="{{@old('title')}}">
                @error('title')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Category</label>
                <select wire:model="categories" class="form-control">
                    <option value="">--Select--</option>
                    @foreach ($category as $data)
                        <option value="{{$data->id}}">{{$data->genre}}</option>
                    @endforeach
                </select>
                @error('categories')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" wire:model="author" value="{{@old('author')}}">
                @error('author')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" wire:model="year" value="{{@old('year')}}">
                @error('year')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" class="form-control" wire:model="stock" value="{{@old('stock')}}">
                @error('stock')
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Books</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" wire:model="title" value="{{@old('title')}}">
                @error('title')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Category</label>
                <select wire:model="categories" class="form-control">
                    <option value="">--Select--</option>
                    @foreach ($category as $data)
                        <option value="{{$data->id}}">{{$data->genre}}</option>
                    @endforeach
                </select>
                @error('categories')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" wire:model="author" value="{{@old('author')}}">
                @error('author')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" wire:model="year" value="{{@old('year')}}">
                @error('year')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" class="form-control" wire:model="stock" value="{{@old('stock')}}">
                @error('stock')
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
          <h5 class="modal-title" id="exampleModalLabel">Delete Books</h5>
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