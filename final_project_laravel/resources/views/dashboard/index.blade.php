@extends('dashboard.layouts.dashboard-layout')

@push('css')
    
@endpush

@section('content')

    <div id="calendar" style="height: 800px;"></div>

@endsection

@push('script')
    <script>
        var cal = new tui.Calendar('#calendar', {
            defaultView: 'month' // monthly view option
        });
    </script>
@endpush
