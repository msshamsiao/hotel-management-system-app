@extends('layouts.admin')

<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
    }

    a {
        background-color: transparent;
    }

    a:active,
    a:hover {
        outline: 0;
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-lg-3, .col-md-6, .col-xs-3 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col-xs-3 {
        float: left;
        width: 20%;
    }

    .col-xs-9 {
        width: 75%;
        float: left;
    }

    .clearfix:after {
        clear: both;
    }

    .clearfix:before,
    .clearfix:after {
        display: table;
        content: " ";
    }

    .panel {
        margin-bottom: 10px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .panel-heading {
        height: 100px;
        background-color: turquoise;
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-green {
        border: 2px #398439;
    }

    .panel-green .panel-heading {
        background-color: #398439;
    }

    .green {
        color: #398439;
    }

    .blue {
        color: #337ab7;
    }

    .red {
        color: #ce7f7f;
    }

    .panel-primary {
        border: 2px #337ab7;
    }

    .panel-primary .panel-heading {
        background-color: #337ab7;
    }

    .yellow {
        color: #ffcc00;
    }

    .panel-yellow {
        border: 2px #ffcc00;
    }

    .panel-yellow .panel-heading {
        background-color: #ffcc00;
    }

    .panel-red {
        border: 2px #ce7f7f;
    }

    .panel-red .panel-heading {
        background-color: #ce7f7f;
    }

    .huge {
        font-size: 30px;
    }

    .panel-heading {
        color: #fff;
    }

    .pull-left {
        float: left !important;
    }

    .pull-right {
        float: right !important;
    }

    .text-right {
        text-align: right;
    }

    .under-number {
        font-size: 20px;
    }

    @media (min-width: 992px) {
        .col-md-6 {
            float: left;
            width: 50%;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-3 {
            float: left;
            width: 20%;
        }
    }
</style>

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bed fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                          <div class='huge'> <!-- add count --> </div>
                                <div class="under-number">Available Rooms</div>
                            </div>
                        </div>
                    </div>
                    <a href="posts.php">
                        <div class="panel-footer">
                            <span class="pull-left blue">View Details</span>
                            <span class="pull-right blue"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        
            <!-- ********************************************************************************************************* -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bed fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                             <div class='huge'><!-- add count --></div>
                              <div class="under-number">Total Rooms</div>
                            </div>
                        </div>
                    </div>
                    <a href="comments.php">
                        <div class="panel-footer">
                            <span class="pull-left green">View Details</span>
                            <span class="pull-right green"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>    
            </div>
        
        
        
        <!-- ********************************************************************************************************* -->
        
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bed fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                            <div class='huge'><!-- add count --></div>
                                <div class="under-number"> Reserved Rooms</div>
                            </div>
                        </div>
                    </div>
                    <a href="users.php">
                        <div class="panel-footer">
                            <span class="pull-left yellow">View Details</span>
                            <span class="pull-right yellow"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        
        <!-- ********************************************************************************************************* -->
        
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'><!-- add count --></div>
                                 <div class="under-number">Check - In</div>
                            </div>
                        </div>
                    </div>
                    <a href="categories.php">
                        <div class="panel-footer">
                            <span class="pull-left red">View Details</span>
                            <span class="pull-right red"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection