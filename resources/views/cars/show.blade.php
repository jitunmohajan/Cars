@extends('layouts.app')

@section('content')
        <div class="m-auto w-4/5 py-24">
                <div class="text-center">
                    <h1 class="test-5xl uppercase bold">
                        {{ $car->name }}
                    </h1>
                </div>    
        </div>

        <div class="w-5/6 py-10">
           
                <div class="m-auto">
                  
                    <span class="uppercase text-orange-600 font-bold text-xs italic">
                        Founded: {{ $car->founded }}
                    </span>

                   

                    <p class="text-lg text-gray-700">
                        {{ $car->description }}
                    </p>

                    <hr class="mt-4 mb-8">

                    <p class="text-lg text-gray-700">
                        Models:
                    </p>

                    @forelse ($car->carModels as $model)
                        <li>
                            {{ $model['model_name'] }}
                        </li>
                    @empty
                        <li>No models found</li>
                    @endforelse

                </div>

               
                            
                               <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-red-500">
                                Back &rarr;
                            </a>
 
                            
                        
                
         

        </div>
@endsection