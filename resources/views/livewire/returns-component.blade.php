<div>
    <div class="card">
        <div class="card-header">
            Returns Book
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            {{-- <input type="text" wire:model.live="search" class="form-control w-25" placeholder="search..."> --}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Member</th>
                            <th scope="col">Books</th>
                            <th scope="col">Date Borrow</th>
                            <th scope="col">Date Return</th>
                            <th>Process</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($borrowings as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->books->title}}</td>
                                <td>{{$data->date_borrow}}</td>
                                <td>{{$data->date_return}}</td>
                                <td>
                                    <a href="#" wire:click="select({{$data->id}})" class="btn btn-sm btn-success"
                                        data-toggle="modal" data-target="#select">Select</a>
                                    {{-- <a href="#" wire:click="edit({{$data->id}})" class="btn btn-sm btn-info"
                                        data-toggle="modal" data-target="#editPage">Edit</a>
                                    <a href="#" wire:click="confirm({{$data->id}})" class="btn btn-sm btn-danger"
                                        data-toggle="modal" data-target="#deletePage">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$borrowings->links()}}
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            History Returned Books
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            {{-- <input type="text" wire:model.live="search" class="form-control w-25" placeholder="search..."> --}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Borrowings ID</th>
                            <th scope="col">Date Return</th>
                            <th scope="col">Penalty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($returns as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->borrowings_id}}</td>
                                <td>{{$data->date_return}}</td>
                                <td>{{$data->penalty}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$returns->links()}}
            </div>
        </div>
    </div>

    {{-- process return book --}}
    <div wire:ignore.self class="modal fade" id="select" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Returns Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Member
                        </div>
                        <div class="col-md-8">
                            : {{$member}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Book Title
                        </div>
                        <div class="col-md-8">
                            : {{$title}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Return Date
                        </div>
                        <div class="col-md-8">
                            : {{$dateReturn}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Today's Date
                        </div>
                        <div class="col-md-8">
                            : {{date('Y-m-d')}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Penalty
                        </div>
                        <div class="col-md-8">
                            : @if ($this->status == true)
                                Yes
                            @else
                                No
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Late For
                        </div>
                        <div class="col-md-8">
                            : {{$long}} Days
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Amount of Penalty
                        </div>
                        <div class="col-md-8">
                            : {{$long * 2000}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:click="store" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</div>