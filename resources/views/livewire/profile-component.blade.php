<div>
    <div class="main-content">
        <div class="tittle">
            <h1>PROFILE MEMBER</h1>
        </div>

        <div class="card-profile">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="card-inside">
                <div class="mb-3 row">
                    <label for="userName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="userName" value="{{ $name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="userEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" readonly class="form-control" id="userEmail" value="{{ $email }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="userPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="userPhone" value="{{ $phone }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Borrowings Table -->
        <div class="tittle">
            <h1>BORROWING HISTORY</h1>
        </div>
        <div class="card-history">
            <div class="card-inside">
                @if ($borrowings->isEmpty())
                    <p>No borrowings found.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#88c9ba">
                                <tr>
                                    <th>No</th>
                                    <th>Book Title</th>
                                    <th>Date Borrowed</th>
                                    <th>Date Return</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrowings as $index => $borrowing)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $borrowing->books->title }}</td>
                                        <td>{{ $borrowing->date_borrow }}</td>
                                        <td>{{ $borrowing->date_return }}</td>
                                        <td>{{ ucfirst($borrowing->status) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <!-- Modal Edit -->
        <div wire:ignore.self class="modal fade" id="editPage" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" wire:model="name">
                                @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" wire:model="phone">
                                @error('phone') <small class="form-text text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" wire:model="email">
                                @error('email') <small class="form-text text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" wire:model="password">
                                @error('password') <small class="form-text text-danger">{{ $message }}</small> @enderror
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

    </div>
</div>