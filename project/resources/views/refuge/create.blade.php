@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>AJOUT D'UNE DEMANDE</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_refuge.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                        demandes</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card">
                    <form action="{{ route('gestion_refuge.store') }}" method="POST">
                        @csrf
                        <input name="users_id" type="text" value="{{ Auth::check() ? Auth::user()->id : null }}" hidden>
                        <div class="mb-3">
                            <label class="text-light" for="">Avez-vous + 21 ans ?</label>
                            <select name="age" class="champs">
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Ou dormez-vous en ce moment ?</label>
                            <select name="residence" class="champs">
                                <option value="Chez un.e amis.e">Chez un.e amis.e</option>
                                <option value="Dans la rue">Dans la rue</option>
                                <option value="En famille">En famille</option>
                                <option value="Dans des lieux abandonnés">Dans des lieux abandonnés</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Quel est votre identité de genre ?</label>
                            <select name="identite_genre" class="champs">
                                <option value="Trans-homme">Trans-homme</option>
                                <option value="Trans-femme">Trans-femme</option>
                                <option value="Trans-non-binaire">Trans non binaire</option>
                                <option value="Cis genre Homme">Cis genre Homme</option>
                                <option value="Cis genre Femme">Cis genre Femme</option>
                                <option value="Cis genre non binaire">Cis genre non binaire</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Avez-vous un emploi rémunéré ?</label>
                            <select name="emploi" class="champs">
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Avez-vous une source de revenue ?</label>
                            <select name="source_de_revenue" class="champs">
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Avez-vous une formation professionnelle ?</label>
                            <select name="formation" class="champs">
                                <option value="OUI">OUI</option>
                                <option value="NON">NON</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-light">Si OUI en quoi êtes-vous formé ?</label>
                            <textarea class="form-control" name="quelle_formation" rows="3"
                                style="background-color: #212122; border: 0;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="text-light" for="">Pour combien de temps avez-vous besoin d’être hébergé ?</label>
                            <input type="text" name="temps" class="champs">
                        </div>
                        <div class="mb-3">
                            <label class="text-light">Que pouvez vous apporter pour améliorer la qualité des services du refuge ?</label>
                            <textarea class="form-control" name="apport" rows="3"
                                style="background-color: #212122; border: 0;"></textarea>
                        </div>

                        <button onClick="return confirm('You sure??');" class="btn btn-warning"
                            type="submit">Envoyer la demande</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
