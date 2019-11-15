@extends('layouts.dashboard')

@section('title', 'Agenda Calendário')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div id='calendar'></div>

    <div class="modal-agendamento">
        <h5>Novo Agendamento</h5>
        <div class="form-group">
            <label for="marca">Marca</label>
            <select class="browser-default custom-select" id="marca" name="marca">
                <option></option>
                <option value="1">Um</option>
                <option value="1">Um</option>
                <option value="1">Um</option>
                <option value="1">Um</option>
                <option value="1">Um</option>
            </select>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js"></script>
    <script src="{{ asset('js/dashboard/agenda/calendario.js') }}"></script>
@endsection
