@extends('layouts.common')

@section('page-title')
    Patients - Doctor
@endsection


@include('doctor.components.profile')



@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-primary">List of patients you are attending (Total :
                @if($doctor_patients->count()>0)
                {{$doctor_patients->count()}})
                @else
                    0)
                @endif</h6>
        </div>
        <div class="card-body text-center" >
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Disease</th>
                        <th>Age (years)</th>
                        <th>Appointment date (each month)</th>
                        <th>Gender</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if ($doctor_patients->count()>0)
                        @foreach($doctor_patients as $patient)
                            <tr>
                                <td>{{$patient->first_name.' '.$patient->last_name}}</td>
                                <td>{{$patient->disease->common_name}}</td>
                                <td>{{date('Y')-date('Y', strtotime($patient->birth_date))}}</td>
                                <td>{{date('d ', strtotime($patient->appointment_date))}}</td>
                                <td>{{$patient->gender}}</td>

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
