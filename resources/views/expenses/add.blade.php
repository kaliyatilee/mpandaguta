@extends('layouts.main')
@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-10">
            <h5>New Payment</h5>
        </div>
        <div class="col-md-2">
        </div> 
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="new_payment" method="post" action="/save_expense">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
    <h4 class="sub-title">Description</h4>
	<input type="text" id="description" name="description" class="form-control"/>
</div>       

                        <div class="form-group">
                            <h4 class="sub-title">Category</h4>
							<select class="form-control" name="category" id="category">
                            <option value = "transport">Transport</option>
							<option value = "fuel">Fuel</option>
							<option value = "other">Other</option>
</select>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Currency</h4>
							<select class="form-control" name="currency" id="currency">
                            <option value = "zig">zig</option>
							<option value = "usd">usd</option>
							<option value = "rand">rand</option>
</select>
                        </div>
						<div class="form-group">
                            <h4 class="sub-title">Amount</h4>
							<input type="number" id="amount" name="amount" class="form-control"/>
							<input type="hidden" id="class" name="class" value="1"/>
                        </div>
						<div class="form-group">
                            <h4 class="sub-title">Date</h4>
							<input type="date" id="date" name="date" class="form-control"/>
                        </div>
						

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="dissmiss" class="btn btn-danger">Cancel</button>
                        </div>

                </div>


            </div>
        </div>

    </div>
    </div>
</section>
@endsection