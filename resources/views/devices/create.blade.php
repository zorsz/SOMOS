

<form action="{{url('/devices')}}" method="post" enctype="multipart/form-data">
@csrf
@include('devices.form')

</form>

