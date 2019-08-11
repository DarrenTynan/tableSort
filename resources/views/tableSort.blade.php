@extends('layouts.master')

@section('content')
<h1>Table Sort Example</h1>
<br>

<div class="table">
    <table class='table-bordered'>
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('username')</th>
            <th>@sortablelink('Department')</th>
            <th>@sortablelink('DOB')</th>
            <th>@sortablelink('Age')</th>
        </tr>

        </thead>
        <tbody>
            @if(count($staff) > 0)
                @foreach($staff as $person)
                <tr>
                    <td>{{ $person['id'] }}</td>
                    <td>{{ $person['username'] }}</td>
                    <td>{{ $person['department'] }}</td>
                    <td>{{ $person['dob'] }}</td>
                    <td>{{ $person['age'] }}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
{!! $staff->appends(\Request::except('page'))->render() !!}
@endsection
