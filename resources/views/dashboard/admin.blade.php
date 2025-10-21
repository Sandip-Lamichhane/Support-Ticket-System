@extends('layout.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-lg shadow">Users: 120</div>
        <div class="p-6 bg-white rounded-lg shadow">Revenue: $5,000</div>
        <div class="p-6 bg-white rounded-lg shadow">Tickets: 15</div>
    </div>
@endsection 