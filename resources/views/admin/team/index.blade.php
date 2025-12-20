@extends('layouts.dashboard.app')
@section('title')
    team
@endsection
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is </a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Team Managment</h6>
            </div>
        @include('admin.team.filter.filter')

            {{-- table data --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Jop</th>
                                <th>phone</th>
                                <th>images</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Gmail</th>
                                <th>Instagram</th>
                                <th>Show in home page</th>
                                <th>status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Jop</th>
                                <th>phone</th>
                                <th>images</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Gmail</th>
                                <th>Instagram</th>
                                <th>Show in home page</th>
                                <th>status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($team as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->jop }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td><img src="{{ asset($item->image )}}" style="width:50px "  alt=""></td>
                                    <td>{{ $item->facebook }}</td>
                                    <td>{{ $item->twitter }}</td> 
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->insagram }}</td>
                                    <td>{{ $item->show == 1 ? 'Active' : 'Not Active' }}</td>
                                    <td>{{ $item->status == 1 ? 'Active' : 'Not Active' }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            onclick="if(confirm('Do you want to delete the category')){document.getElementById('delete_category_{{ $item->id }}').submit()} return false"><i
                                                class="fa fa-trash"></i></a>
                                        <a href="{{ route('admin.team.changeStatus', $item->id) }}"><i
                                                class="fa @if ($item->status == 1) fa-stop @else fa-play @endif"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-edit" data-toggle="modal"
                                                data-target="#edit-category-{{ $item->id }}"></i></a>
                                    </td>
                                </tr>

                                <form id="delete_category_{{ $item->id }}"
                                    action="{{ route('admin.team.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                {{-- edit Category modal --}}
                                @include('admin.team.edit')
                                {{-- end edit category modal --}}
                            @empty
                                <tr>
                                    <td class="alert alert-info" colspan="6"> No categories</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        {{-- modal add new category --}}
        @include('admin.team.create')
    </div>
    <!-- /.container-fluid -->
@endsection
