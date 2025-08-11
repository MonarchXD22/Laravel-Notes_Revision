<!-- Understanding .blade syntax its a templating engine used to simplify the php and is fater then php -->
<!-- examples of blade syntax -->
<!-- normal tags and variables -->
{{-- <h1>{{$name}}</h1>
<h1>{{$users[2]}}</h1>
<!-- if/else -->
@if($name=='anil')
<h2>This is Anil</h2>
@elseif($name=='Ayush')
<h2>This is Ayush</h2>
@else
<h2>others</h2>
@endif
<!-- loops -->
<div>
    @foreach ($users as $user)
        <h5>{{$user}}</h5>
    @endforeach
</div>

<div>
    @for($i=0;$i<10;$i++)
    <h3>{{$i}}</h3>
    @endfor
</div> --}}

{{-- concept-> Subview --}}
{{-- passing value from main ciew to subview --}}
{{-- @include('common.header')

@include('common.inner',['page'=>"This is passed from Home Page"]) --}}

{{-- components --}}
<x-message-banner msg="user Login Successful" class="success"/>
<x-message-banner msg="user SignUp Successful" class="success"/>
<br>
<x-message-banner msg="Enter correct password" class="error"/>

<h1>Home Page </h1>

<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 5px;
        display: inline-block;
        margin: 10px;
    }

    .error{
        background: rgb(255, 151, 151);
        color: red;
        padding: 5px;
        display: inline-block;
        margin: 10px;
    }
</style>