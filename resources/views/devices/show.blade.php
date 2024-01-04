

<form action="{{url('/devices/'.$devices->id)}}" method="POST" enctype="multipart/form-data">

@csrf
{{method_field('PATCH')}}

@include('devices.deviceinfo');
</form>

