@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>Utilisateur N°: {{ $finds->id ?? '' }}</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <div class="art-buttons-frame mb-3">
                        <a href="{{ route('gestion_users.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                            utlisateur</a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="art-a art-service-icon-box">
                        <div class="art-service-ib-content">
                            <h5 class="mb-15">{{ $finds->nom ?? '' }} {{ $finds->prenom ?? '' }}</h5>
                            <div class="art-el-suptitle mb-15 text-warning">Role : {{ $finds->Role->label }}</div>
                            <div class="mb-15">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Pays :</b> <a class="float-right">{{ $finds->pays }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Ville :</b> <a class="float-right">{{ $finds->ville }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Email :</b> <a class="float-right">{{ $finds->email }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Téléphone :</b> <a class="float-right">{{ $finds->telephone }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Association :</b> <a class="float-right">{{ $finds->association }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="mt-4 text-center">Statistiques</h2>
    
        <div class="row p-30-0">

            <div class="col-md-4 col-6">
                <div class="art-counter-frame">
                    <div class="art-counter-box">
                        <span class="art-counter">{{ $infos->count() }}</span>
                    </div>
                    <h6>Nbr d'enquetes</h6>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="art-counter-frame">
                    <div class="art-counter-box">
                        <span class="art-counter">{{ $refuges->count() }}</span>
                    </div>
                    <h6>Nbr de demande refuge</h6>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="art-counter-frame">
                    <div class="art-counter-box">
                        <span class="art-counter">{{ $posts->count() }}</span>
                    </div>
                    <h6>Nbr poste</h6>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="art-counter-frame">
                    <div class="art-counter-box">
                        <span class="art-counter">{{ $alerts->count() }}</span>
                    </div>
                    <h6>Nbr d'alert</h6>
                </div>
            </div>

        </div>
    
    </div>
@endsection
