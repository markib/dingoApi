<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="dist/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
        <link href="dist/css/ripples.min.css" rel="stylesheet" type="text/css">
        {{--<style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>--}}
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="row">

                    <div class="col-md-4">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Login</h3>
                            </div>

                            <div class="panel-body">

                                    <div class="well">
                            {{--    {{ Form::open(['route' => 'login', 'class' => 'form-horizontal']) }}--}}
                                {{ Form::open(array('action' => 'UserController@Login', 'class' => 'form-horizontal')) }}
                                     <div class="form-group label-floating is-empty">
                                    {{ Form::label('email','Email',  ['class' => 'col-md-4 control-label','for'=>'email']) }}

                                        {{ Form::input('email', 'email','',['class'=>'form-control']) }}
                                    </div><!--col-md-6-->
                                </div><!--form-group-->


                                {{ Form::close() }}
                                        </div><!-- well -->


                            </div><!-- panel body -->

                        </div><!-- panel -->

                    </div><!-- col-md-8 -->

                </div><!-- row -->

            </div>
        </div>
        {{--{{$data->users[0]->name}}--}}

       {{-- <button class="ajax">Click Here</button>--}}
    </body>
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(".ajax").click(function(){
            $.ajax({
                url: "http://localhost:8005/api/free",
                dataType: "json",
                type: "GET",

                success: function (data) {
                    alert(data);
                },
                error: function() {
                    alert('Error.');
                }
            });
        });
    </script>--}}
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/material.min.js"></script>
    <script type="text/javascript" src="dist/js/ripples.min.js"></script>
    <script type="text/javascript">
        $.material.init()
    </script>
</html>
