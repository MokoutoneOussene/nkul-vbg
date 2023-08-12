@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>LISTE DES DEMANDES DU REFUGES</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_refuge.create') }}" class="art-link art-color-link art-w-chevron">Ajouter une
                        demande</a>
                </div>
                @foreach ($refuges as $ref)
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
                                    </ul>
                                </div>
                                <div class="d-flex">
                                    <div class="art-buttons-frame mr-4">
                                        <a href="{{ route('gestion_refuge.show', [$ref->id]) }}"
                                            class="art-link art-color-link art-w-chevron">Voir plus</a>
                                    </div>
                                    @can('isAdmin')
                                        <div class="art-buttons-frame mr-4">
                                            <a onClick="return confirm('You sure??');" href=""
                                                class="art-link art-color-link art-w-chevron">Delete</a>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
