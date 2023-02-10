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
                                    <th>Users_ID</th>
                                    <th>Pakets_ID </th>
                                    <th>Mulai_Berlangganan</th>
                                    <th>Akhir_Berlangganan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $subscription )
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subscription->Users_ID }}</td>
                                    <td>{{ $subscription->Pakets_ID }}</td>
                                    <td>{{ $subscription->Mulai_Berlangganan }}</td>
                                    <td>{{ $subscription->Akhir_Berlangganan }}</td>
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