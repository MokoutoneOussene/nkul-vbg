@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>LISTE DES ENQUETES</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_enquete.create') }}" class="art-link art-color-link art-w-chevron">Nouveau
                        enquetes</a>
                </div>
                <div class="art-timeline art-gallery" id="history">
                    @foreach ($enquettes as $enquette)
                        <div class="art-timeline-item">
                            <div class="art-timeline-mark-light"></div>
                            <div class="art-timeline-mark"></div>

                            <div class="art-a art-timeline-content">
                                <div class="art-card-header">
                                    <div class="art-left-side ">
                                        <h5 class="mb-15">
                                            RITA{{ date('Y') }}/{{ $enquette->pays }}/{{ $enquette->user->association }}/00{{ $enquette->id }}
                                        </h5>
                                    </div>
                                    <div class="art-right-side">
                                        <span class="art-date">Couverture : {{ $enquette->date_couverture }}</span>
                                    </div>
                                </div>

                                <ul class="list-group mb-3">
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Pays :</b> <a class="float-right">{{ $enquette->pays }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Ville :</b> <a class="float-right">{{ $enquette->ville }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Quartier :</b> <a class="float-right">{{ $enquette->quartier }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Lieu incident :</b> <a class="float-right">{{ $enquette->lieu_incident }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Type violence :</b> <a
                                            class="float-right">{{ $enquette->type_violence_violation }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Nature violence :</b> <a
                                            class="float-right">{{ $enquette->nature_violence }}</a>
                                    </li>
                                    <li class="list-group-item"
                                        style="background-color: #1e1e28 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b>Identité genre :</b> <a class="float-right">{{ $enquette->identite_genre }}</a>
                                    </li>
                                </ul>
                                <a href="{{ route('gestion_enquete.show', [$enquette->id]) }}"
                                    class="art-link art-color-link art-w-chevron">Documentation | Suivi du cas</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
