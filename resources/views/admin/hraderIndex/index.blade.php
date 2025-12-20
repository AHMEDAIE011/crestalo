@extends('layouts.dashboard.app')
@section('title')
    Pages Manage
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
                <h6 class="m-0 font-weight-bold text-primary">Header Managment</h6>
            </div>
        @include('admin.hraderIndex.filter.filter')

            {{-- table data --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title En 1</th>
                                <th>Title Ar 1</th>
                                <th>Title En 2</th>
                                <th>Title Ar 2</th>
                                <th>Descripation En</th>
                                <th>Descripation Ar</th>
                                <th>images</th>
                                <th>Actions</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title En 1</th>
                                <th>Title Ar 1</th>
                                <th>Title En 2</th>
                                <th>Title Ar 2</th>
                                <th>Descripation En</th>
                                <th>Descripation Ar</th>
                                <th>images</th>
                                <th>Actions</th>
                                <th>Created At</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($hraderIndex as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->title_ar }}</td>
                                    <td>{{ $item->title2 }}</td>
                                    <td>{{ $item->title2_ar }}</td>
                                    <td>{{ $item->desc }}</td> 
                                    <td>{{ $item->desc_ar }}</td>
                                    <td><img src="{{ asset($item->image )}}" style="width:100px " class="width-20" alt=""></td>
                                    <td>{{ $item->status == 1 ? 'Active' : 'Not Active' }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            onclick="if(confirm('Do you want to delete the category')){document.getElementById('delete_category_{{ $item->id }}').submit()} return false"><i
                                                class="fa fa-trash"></i></a>
                                        <a href="{{ route('admin.hraderIndex.changeStatus', $item->id) }}"><i
                                                class="fa @if ($item->status == 1) fa-stop @else fa-play @endif"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-edit" data-toggle="modal"
                                                data-target="#edit-category-{{ $item->id }}"></i></a>
                                    </td>
                                </tr>

                                <form id="delete_category_{{ $item->id }}"
                                    action="{{ route('admin.hraderIndex.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                {{-- edit Category modal --}}
                                @include('admin.hraderIndex.edit')
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
        @include('admin.hraderIndex.create')
    </div>
    <!-- /.container-fluid -->
@endsection
