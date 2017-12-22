@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')





  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Create News</div>
                                    

                                    <form class="form-horizontal" method="POST" action="{{ URL::to('/admin/news/create') }}" name="form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Title</label>

                            <div class="col-md-12">
                                <input id="tiltle" type=text class="form-control" name="title" value="{{old('title')}}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Body</label>

                            <div class="col-md-12">

                           <div id="summernote"></div>

                           <input id="message" type="hidden" name="message" type="hidden">


                                

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                              

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button id="create" type="button" class="btn btn-success">
                                    Create
                                </button>

                                
                            </div>
                        </div>



                    </form>
                                </div>



                        
                    </div>

                    <div class="col-md-2 col-lg-2"></div>
                </div>
                <!-- Row -->









                <script type="text/javascript">
                  window.onload=function(){

                    //initializion script
                    $('#summernote').summernote({

                        placeholder: 'Type your html based message here',
                        tabsize: 2,
                        height: 300
                    });

                    //html form submit script
                    $('#create').click(function(){

                      //sumernote api to get strinf version of the html code
                      var html_form_content = $('#summernote').summernote('code');

                      document.getElementById('message').value=html_form_content;

                      document.getElementById('create').type='submit';

                      var queryObject=document.querySelector("form[name=form]");

                      //submiting sign in form
                      queryObject.submit();


                    });


                  }
                </script>




















                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
            </div>





@endsection
