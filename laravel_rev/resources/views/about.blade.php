{{-- using subview using include --}}
{{-- @include('common.header')  --}}
{{-- now passing one data of one subview to other page --}}
{{-- using includeif so that it gives nothing instead of error --}}
{{-- @includeif('common.inner',['page'=>"This is passed from about Page in subview inner"]) --}}
{{-- passing class also with the component --}}
<x-message-banner msg="about user Login successful"/>
<h1>About Page</h1>
