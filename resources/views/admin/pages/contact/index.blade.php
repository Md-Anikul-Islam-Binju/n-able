@extends('admin.app')
@section('admin_content')
    {{-- CKEditor CDN --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Message</a></li>
                        <li class="breadcrumb-item active">Message!</li>
                    </ol>
                </div>
                <h4 class="page-title">Message!</h4>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($message as $key=>$messageData)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$messageData->name}}</td>
                            <td>{{$messageData->email}}</td>
                            <td>{{$messageData->phone}}</td>
                            <td>{{$messageData->message}}</td>
                            <td style="width: 100px;">
                                <div class="d-flex justify-content-end gap-1">
                                    <a href="{{route('message.destroy',$messageData->id)}}"class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#danger-header-modal{{$messageData->id}}">Delete</a>
                                </div>
                            </td>

                            <!-- Delete Modal -->
                            <div id="danger-header-modal{{$messageData->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel{{$messageData->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header modal-colored-header bg-danger">
                                            <h4 class="modal-title" id="danger-header-modalLabe{{$messageData->id}}l">Delete</h4>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="mt-0">Are You Went to Delete this ? </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <a href="{{route('message.destroy',$messageData->id)}}" class="btn btn-danger">Delete</a>
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

@endsection
