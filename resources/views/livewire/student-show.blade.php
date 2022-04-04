<div>
    @include('livewire.studentModal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <br>
                    @if (session()->has('message'))
                        <h2 class="alert alert-success">{{session('message')}}</h2>
                    @endif
                <div class="card">
                    <div class="card-header">
                        <h1>student crud </h1>

                        <button type="button" class="btn btn-success float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Student
                        </button>
                    </div>
                    <div class="card-body">
                        <input type="search" class="form-control" wire:model="search" placeholder="Search Here By Name or Email" >
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Created_At</th>
                                        <th>Updated_At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($students as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->course}}</td>
                                            <td>{{$student->created_at}}</td>
                                            <td>{{$student->updated_at}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="deleteStudent({{$student->id}})" class="btn btn-danger">Delete</button>
                                                    &nbsp;
                                                    <button wire:click="editStudent({{$student->id}})" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No Records</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
