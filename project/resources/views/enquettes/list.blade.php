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
                @can('isAdmin')
                    <div class="art-buttons-frame mb-3">
                        <a href="#" class="art-link art-color-link art-w-chevron">Export excel file</a>
                    </div>
                @endcan
                <div class="art-timeline art-gallery" id="history">
                    @foreach ($enquettes as $enquette)
                        <div class="art-timeline-item">
                            <div class="art-timeline-mark-light"></div>
                            <div class="art-timeline-mark"></div>

                            <div class="art-a art-timeline-content">
                                <div class="art-card-header">
                                    <div class="art-left-side">
                                        <h5>RITA{{ date('Y') }}/{{ $enquette->pays }}/{{ $enquette->user->association }}/00{{ $enquette->id }}
                                        </h5>
                                        <div class="art-el-suptitle mb-15 text-warning">Code unique :
                                            {{ $enquette->code_unique }}</div>
                                    </div>
                                    <div class="art-right-side">
                                        <span class="art-date text-warning">Couverture :
                                            {{ $enquette->date_couverture }}</span>
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
                                <a href="{{ url('print_info', [$enquette->id]) }}"
                                    class="art-link art-color-link art-w-chevron">Document</a>
                                <a href="{{ url('print_info2', [$enquette->id]) }}"
                                    class="art-link art-color-link art-w-chevron">Suivi</a>
                                <a onClick="return confirm('You sure??');" href="{{ url('destroyInfo/' . $enquette->id) }}"
                                    class="art-link art-color-link art-w-chevron">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="text-center">
                    <div class="row" style="width: 100%; font-size: 10px">
                        {{$enquettes->links()}}
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
