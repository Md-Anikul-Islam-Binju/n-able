@extends('admin.app')
@section('admin_content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">News & Event</a></li>
                        <li class="breadcrumb-item active">News & Event!</li>
                    </ol>
                </div>
                <h4 class="page-title">News & Event!</h4>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-end">
                    <!-- Large modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addNewModalId">Add New</button>
                </div>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Event Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($event as $key=>$eventData)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <img src="{{asset('images/event/'. $eventData->image )}}" alt="Current Image" style="max-width: 50px;">
                            </td>
                            <td>{{$eventData->title}}</td>
                            <td>{{$eventData->event_date}}</td>
                            <td>{{$eventData->event_time}}</td>
                            <td>{{$eventData->status==1? 'Active':'Inactive'}}</td>

                            <td style="width: 100px;">
                                <div class="d-flex justify-content-end gap-1">
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editNewModalId{{$eventData->id}}">Edit</button>
                                    <a href="{{route('event.destroy',$eventData->id)}}"class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#danger-header-modal{{$eventData->id}}">Delete</a>
                                </div>
                            </td>
                            <!--Edit Modal -->
                            <div class="modal fade" id="editNewModalId{{$eventData->id}}" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editNewModalLabel{{$eventData->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="addNewModalLabel{{$eventData->id}}">Edit</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{route('event.update',$eventData->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title En</label>
                                                            <input type="text" id="title" name="title" value="{{$eventData->title}}"
                                                                   class="form-control" placeholder="Enter Title" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="training_date" class="form-label">Training Date</label>
                                                            <input type="date"  name="event_date"
                                                                   class="form-control" placeholder="Enter Training Date" value="{{$eventData->event_date}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="training_time" class="form-label">Training Time</label>
                                                            <input type="time"  name="event_time"
                                                                   class="form-control" placeholder="Enter Training Time" value="{{$eventData->event_time}}">
                                                        </div>
                                                    </div>


                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="example-fileinput" class="form-label">File</label>
                                                            <input type="file" name="image" id="example-fileinput" class="form-control" >
                                                            <img src="{{asset('images/event/'. $eventData->image )}}" alt="File or  Image" class="mt-2" style="max-width: 50px;">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="example-select" class="form-label">Status</label>
                                                            <select name="status" class="form-select">
                                                                <option value="1" {{ $eventData->status === 1 ? 'selected' : '' }}>Active</option>
                                                                <option value="0" {{ $eventData->status === 0 ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label>Details </label>
                                                            <textarea id="summernoteEdit{{ $eventData->id }}" name="details">{{ $eventData->details }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Delete Modal -->
                            <div id="danger-header-modal{{$eventData->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel{{$eventData->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header modal-colored-header bg-danger">
                                            <h4 class="modal-title" id="danger-header-modalLabe{{$eventData->id}}l">Delete</h4>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="mt-0">Are You Went to Delete this ? </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <a href="{{route('event.destroy',$eventData->id)}}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Add Modal -->
    <div class="modal fade" id="addNewModalId" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addNewModalLabel">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" name="title"
                                           class="form-control" placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="training_date" class="form-label">Event Date</label>
                                    <input type="date"  name="event_date"
                                           class="form-control" placeholder="Enter Training Date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="training_time" class="form-label">Event Time</label>
                                    <input type="time"  name="event_time"
                                           class="form-control" placeholder="Enter Training Time">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">File</label>
                                    <input type="file" name="image" id="example-fileinput" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label> Details</label>
                                    <textarea id="summernote" name="details"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
