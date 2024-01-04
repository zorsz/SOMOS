<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIXINGTECH</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<x-app-layout>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Contenedor principal (3/4 de la pantalla) -->
        <div class="w-3/4 bg-white p-2">
          <div class="flex items-center justify-between m-4">
            <h1 class="text-4xl font-bold mb-4 w-5/6">Dispositivo ({{$devices->name ?? ''}})</h1>
    
        </div>
        <div class="grid grid-cols-6 gap-3 m-2 ">
          <div class="col-span-12 sm:col-span-2">
              <div class="p-5 relative  bg-gray-300 border border-gray-800 shadow-lg  rounded-2xl">
               
                
                
                
                 <div class="flex items-center justify-between text-2xl text-black">
                  <span>INFORMACION</span>
                  <div class="flex space-x-4 ">

                    <a href="{{url('/devices/'.$devices->id.'/edit')}}" >
                      <div class="cursor-pointer    shadow duration-150 hover:scale-150 " >

                      <svg class="w- h-6 text-gray-800 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                      </svg>
                      </div>
                    </a>
                    
                    
                    <div class="cursor-pointer   shadow duration-150 hover:scale-150 " >
                    <form action="{{url('/devices/'.$devices->id)}}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" onclick="return confirm('¿Quieres Borrar el Dispositivo {{$devices->name}}?')" value='borras'>
                  
                      <svg class="w-4 h-6 text-gray-800 text-black"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 21">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                      </svg>
                    
                    </form>
                    </div>
                  </div>
            </div>
              
                
                <div class="text-2xl text-blak font-medium leading-8 mt-3" >{{$devices->name ?? ''}}</div>
                <div class="text-sm text-gray-500">{{$devices->location ?? ''}}</div>
              </div>
            </div> 
            
            
          
          <div class="col-span-12 sm:col-span-2">
              <div class="p-7 relative  bg-gray-300 border border-gray-800 shadow-lg  rounded-2xl">
               
                <div class="flex justify-between items-center ">
                  <i class="fab fa-behance text-xl text-gray-400"></i>
                </div>
                <div class="text-2xl text-black">STATUS</div>
                
                <div class="text-2xl text-black font-medium leading-8 mt-3">ONLINE</div>
                <div class="text-sm text-gray-500">{{$devices->ipaddresess ?? ''}}</div>
              </div>
              
            </div>

            <?php
    // URL de la API en la Raspberry Pi
    $apiUrl = 'http://'.$devices->ipaddresess.':5000/api/resources'; // Cambia la IP y el puerto según tu configuración

    // Realizar la solicitud HTTP
    $client = new \GuzzleHttp\Client();
    $response = $client->get($apiUrl);

    // Obtener datos de la respuesta
    $data = json_decode($response->getBody(), true);
?>
            <div class="col-span-12 sm:col-span-2">
                <div class="p-7 relative  bg-gray-300 border border-gray-800 shadow-lg  rounded-2xl">
                 
                  <div class="flex justify-between items-center ">
                    <i class="fab fa-behance text-xl text-gray-400"></i>
                  </div>
                  <div class="text-2xl text-black">RECURSOS RASPBERRY</div>
                  
                  <div class="text-2xl text-black font-medium leading-8 mt-3">CPU- {{ $data['cpu_percent'] }}%</div>
                  <div class="text-sm text-gray-500">MEMORIA RAM- {{ $data['memory_percent'] }}%      MEMORIA DISCO DURO- {{ $data['disk_percent'] }}%</div>
                </div>
                
              </div>

           
            
          </div>

          

          <!-- component -->
<body class="antialiased font-sans bg-gray-200">
  <div class="container mx-auto px-4 sm:px-8">
      <div class="py-8">
          <div>
              <h2 class="text-2xl font-semibold leading-tight">PUBLICIDAD</h2>
          </div>
          
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                      <thead>
                          <tr>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  MEDIA
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Rol
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Created at
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Status
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Vera Carpenter
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 21, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Blake Bowman
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 01, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Dana Moore
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 10, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Suspended</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Alonzo Cox
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Inactive</span>
                                  </span>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div
                      class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                      <span class="text-xs xs:text-sm text-gray-900">
                          Showing 1 to 4 of 50 Entries
                      </span>
                      <div class="inline-flex mt-2 xs:mt-0">
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                              Prev
                          </button>
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                              Next
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
          
        </div>

        <!-- Contenedor a la derecha (1/4 de la pantalla) -->
        <div class="w-1/4 bg-gray-200 p-8">
            <h1 class="text-2xl font-bold mb-4">Contenido Derecho</h1>
            <p>Este es el contenido a la derecha que ocupa 1/4 de la pantalla.</p>
        </div>
    </div>
  </x-app-layout>
</body>
</html>
