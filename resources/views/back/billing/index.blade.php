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
                                    <th>Subscriptions_ID /nama pelanggan</th>
                                    <th>Tanggal_Tagihan </th>
                                    <th>Status_Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($billings as $billing )
                                    {{-- {{ dd( __FILE__,__LINE__, $billings) }} --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $billing->payment->Jumlah_Pembayaran }}</td>
                                    <td>{{ $billing->Tanggal_Tagihan }}</td>
                                    <td>{{ $billing->Status_Pembayaran }}</td>
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