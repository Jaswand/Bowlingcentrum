@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"></div>
                <h2>Overzicht Reservering</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Datum</th>
            <th>Volwassen</th>
            <th>Kinderen</th>
            <th>Optiepakket</th>
            <th width="280px">wijzigen</th>
        </tr>
        @foreach ($reserverings as $reservering)
        <tr>
            <td>{{ $reservering->voornaam }}</td>
            <td>{{ $reservering->tussenvoegsel }}</td>
            <td>{{ $reservering->achternaam }}</td>
            <td>{{ $reservering->datum }}</td>
            <td>{{ $reservering->volwassen }}</td>
            <td>{{ $reservering->kinderen }}</td>
            <td>{{ $reservering->optiepakket }}</td>
            <td>
                    @csrf
                    @method('PUT')
      
                    <button><a href="{{ route('reservering.edit', $reservering->id) }}" class="btn btn-primary">Edit</a></button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>      
@endsection