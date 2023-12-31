<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>@yield('page')</title>

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col text-center">
                <h2 class=" mt-4">
                    @yield('h1')
                </h2>
            </div>
        </div>

        <div class="w-100 row row-cols-5">


            @foreach ($movies as $singlemovie)
            <div class="col text-center mt-4">
             
                <div class="card p-3 mb-3">

                    <a href="{{ route('index.id', ['id'=>$singlemovie->id]) }}">

                        <h5 class="card-title text-center">
                            {{ $singlemovie->title }}
                        </h5>
    
                        <div class="card-body">
    
                            <div>
                          
                                <h6>
        
                                    Original title:
        
                                </h6>
                                
                                <p>
    
                                    {{$singlemovie->original_title}}
        
                                </p>
    
                            </div>
                            
                            <div>
                      
                                <h6>
        
                                    Nation:
        
                                </h6>
                                
                                <p>
    
                                    {{$singlemovie->nationality}}
        
                                </p>
    
                            </div>
                            
                            <div>
                           
                                <h6>
        
                                    Vote:
        
                                </h6>
                                
                                <p>
    
                                    {{$singlemovie->vote}}
        
                                </p>
                                
                            </div>
    
                        </div>

                    </a>

                </div>

            </div>
            @endforeach

        </div>

    </div>
    
    
</body>

</html>