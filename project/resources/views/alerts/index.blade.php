@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>LISTE DES ALERTS</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{route('gestion_alerts.create')}}" class="art-link art-color-link art-w-chevron">Ajouter alert</a>
                </div>

                @foreach ($alerts as $alert)
                    <div class="col-lg-12 col-md-6">
                        <div class="art-a art-service-icon-box">
                            <div class="art-service-ib-content">
                                <h5 class="mb-15">{{ $alert->User->nom ?? '' }} {{ $alert->User->prenom ?? '' }}</h5>
                                <div class="art-el-suptitle mb-15 text-warning">Date : {{ $alert->created_at }}</div>
                                <div class="mb-15">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Niveau d'alert :</b> <a class="float-right">{{ $alert->niveau ?? '' }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Auteur :</b> <a class="float-right">{{ $alert->auteur ?? '' }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Type d'aide :</b> <a class="float-right">{{ $alert->type_aide ?? '' }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b class="text-warning">Observation :</b> <br>
                                            <p>{{ $alert->observation ?? '' }}</p>
                                        </li>
                                    </ul>
                                </div>
                                @can('isAdmin')
                                    <div class="art-buttons-frame">
                                        <a onClick="return confirm('You sure??');" href="{{ url('destroyAlert/' . $alert->id) }}"
                                            class="art-link art-color-link art-w-chevron">Delete</a>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
