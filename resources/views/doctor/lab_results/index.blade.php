@extends('layouts.common')

@section('page-title')
    Lab Results - Doctor
@endsection

@section('image')
    <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
@endsection


@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">List of patients you are attending</h6>
        </div>
        <div class="card-body text-center" >
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Disease</th>
                        <th>Age</th>
                        <th>Appointment date</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if ($doctor_patients->count()>0)
                        @foreach($doctor_patients as $patient)
                            <tr>
                                <td>{{$patient->first_name.' '.$patient->last_name}}</td>
                                <td>{{$patient->disease->common_name}}</td>
                                <td>{{$patient->birth_date}}</td>
                                <td>{{$patient->appointment_date}}</td>
                                <td>{{$patient->gender}}</td>
                                <td>
                                    <a href="{{route('patients.show', $patient)}}" class="badge badge-info badge-sm">
                                        <small> <i class="fas fa-eye"></i></small>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="6">No Patients yet!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
