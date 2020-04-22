@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- chat list section -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chat list</div>
                <div class="panel-body">
                    <div class="chat-item">
                        <img class="img-circle img-responsive" src="{{asset('img/default-user.png')}}">
                        <div class="chat-item-users">Faraz</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat list section -->
        <!-- message section -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chat list</div>
                <div class="panel-body">
                    <div>No chat</div>
                </div>
            </div>
        </div>
        <!-- end message section -->
    </div>
</div>
@endsection
