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
                                    <th>kecepatan </th>
                                    <th>harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakets as $paket )
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $paket->Nama }}</td>
                                    <td>{{ $paket->Kecepatan }}</td>
                                    <td>{{ $paket->Harga }}</td>
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