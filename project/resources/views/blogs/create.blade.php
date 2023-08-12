@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>AJOUT D'UN POST</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_posts.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                        blogs</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card">
                    <form action="{{ route('gestion_posts.store') }}" method="POST">
                        @csrf
                        <input name="users_id" type="text" value="{{ Auth::check() ? Auth::user()->id : null }}" hidden>
                        <div class="mb-3">
                            <label class="text-light" for="">sujet du blog</label>
                            <input type="text" name="post_name" class="champs">
                        </div>

                        <div class="mb-3">
                            <label class="text-light">Contenu</label>
                            <textarea class="form-control" name="content" rows="5"
                                style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                        </div>

                        <button onClick="return confirm('You sure??');" class="btn btn-warning"
                            type="submit">Postuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
