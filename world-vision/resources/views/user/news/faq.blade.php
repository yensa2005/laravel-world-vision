@extends('layouts.uer_layout')

@section('title', 'FAQ - World Vision 2 Tek')

@section('content')
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                {{-- <img src="https://images.pexels.com/photos/208494/pexels-photo-208494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""> --}}
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        FAQ
                    </h1>
                    <p class="text-secondary fs-15 mb-3 pb-3">
                        This text can be added in the category Description field in
                        dashboard
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne"><i class="bi bi-question-circle-fill"></i> Is account registration
                                required?</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body my-4 mx-5">
                            Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling
                            or buying themes.
                            This ensures a valid communication channel for all parties involved in any transactions.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTen"><i class="bi bi-question-circle-fill"></i> Can I submit my own Bootstrap templates or themes?</a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body my-4 mx-5">
                            A lot of the content of the site has been submitted by the community. Whether it is a commercial
                            element/template/theme
                            or a free one, you are encouraged to contribute. All credits are published along with the
                            resources.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseEleven"><i class="bi bi-question-circle-fill"></i> What is the currency used for all transactions?</a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body my-4 mx-5">
                            All prices for themes, templates and other items, including each seller's or buyer's account
                            balance are in <strong>USD</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* img{
            width: 100%;
        } */
        .accordion-toggle {
            color: #000;
        }

        .accordion-toggle:hover,
        .accordion-toggle:active {
            color: #0a62fb;
            text-decoration: none;
        }

    </style>
@endsection
