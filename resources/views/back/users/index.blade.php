@extends('back.layouts.main')
@section('content')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama</th>
                                    <th>email</th>
                                    <th>alamat</th>
                                    <th>Paket kecepatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->Nama }}</td>
                                    <td>{{ $user->Email }}</td>
                                    <td>{{ $user->Alamat }}</td>
                                    <td>{{ $user->subscription->Mulai_Berlangganan }}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection