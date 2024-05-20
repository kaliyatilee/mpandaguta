@extends('layouts.main')
@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-10">
            <h5>New Student</h5>
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
                    <form class="new_product" method="post" action="/save_students">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            <h4 class="sub-title">Gender</h4>
                            <select class="form-control form-control-default" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="female">female</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Firstname</h4>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Lastname</h4>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>

						<div class="form-group">
                            <h4 class="sub-title">Grade</h4>
                            <select class="form-control form-control-default" id="grade" name="grade">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
								<option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>

						<div class="form-group">
                            <h4 class="sub-title">Class</h4>
                            <select class="form-control form-control-default" id="class" name="class">
                                <option value="orange">Orange</option>
                                <option value="blue">Blue</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                            </select>
                        </div>


                      
                        <div class="form-group">
                            <h4 class="sub-title">Birth Certificate Number</h4>
                            <input type="text" class="form-control" id="birth_certificate_number" name="birth_certificate_number"
                                required>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Guardian Name</h4>
                            <input type="text" class="form-control" id="guardian_name" name="guardian_name" required>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Guardian Phone</h4>
                            <input type="text" class="form-control" id="guardian_phone" name="guardian_phone" required>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Relationship</h4>
                            <select class="form-control form-control-default" id="relationship" name="relationship">
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="sister">Sister</option>
                                <option value="brother">Brother</option>
                                <option value="relative">Relative</option>
                               
                            </select>
                        </div>

                        <div class="form-group">
                            <h4 class="sub-title">Address</h4>
                            <textarea class="form-control max-textarea" id="home_address" name="home_address"
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