@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">{{ __('Utilisateurs') }}</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">
                          <button type="button" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-add-circle-line"></i> Nouveau utilisateur</button>
                          <br><br>
                        </h4>

                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Roles</th>
                                  <th width="280px">Action</th>
                              </tr>
                            </thead>
                        
                        
                          <tbody>
                              @foreach ($data as $key => $user)
                                  <tr>
                                      <td>{{ $user->id }}</td>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>
                                          @if(!empty($user->getRoleNames()))
                                              @foreach($user->getRoleNames() as $val)
                                                  <label class="badge badge-info">{{ $val }}</label>
                                              @endforeach
                                          @endif
                                      </td>
                                      <td>
                                        <div class="btn-group">
                                          <a class="btn btn-primary btn-sm" href="{{ route('users.show',$user->id) }}"><i class=" ri-eye-line"></i></a>
                                          @can('user-edit')
                                              <a class="btn btn-warning btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="ri-edit-fill"></i></a>
                                          @endcan
                                        </div>
                                          @can('user-delete')
                                              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                              {!! Form::close() !!}
                                          @endcan
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                        </table>
                    
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container-fluid -->
</div>
@endsection