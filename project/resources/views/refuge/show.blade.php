@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>Demande N° <span class="text-warning">{{$ref->id}}</span></h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_refuge.index') }}" class="art-link art-color-link art-w-chevron">Retour</a>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="art-a art-service-icon-box">
                        <div class="art-service-ib-content">
                            <h5 class="mb-15">{{ $ref->User->nom ?? '' }} {{ $ref->User->prenom ?? '' }}</h5>
                            <h6 class="mb-15">{{ $ref->ref_name ?? '' }}</h6>
                            <div class="art-el-suptitle mb-15 text-warning">Date : {{ $ref->created_at }}</div>
                            <div class="mb-15">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Avez-vous + 21 ans ?</b>
                                        <p class="mt-3">{{ $ref->age ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Ou dormez-vous en ce moment ?</b>
                                        <p class="mt-3">{{ $ref->residence ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Quel est votre identité de genre ?</b>
                                        <p class="mt-3">{{ $ref->identite_genre ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Avez-vous un emploi rémunéré ?</b>
                                        <p class="mt-3">{{ $ref->emploi ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Avez-vous une source de revenue ?</b>
                                        <p class="mt-3">{{ $ref->source_de_revenue ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Avez-vous une formation professionnelle ?</b>
                                        <p class="mt-3">{{ $ref->formation ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Quelle formation ?</b>
                                        <p class="mt-3">{{ $ref->quelle_formation ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Pour combien de temps avez-vous besoin d’être hébergé
                                            ?</b>
                                        <p class="mt-3">{{ $ref->temps ?? '' }}</p>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-light">Que pouvez vous apporter pour améliorer la qualité des
                                            services du refuge ?</b>
                                        <p class="mt-3">{{ $ref->apport ?? '' }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
