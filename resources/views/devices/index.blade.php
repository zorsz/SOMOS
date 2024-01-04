<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIXINTECH</title>
</head>
<body>
    

<x-app-layout>
    
        <div class="flex items-center justify-between m-4">
            <h1 class="text-4xl font-bold mb-4 w-5/6">Dispositivos</h1>
            <a class="border-2 border-blue-600 rounded-lg px-3 py-2 text-blue-600 cursor-pointer hover:bg-blue-600 hover:text-blue-200 ml-auto " href="{{ url('/devices/create')}}">
    
            
                
                Agregar Dispositivo
                </a>
            
        </div>
    
    
         
        <div class="flex flex-wrap">
            @foreach ($devices as $device)

            
           
              
                    <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md flex-none m-1.5" >
                      <a href="{{url('/devices/'.$device->id)}}" >
                    <div class="overflow-x-hidden rounded-2xl relative">
                      <img class="h-40 rounded-2xl w-full object-cover" src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg" >
                    </a>
                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between ">
                      <div>
                        <p class="text-lg font-semibold text-gray-900 mb-0">{{$device->name}}</p>
                        <p class="text-md text-gray-800 mt-0">{{$device->ipaddresess}}</p>
                      </div>
                      
                    </div>
                  
                  
              
                
              </div>
            
                
            @endforeach
        </div>
          

        
</x-app-layout>

</body>
</html>
