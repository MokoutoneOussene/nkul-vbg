@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3"
                    style="background-color: #2c2c38; border: 0 !important; border-bottom: 3px solid rgb(44,44,56) !important; color:#8c8c8e !important;">
                    <div class="card-body">
                        <h5 class="text-center mb-3">FORMULAIRE MODIFICATION DES ENQUETES</h5>
                        <div class="d-flex justify-content-center" style="font-style: italic">
                            <h6>Documentation & suivi du cas:</h6>
                            <p>RITA
                                {{ date('Y') }}/{{ $finds->pays }}/{{ $finds->user->association }}/00{{ $finds->id }}
                            </p>
                        </div>
                        <div class="art-buttons-frame mb-3">
                            <a href="{{ route('gestion_enquete.index') }}" class="art-link art-color-link art-w-chevron">Retour</a>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <form action="{{ route('gestion_enquete.update', [$finds->id]) }}}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <h4 class="mb-2">Documentation de la violence</h4>
                                    <div class="mb-2">
                                        <label class="text-warning">Detail de la violence</label>
                                        <textarea class="form-control" name="detail"value="{{ $finds->detail }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Qu’est ce qui a été fait ?</label>
                                        <textarea class="form-control" name="quest_ce_qui_ete_fait" value="{{ $finds->quest_ce_qui_ete_fait }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Que pensez-vous de ce qui a été fait ?</label>
                                        <textarea class="form-control" name="que_pensez_vous_ete_fait" value="{{ $finds->que_pensez_vous_ete_fait }}"
                                            rows="4" style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Attentes de la survivante</label>
                                        <textarea class="form-control" name="attentes_survivante" value="{{ $finds->attentes_survivante }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Qu’est ce qui doit être fait ?</label>
                                        <textarea class="form-control" name="quest_doit_etre_fait" value="{{ $finds->quest_doit_etre_fait }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <button onClick="return confirm('You sure??');" class="btn btn-warning mt-3"
                                        type="submit">Enregistrer</button>
                                </form>
                            </div>
                            <hr>

                            <div class="col-lg-12 col-md-6 mt-5">
                                <form action="{{ route('gestion_enquete.update', [$finds->id]) }}}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <h4 class="mb-2">Suivie de la violence</h4>
                                    <div class="mb-2">
                                        <label class="text-warning">Service reçu</label>
                                        <textarea class="form-control" name="s_recu" value="{{ $finds->s_recu }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Que pensez-vous du service reçu ?</label>
                                        <textarea class="form-control" name="pense_srecu" value="{{ $finds->pense_srecu }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-warning">Situation actuelle de la/du survivant(e)</label>
                                        <textarea class="form-control" name="etat_actuel" value="{{ $finds->etat_actuel }}" rows="4"
                                            style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                                    </div>

                                    <button onClick="return confirm('You sure??');" class="btn btn-warning mt-3"
                                        type="submit">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
