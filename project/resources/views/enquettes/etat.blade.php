@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card mb-3" style="background-color: #2c2c38; border: 0 !important; border-bottom: 3px solid rgb(44,44,56) !important; color:#8c8c8e !important;">
                    <div class="card-body">

                        <div class="art-buttons-frame mb-3">
                            <a href="{{ route('gestion_enquete.index') }}" class="art-link art-color-link art-w-chevron">Retour</a>
                        </div>
                        
                        <h5 class="text-center mb-3">FICHE DE DOCUMENTATION</h5>
                        <div class="d-flex justify-content-center" style="font-style: italic">
                            <h6>Code référence :</h6>
                            <p>&nbsp &nbsp RITA
                                {{ date('Y') }}/{{ $finds->pays }}/{{ $finds->user->association }}/00{{ $finds->id }}</p>
                        </div>

                        <h5 class="text-center mb-3">FICHE DE DOCUMENTATION</h5>
                        <div class="d-flex mt-3">
                            <p style="font-weight: bold">Nom et prénom : </p>
                            <p>>&nbsp &nbsp &nbsp{{ $finds->user->nom }} {{ $finds->user->prenom }}</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <p style="font-weight: bold">Contact : </p>
                                <p>&nbsp &nbsp &nbsp{{ $finds->user->telephone }}</p>
                            </div>
                            <div class="d-flex">
                                <p style="font-weight: bold">Pays : </p>
                                <p>&nbsp &nbsp &nbsp{{ $finds->user->pays }}</p>
                            </div>
                            <div class="d-flex">
                                <p style="font-weight: bold">Ville : </p>
                                <p>&nbsp &nbsp &nbsp{{ $finds->user->ville }}</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <p style="font-weight: bold">Association : </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->user->association }}</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <p style="font-weight: bold">Date de couverture : </p>
                                <p>&nbsp &nbsp &nbsp{{ $finds->date_couverture }}</p>
                            </div>
                            <div class="d-flex">
                                <p style="font-weight: bold">Lieu de couverture : </p>
                                <p>&nbsp &nbsp &nbsp{{ $finds->lieu_incident }}</p>
                            </div>
                        </div>

                        <h5 class="my-2">IDENTIFICATION DE/DES SURVIVANTS(ES)</h5>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input my-1" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $finds->identite_genre }} &nbsp &nbsp
                                &nbsp &nbsp &nbsp</label>
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $finds->orientation_sexuel }}</label>
                        </div>
                        <table class="table table-bordered" style="color:#8c8c8e !important;">
                            <thead>
                                <tr>
                                    <th scope="col">Code unique</th>
                                    <th scope="col">Let</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">Pays</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Quartier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $finds->code_unique }}</th>
                                    <td>{{ $finds->let }}</td>
                                    <td>{{ $finds->age }}</td>
                                    <td>{{ $finds->occupation }}</td>
                                    <td>{{ $finds->pays }}</td>
                                    <td>{{ $finds->ville }}</td>
                                    <td>{{ $finds->quartier }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p style="font-weight: bold">Nature du cas :</p>
                        <div class="d-flex">
                            <p style="font-weight: bold">{{ $finds->type_violence_violation }} : </p>
                            <p style="font-style: italic">&nbsp &nbsp &nbsp ({{ $finds->nature_violence }})</p>
                        </div>
                        <table class="table table-bordered" style="color:#8c8c8e !important;">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        DESCRIPTION PHYSIQUE DE/DES SURVIVANTS(ES) (habillement, maquillage, comportement
                                        etc.)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $finds->detail }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-4 mb-4">
                            <p style="font-weight: bold">MODE DE COLLECTE DES DONNEES</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">{{ $finds->mode_collect }}</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <p style="font-weight: bold">SOURCE D’INFORMATION</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label"
                                    for="inlineCheckbox1">{{ $finds->source_information }}</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <p style="font-weight: bold">AUTEUR DE L’INCIDENCE</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">{{ $finds->auteur_violence }}</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <p style="font-weight: bold">ETAT DU PASSING</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">{{ $finds->etat_passing }}</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <p style="font-weight: bold">TRANSITION</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">{{ $finds->transition }}</label>
                            </div>
                        </div>

                        <table class="table table-bordered" style="color:#8c8c8e !important;">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Détails du cas : (Qui ? Quand ? Où ? Pourquoi ? Comment ? Par qui ?)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Date de couverture : {{ $finds->date_couverture }} <br>
                                        Lieu de couverture : {{ $finds->lieu_incident }} <br>
                                        Detail incident : {{ $finds->date_incident }} <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Qu’est ce qui a été fait ? </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->quest_ce_qui_ete_fait }}</p>
                        </div>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Que pensez-vous de ce qui a été fait ? </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->que_pensez_vous_ete_fait }}</p>
                        </div>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Attentes de la survivante </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->attentes_survivante }}</p>
                        </div>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Qu’est ce qui doit être fait ? </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->quest_doit_etre_fait }}</p>
                        </div>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Vous référez dans quelle organisation ? </p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->organisation_refere }}</p>
                        </div>

                        <div class="mt-3 mb-3">
                            <p style="font-weight: bold">Pour quelle service référez-vous le/la survivant(e) ?</p>
                            <p>&nbsp &nbsp &nbsp{{ $finds->referer_pour }}</p>
                        </div>

                        <div class="mt-3 mb-3" style="float: right">
                            <p style="font-weight: bold">Signature de l’observateur (rice)</p>
                            <p>{{ $finds->user->nom }} {{ $finds->user->prenom }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

