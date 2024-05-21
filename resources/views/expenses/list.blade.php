@extends('layouts.main')
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>School Payments </h5>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Data Table</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">School Payments</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>

.description-cell {
    word-wrap: break-word;/* Adjust the max-width as needed */
}

</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">School Payments</h5>
                <div class="ml-auto">
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table id="dt-nested-object" class="table table-sm table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Expense ID</th>
                                <th>Description</th>
								<th>Amount</th>
                                <th>Payment Category</th>
                            </tr>
                        </thead>
                        @foreach($expenses as $nt)
                        <tr>
                            <td>{{ $nt->id}}</td>
                            <td>{{ $nt->description}}</td>
                            <td>{{ $nt->currency}}{{ $nt->amount}}</td>
							<td>{{ $nt->category}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endSection