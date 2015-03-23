@extends('app')

@section('content')

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Downloads</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title --> 

@if (Auth::guest())
<hr style="padding-top:100px;">
<h1>Please login to download<br><a data-toggle="modal" href="#loginForm">Login</a></h1>
<hr style="padding-bottom: 220px;">
@else
<div style="padding-top:200px;">
	</div>
<button type="Download" class="btn btn-primary btn-large">Download</button>
<div style="padding-top:240px;">
	</div>
@endif