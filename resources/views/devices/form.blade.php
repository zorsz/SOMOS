

<x-app-layout x-data="{}">


    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">(se ocupa definir)</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Nombre del Dispositivo</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name" value="{{$devices->name ?? ''}}" id="name"  >
        </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md" for="ipaddresess">Ip Address</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="ipaddresess" value="{{$devices->ipaddresess ?? ''}}" id="ipaddresess" >
        </div>
                        <div>
                            <label class="text-gray-800 font-semibold block my-3 text-md" for="location">Ubicacion</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="location" value="{{$devices->location ?? ''}}" id="location" >
        </div>
                            <div>
                                <label class="text-gray-800 font-semibold block my-3 text-md" for="locationsmaps">Ubicacion en Mapa</label>
                                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="locationsmaps" value="{{$devices->locationsmaps ?? ''}}" id="locationsmaps" >
                                <div>
                                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Usernmae</label>
                                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" value="{{$devices->username ?? ''}}" id="username" >
                                    <div>
                                        <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Nombre del Dispositivo</label>
                                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" value="{{$devices->password ?? ''}}" id="password" >
                            </div>
                        </div>
        </div>
                                <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans" type="submit">Guardar</button>
                                
                                
                                <a href="{{ route('devices.index')}}" type="submit" class="w-full mt-6 mb-3 bg-red-400 rounded-lg px-4 py-2  text-center text-gray-800 tracking-wide font-semibold font-sans">Cancelar
                                </a>
                                
            
        </div>
    </div>

    
    
    

</x-app-layout>
    
    
    

    