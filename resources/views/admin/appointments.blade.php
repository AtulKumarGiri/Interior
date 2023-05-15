@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Appointments</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Appointments List
            </div>
            <div class="card-body">
                <table class="w-100" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Requirements</th>
                            <th>Request Created at</th>
                        </tr>
                    </thead>                  
                    <tbody>
                        @foreach($showAppointment as $appointlist)
                        <tr>
                            <td>{{$appointlist->name}}</td>
                            <td>{{$appointlist->email}}</td>
                            <td>{{$appointlist->mobile}}</td>
                            <td>{{$appointlist->address}}</td>
                            <td>{{$appointlist->requirement}}</td>
                            <td>{{$appointlist->created_at}}</td>
                        </tr> 
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection