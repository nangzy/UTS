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
<nav class="d-flex flex-column"style="background-color: rgb(236, 240, 240); width:100%;">
        
    <div class ="d-flex justify-content-between align-items-center">
        <div class="container-fluid fw-bold fs-4">
            @php($current = now('GMT+7')->toTimeString('minute'))
            @php($hour = explode(':', $current))
            @if((int)$hour[0]<12)
                Good Morning, {{ $user->name }}
            @elseif((int)$hour[0]<18)
                Good Afternoon, {{ $user->name }}  
            @elseif((int)$hour[0]<24)
                Good Evening, {{ $user->name }}  
            @endif
        </div>
        

        <div class="container-fluid text-end fs-3" style="color: {{ $user->colorcode }}" >
            {{ $user->level }}
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

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('successModal'));
            myModal.show();
        });
    </script>
    
    
    <div class="modal" id="successModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Purchase successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            
                    <p>Thank you for your purchase! :)</p>
                    
                </div>
                <div class="modal-footer">
                    <a href="http://127.0.0.1:8000/coffee/{{ $user->id }}" class="btn btn-secondary">Back To Coffee Page</a>
                    <a href="http://127.0.0.1:8000/transaction/{{ $user->id }}" class="btn btn-success">View Transactions</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer bg-gradient p-2 text-light fixed-bottom" style="background-color: {{ $user->colorcode }};">
        © 2023 Kopi Kenangan Company, All Rights Reserved.
    </div>