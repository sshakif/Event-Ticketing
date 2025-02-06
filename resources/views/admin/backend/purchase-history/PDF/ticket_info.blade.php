<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">
</head>
@foreach($ticketInfo as $ticket)


<body>
    <div  class="ticket d-flex">
        {{-- <div style="flex-direction: column; display:flex;" class="bg-primary">
          <img style="height: 200px" src="{{asset($requestInfo->event->slider_image)}}" alt="">
        </div> --}}

        <div class="bg-danger">
           <h1>Ticket</h1>
<table  class="table">
    <tr>
        <th>Participant</th>
        <td>:</td>
        <td>{{$requestInfo->user_name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>:</td>
        <td>{{$requestInfo->user_email}}</td>
    </tr>

    <tr>
        <th>Ticket ID</th>
        <td>:</td>
        <td>{{$ticket->ticket_id}}</td>
    </tr>
</table>
        </div>
    </div>
</body>
@endforeach
</html>