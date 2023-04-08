@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <h2>This is the Task view</h2>
            <!-- {{$tasks}} -->
            
            <div id="detail">
                <section class="" style="background-color: rgb(255, 255, 255);">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-10">
                            <div class="card shadow-lg">
                                <div class="card-header p-3"><h5 class="mb-0"><i class="fas fa-tasks me-2" aria-hidden="true"></i>Task List</h5></div>
                                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px; overflow: auto;"><p><strong>Current Tasks (3)</strong></p>
                                        <table class="table mb-0"><thead><tr><th scope="col">Team Member</th><th scope="col">Task</th><th scope="col">Priority</th><th scope="col">Actions</th></tr></thead>
                                            <tbody>
                                                @foreach ($tasks as $task)
                                                    <tr class="fw-normal">
                                                        <th>
                                                            <img src="/static/media/high-prio.8b1a25e1429e813dea42.webp" class="shadow-1-strong rounded-circle" alt="avatar 1" style="width: 32px; height: auto; margin: 5px 0px;"><span class="ms-2  ">{{$task->name}}</span>
                                                        </th><td class="align-middle  "><span>{{$task->description}}</span>
                                                        </td>
                                                        <td class="align-middle">
                                                            <h6 class="mb-0">
                                                                <small><span class="badge bg-danger">{{$task->priority}}</span></small></h6></td>
                                                        <td class="align-middle"><a href="#!" data-mdb-toggle="tooltip" title="Mark task as complete"><i class="me-3 fas fa-check text-success" aria-hidden="true"></i></a><a href="#!" data-mdb-toggle="tooltip" title="Delete current task"><i class="fas fa-trash-alt text-danger" aria-hidden="true"></i></a>
                                                        </td>

                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    <p class="mt-4"><strong>Completed Tasks (0)</strong></p>
                                    <p class="text-center">No items to show</p>
                                </div>
                                <div class="card-footer text-end p-3">
                                    <form>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Priority</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li><li><a class="dropdown-item" href="#">Another action</a></li><li><a class="dropdown-item" href="#">Something else here</a></li><li><hr class="dropdown-divider"></li><li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                            <input type="text" class="form-control" placeholder="Add a new task item ..." value="">
                                            <button class="btn btn-primary">Add Task</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
                
        </div>
    </div>
</div>

@endsection('content')
