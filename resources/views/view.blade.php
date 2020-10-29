@extends('layouts.app2')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
        	<h1>Datatable</h1>
        	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>HP No</th>
                <th>Name</th>
                <th>Total Finance</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registers as $register)
            <tr>
                <td>{{$register->hp_number}}</td>
                <td>{{$register->hire_name}}</td>
                <td>{{$register->total_finance}}</td>
                <td>{{$register->date}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
<!-- DivTable.com -->
        </div>
    </div>
@endsection