@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/sendmail">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"> From : Name : {{ Auth::user()->name }}</label>

                            
                        </div>

                       

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">From : E-Mail Address : {{ Auth::user()->email }}</label>

                           
                        </div>
                       
                               
                            </div>
                        <div class="form-group">
                            <label for="Subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject"  required value="">

                               
                            </div>
                        </div>
					<div class="form-group">
                            <label for="Body" class="col-md-4 control-label">Body </label>

                            <div class="col-md-6">
                                <textarea name="body" class="form-control" required="" rows="8"></textarea> 
                               
                            </div>
                        </div>
                        

                        <
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Mail
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
