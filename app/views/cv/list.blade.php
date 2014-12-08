@extends('master')

@section('content')


    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#free_membership" aria-controls="free_membership" role="tab" data-toggle="tab">FREE Membership</a></li>
            <li role="presentation" class="dropdown">
                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">CV Distribution <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                    <li><a href="#bank" tabindex="-1" role="tab" id="bank-tab" data-toggle="tab" aria-controls="dropdown1">Bank</a></li>
                    <li><a href="#2checkout" tabindex="-1" role="tab" id="2checkout-tab" data-toggle="tab" aria-controls="dropdown2">2checkout</a></li>
                </ul>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="free_membership">

                @include('cv._free_membership_table')

            </div>


            <div role="tabpanel" class="tab-pane" id="bank">

                @include('cv._bank_table')

            </div>


            <div role="tabpanel" class="tab-pane" id="2checkout">
                @include('cv._2checkout_table')
            </div>


        </div>

    </div>
       

       
@stop