@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- chat list section -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chat list</div>
                <div id="chat-body" class="panel-body">
                    <div class="chat-item">
                        <img class="img-circle img-responsive chat-item-img" src="{{asset('img/default-user.png')}}">
                        <div class="chat-item-users">Faraz</div>
                        <div class="new-msg-count">12</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat list section -->
        <!-- message section -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Conversation</div>
                <div id="msg-body" class="panel-body">
                    {{--  <div class="no-chat">No chat Selected</div>  --}}
                    <div class="msg-item">
                        <img class="img-circle img-responsive msg-item-img" src="{{asset('img/default-user.png')}}">
                        <div class="msg-item-txt">
                            blah blah blah
                            <div class="msg-item-data">
                                12/2/2017 5:17 AM
                            </div>
                        </div>
                    </div>

                    
                    <div class="msg-item me">
                        <img class="img-circle img-responsive msg-item-img" src="{{asset('img/default-user.png')}}">
                        <div class="msg-item-txt">
                            blah blah blah
                            <div class="msg-item-data">
                                12/2/2017 5:17 AM
                            </div>
                        </div>
                    </div>


                    <div class="msg-item">
                        <img class="img-circle img-responsive msg-item-img" src="{{asset('img/default-user.png')}}">
                        <div class="msg-item-txt">
                            blah blah blah
                            <div class="msg-item-data">
                                12/2/2017 5:17 AM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <form id="create-msg-form">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <fieldset class="form-group">
                                    <textarea id="msg" name="msg" class="form-control" placeholder="Write your Message..">
                                        
                                    </textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <fieldset class="form-group">
                                    <input value="Send" class="btn btn-block" type="button" name="sub" id="create-msg">
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end message section -->
    </div>
</div>
@endsection
