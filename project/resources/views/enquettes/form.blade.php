@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row p-30-0">

            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>FORMULAIRE DES ENQUETES</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_enquete.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                        enquetes</a>
                </div>
            </div>

            <div class="col-lg-12">

                <div class="art-a art-card">

                    <!-- contact form -->
                    <form action="{{ route('gestion_enquete.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="users_id" type="text" value="{{ Auth::check() ? Auth::user()->id : null }}" hidden>
                        <div class="mb-3">
                            <input type="text" name="code_unique" class="champs" placeholder="Code unique">
                        </div>
                        <div class="mb-3">
                            <label class="text-warning" for="">Date de couverture</label>
                            <input type="date" name="date_couverture" class="champs" placeholder="Date couverture">
                        </div>
                        <div class="mb-3">
                            <select name="type_violence_violation" class="champs">
                                <option selected>Type de violence / violation</option>
                                <option value="Violences physiques">Violences physiques</option>
                                <option value="Violences psychologiques">Violences psychologiques</option>
                                <option value="Violences sexuelles">Violences sexuelles</option>
                                <option value="Arrestation arbitraire">Arrestation arbitraire</option>
                                <option value="Meurtre/Assassinat">Meurtre/Assassinat</option>
                                <option value="Refus de services et soins de santé">Refus de services et soins de santé
                                </option>
                                <option value="Arnaque-Chantage-Extorsion">Arnaque-Chantage-Extorsion</option>
                                <option value="Discours haineux">Discours haineux</option>
                                <option value="Violence économique">Violence économique</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="nature_violence" class="champs" placeholder="Nature de la violence">
                        </div>
                        <div class="mb-3">
                            <select name="identite_genre" class="champs">
                                <option selected>Identité du genre</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Trans-homme">Trans-homme</option>
                                <option value="Trans-femme">Trans-femme</option>
                                <option value="Trans-non-binaire">Trans-non-binaire</option>
                                <option value="Queer">Queer</option>
                                <option value="Intersexe">Intersexe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="orientation_sexuel" class="champs">
                                <option selected>Orientation sexuel</option>
                                <option value="Lesbiennes">Lesbiennes</option>
                                <option value="Gays">Gays</option>
                                <option value="Bisexuel.les">Bisexuel.les</option>
                                <option value="Pansexuel.les">Pansexuel.les</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="age" class="champs" placeholder="Age">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="let" class="champs" placeholder="Let">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="occupation" class="champs" placeholder="Occupation">
                        </div>
                        <div class="mb-3">
                            <select name="pays" class="champs">
                                <option selected>Pays</option>
                                <option value="Cameroun">Cameroun</option>
                                <option value="Centrafrique">Centrafrique</option>
                                <option value="Congo">Congo</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Guinée-Equatoriale">Guinée-Equatoriale</option>
                                <option value="Tchad">Tchad</option>
                                <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="ville" class="champs" placeholder="Ville">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="quartier" class="champs" placeholder="Quartier">
                        </div>
                        <div class="mb-3">
                            <label class="text-warning" for="">Date incident</label>
                            <input type="date" name="date_incident" class="champs" placeholder="Date incident">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="lieu_incident" class="champs" placeholder="Lieu incident">
                        </div>
                        <div class="mb-3">
                            <select name="source_information" class="champs">
                                <option selected>Source information</option>
                                <option value="Survivant">Survivant</option>
                                <option value="Témoin">Témoin</option>
                                <option value="Réseaux sociaux">Réseaux sociaux</option>
                                <option value="Médias">Médias</option>
                                <option value="Auteur de l’incident">Auteur de l’incident</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="mode_collect" class="champs">
                                <option selected>Mode de collecte</option>
                                <option value="Interview face à face">Interview face à face</option>
                                <option value="Téléphone">Téléphone</option>
                                <option value="Analyse médias">Analyse médias</option>
                                <option value="Fouille documentaire">Fouille documentaire</option>
                                <option value="Observation terrain">Observation terrain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="transition" class="champs">
                                <option selected>Transition</option>
                                <option value="Pas commencé">Pas commencé</option>
                                <option value="Commencé">Commencé</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="etat_passing" class="champs">
                                <option selected>Etat de passing</option>
                                <option value="Aucun">Aucun</option>
                                <option value="Partiel">Partiel</option>
                                <option value="Complet">Complet</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="auteur_violence" class="champs">
                                <option selected>Auteur de la violence</option>
                                <option value="Inconnu">Inconnu</option>
                                <option value="Membre de la famille">Membre de la famille</option>
                                <option value="LGBTIQ+">LGBTIQ+</option>
                                <option value="Internaute">Internaute</option>
                                <option value="FMO">FMO</option>
                                <option value="Bailleur (resse)">Bailleur (resse)</option>
                                <option value="Employeur(e)">Employeur(e)</option>
                                <option value="Prestataire santé">Prestataire santé</option>
                                <option value="Prestataire Service">Prestataire Service</option>
                                <option value="homme/femme religieux(se)">homme/femme religieux(se)</option>
                                <option value="Habitant(e) Quartier">Habitant(e) Quartier</option>
                                <option value="Influenceur/se">Influenceur/se</option>
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <input type="text" name="ancien" class="form-control"
                                placeholder="Ancien.ne/nouveau.elle"
                                >
                        </div> --}}
                        <div class="mb-3">
                            <input type="text" name="referer_pour" class="champs" placeholder="Référer pour">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="organisation_refere" class="champs"
                                placeholder="Organisation référé">
                        </div>

                        <button type="submit" class="btn btn-warning">Enregistrer</button>
                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
