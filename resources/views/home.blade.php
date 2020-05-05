@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- chat list section -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chat list</div>
                <div id="chat-body" class="panel-body">
                    @include('layouts.chat_list')
                </div>
            </div>
        </div>
        <!-- end chat list section -->
        <!-- message section -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Conversation</div>
                <div id="msg-body" class="panel-body">
                    @include('layouts.msg_list')
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
