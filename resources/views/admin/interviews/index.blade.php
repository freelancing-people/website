@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Interviews</div>

                    <div class="panel-body">
                        Total - {{ $interviews->count() }}
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($interviews as $interview)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $interview->name }}</td>
                                <td>{{ $interview->created_at }}</td>
                                <td>{{ $interview->status }}</td>
                                <td>
                                    <a href="/admin/interviews/{{ $interview->slug }}/edit">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection