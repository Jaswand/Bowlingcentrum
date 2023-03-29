@extends('layouts.app')

@section('content')
    <h1>Reservation Overview</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Datum</th>
                <th>Volwassen</th>
                <th>Kinderen</th>
                <th>optiepakket</th>
                <th>wijzigen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reserverings as $reservering)
                <tr>
                    <td>{{ $reservering->voornaam }}</td>
                    <td>{{ $reservering->tussenvoegsel }}</td>
                    <td>{{ $reservering->achternaam }}</td>
                    <td>{{ $reservering->datum }}</td>
                    <td>{{ $reservering->volwassen }}</td>
                    <td>{{ $reservering->kinderen }}</td>
                    <td>{{ $reservering->optiepakket }}</td>
                    
                        

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection