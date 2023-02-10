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
                                    <th>Billings_ID</th>
                                    <th>Tanggal_Pembayaran </th>
                                    <th>Jumlah_Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment )
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->Billings_ID }}</td>
                                    <td>{{ $payment->Tanggal_Pembayaran }}</td>
                                    <td>{{ $payment->Jumlah_Pembayaran }}</td>
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