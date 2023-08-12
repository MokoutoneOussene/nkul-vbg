@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>FORMULAIRE DES UTILISATEURS</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('list_user') }}" class="art-link art-color-link art-w-chevron">Voir les
                        utlisateur</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card">
                    <form action="{{ route('gestion_users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="role_id" value="3" class="champs" placeholder="Nom" hidden>
                        <div class="mb-3">
                            <input type="text" name="nom" class="champs" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="prenom" class="champs" placeholder="Prenom">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="telephone" class="champs" placeholder="Telephone">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="pays" class="champs" placeholder="Pays">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="ville" class="champs" placeholder="Ville">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="association" class="champs"
                                placeholder="Association / leaderE Trans">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="champs" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="champs" placeholder="Mot de passe">
                        </div>
                        <button onClick="return confirm('You sure??');" class="btn btn-warning"
                            type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
