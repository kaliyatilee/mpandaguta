@extends('layouts.main')
@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-10">
            <h5>New Notice</h5>
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
                    <form class="new_product" method="post" action="/save_notices">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            <h4 class="sub-title">Title</h4>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>            

                        <div class="form-group">
                            <h4 class="sub-title">Description</h4>
                            <textarea class="form-control max-textarea" id="description" name="description"
                                maxlength="255" rows="4"></textarea>
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