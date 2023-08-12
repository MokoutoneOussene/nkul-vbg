@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>LISTE DES UTILISATEURS</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_users.create') }}" class="art-link art-color-link art-w-chevron">Ajouter utlisateur</a>
                </div>
                @can('isAdmin')
                    <div class="art-buttons-frame mb-3">
                        <a href="#" class="art-link art-color-link art-w-chevron">Export excel file</a>
                    </div>
                @endcan

                @foreach ($users as $user)
                    <div class="col-lg-12 col-md-6">
                        <div class="art-a art-service-icon-box">
                            <div class="art-service-ib-content">
                                <h5 class="mb-15">{{ $user->nom ?? '' }} {{ $user->prenom ?? '' }}</h5>
                                <div class="art-el-suptitle mb-15 text-warning">Role : {{ $user->Role->label }}</div>
                                <div class="mb-15">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Pays :</b> <a class="float-right">{{ $user->pays }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Ville :</b> <a class="float-right">{{ $user->ville }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Email :</b> <a class="float-right">{{ $user->email }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Téléphone :</b> <a class="float-right">{{ $user->telephone }}</a>
                                        </li>
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b>Association :</b> <a class="float-right">{{ $user->association }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="art-buttons-frame">
                                    <a onClick="return confirm('You sure??');" href="{{ url('destroyUser/' . $user->id) }}"
                                        class="art-link art-color-link art-w-chevron">Delete</a>
                                    <a href="{{route ('gestion_users.show', [$user->id]) }}"
                                        class="art-link art-color-link art-w-chevron">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
