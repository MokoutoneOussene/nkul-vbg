@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>AJOUT D'UNE ALERT</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_alerts.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                        alerts</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card">
                    <form action="{{ route('gestion_alerts.store') }}" method="POST">
                        @csrf
                        <input name="users_id" type="text" value="{{ Auth::check() ? Auth::user()->id : null }}" hidden>
                        <div class="mb-3">
                            <label class="text-light" for="">Niveau d'alert</label>
                            <input type="text" name="niveau" class="champs">
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Lieu d'alert</label>
                            <input type="text" name="lieu" class="champs">
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Auteur d'alert</label>
                            <input type="text" name="auteur" class="champs">
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Type d'aide</label>
                            <input type="text" name="type_aide" class="champs">
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Observation</label>
                            <input type="text" name="observation" class="champs">
                        </div>

                        <button onClick="return confirm('You sure??');" class="btn btn-warning"
                            type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
