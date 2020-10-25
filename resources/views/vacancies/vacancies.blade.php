@extends("layouts.master")

@section('title','Job Opening');

@section('content')

<h3>Vacancies / Job Openings</h3>

<table>
<tr>
<th>#</th>
<th>Vacancy</th>
<th>Department</th>
<th>Closing Date</th>
<th>Job Group</th>
<th>Terms</th>
<th></th>
<th></th>

</tr>
<tr>
@foreach($vac as $va):
<td>  #</td>
<td>{{ $va->name}}</td>

<td>{{ $va->department_id}}</td>
<td>{{ $va->closing_date}}</td>
<td>{{ $va->jgroup_id}}</td>
<td>Terms</td>
<td><a href="" >Apply</a></td>
@php $dt = $va->opening_date - $va->closing_date; @endphp
<td>{{ round($dt) }}</td>
</tr>
@endforeach
</table>
@endsection