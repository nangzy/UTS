<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS Nicholaus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body> 
    <nav class="d-flex flex-column"style="background-color: rgb(236, 240, 240); width:100%;">
        
        <div class ="d-flex justify-content-between align-items-center">
            <div class="container-fluid fw-bold fs-4">
                @php($current = now('GMT+7')->toTimeString('minute'))
                @php($hour = explode(':', $current))
                @if((int)$hour[0]<12)
                    Good Morning, @yield('nama')
                @elseif((int)$hour[0]<18)
                    Good Afternoon, @yield('nama')  
                @elseif((int)$hour[0]<24)
                    Good Evening, @yield('nama')  
                @endif
            </div>
            
    
            <div class="container-fluid text-end fs-3" style="color: @yield('color')" >
                @yield('level')
            </div>
        </div>
        
        <div class="d-flex center justify-content-around fs-5 mt-3 border-bottom border-dark-subtle pb-2" >
            <div class="nav-item">
                <a class="nav-link" href="/{{ $user->id }}"><img src="/sources/profile.png" alt="profile"  style="width:30%"> Profile</a>
            </div>
            <div class="nav-item">
                <a class="nav-link" href="/transaction/{{ $user->id }}"> <img src="/sources/transaction.png" alt="transaction" style="width: 26%"> Transaction</a>
            </div>
              
        </div>
    
        
      </nav>
    <div class="container-fluid mt-4">
        @yield('content')
    </div>

    <div class="card-footer bg-gradient p-2 text-light" style="background-color: @yield('color')">
        © 2023 Kopi Kenangan Company, All Rights Reserved.
    </div>
</body>
</html>
