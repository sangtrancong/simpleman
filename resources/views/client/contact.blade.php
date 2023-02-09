@extends('layout.index')
@section('title', 'About')
@section('content')
    <div class="top-space">

    </div>
    <div class="child-content">
        <div class="container" style="padding:0 30px;text-align: justify;">
            <div class="row" >
                <div class="col-sm-12">
                    <img style="margin: auto;width: 50%; display: block" src="/storage/images/Contact.png" alt="">
                </div>
                <div class="col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span><i class="fa fa-user"></i></span></span>
                                    </div>
                                    <input type="text" disabled class="form-control" value="SimplemanPlus Group">

                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span><i class="fa fa-phone"></i></span></span>
                                    </div>
                                    <input type="text" disabled class="form-control" value="+84 963 262 036">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span><i class="fa fa fa-envelope"></i></span></span>
                                    </div>
                                    <input type="text" disabled class="form-control" value="simplemanplusvn@gmail.com">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span><i class="fa fa-map-marker"></i></span></span>
                                    </div>
                                    <input type="text" disabled class="form-control"
                                        value="503 Nam Ky Khoi Nghia Street, 3 District, HCM City">
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="grid-icon-contact">
                                <div class="icon-lg"><a target="_blank"
                                    href="#"><i
                                        class="fa fa-facebook" style="color: white"></i></a></div>
                                 <div class="icon-lg"><a target="_blank"
                                    href="#"><i
                                        class=" fa fa-youtube" style="color: white"></i></a></div>
                            </div>

                        </div>

                      </form>
                </div>
            </div>
        </div>

    </div>

@endsection
