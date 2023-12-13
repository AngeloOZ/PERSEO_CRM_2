@extends('layout.wrapperplain') @section('content')
<!-- main content -->
<div class="container-fluid">

    <!--HEADER-->
    <div class="setup-header">
        <div class="x-logo font-16 font-weight-600">GROW CRM - SETUP</div>
    </div>
    <div class="setup-wrapper">
        <!--PROGRESS-->
        <div class="setup-progress row">

            <!--step 2 -->
            <div class="col-2 steps">
                <div class="x-step setup-steps" id="steps-2">1</div>
                <div class="x-line">Requirements</div>
            </div>
            <!--step 3-->
            <div class="col-2 steps">
                <div class="x-step setup-steps" id="steps-3">2</div>
                <div class="x-line">Database</div>
            </div>
            <!--step 4-->
            <div class="col-2 steps">
                <div class="x-step setup-steps" id="steps-4">3</div>
                <div class="x-line">Settings</div>
            </div>
            <!--step 5-->
            <div class="col-2 steps">
                <div class="x-step setup-steps" id="steps-5">4</div>
                <div class="x-line">Admin User</div>
            </div>
            <!--step 6-->
            <div class="col-2 steps">
                <div class="x-step setup-steps" id="steps-6">5</div>
                <div class="x-line">Finish</div>
            </div>
        </div>

        <!--CONTENT-->
        <div class="setup-content" id="setup-content">
            @include('pages.setup.requirements')
        </div>

    </div>

</div>
<!--main content -->
@endsection