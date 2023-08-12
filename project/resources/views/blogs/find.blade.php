@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>POST N° {{ $finds->id }}</h4>
                    </div>
                </div>

                <div class="art-buttons-frame mb-3">
                    <a href="{{ route('gestion_posts.index') }}" class="art-link art-color-link art-w-chevron">Voir les
                        posts</a>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="art-a art-service-icon-box">
                        <div class="art-service-ib-content">
                            <h5 class="mb-15">{{ $finds->User->nom ?? '' }} {{ $finds->User->prenom ?? '' }}</h5>
                            <h6 class="mb-15">{{ $finds->post_name ?? '' }}</h6>
                            <div class="art-el-suptitle mb-15 text-warning">Date : {{ $finds->created_at }}</div>
                            <div class="mb-15">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item"
                                        style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                        <b class="text-warning">Contenu :</b> <br>
                                        <p class="mt-3">{{ $finds->content ?? '' }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="list-group mb-3 ml-5">
                    <li class="list-group-item" style="background-color: #1c1c1d23 !important; border: 0 !important;">
                        <b class="text-warning">Commentaires :</b> <br>
                        @foreach ($comments as $com)
                            <div class="col-lg-6 col-md-6" style="background-color: #1c1c1d23 !important">
                                <p class="mt-3 mb-3">{{ $com->comment_content ?? '' }}</p>
                                {{-- <h6 class="text-warning">{{ $comments->User->nom }} {{ $comments->User->prenom }}</h6> --}}
                            </div>
                        @endforeach
                    </li>
                </ul>

                <div class="col-lg-12">
                    <form action="{{ route('gestion_comment.store') }}" method="POST">
                        @csrf
                        <input name="users_id" type="text" value="{{ Auth::check() ? Auth::user()->id : null }}" hidden>
                        <input name="posts_id" type="text" value="{{ $finds->id }}" hidden>
                        <div class="mb-3">
                            <label>Vote commentaire ici</label>
                            <textarea class="form-control" name="comment_content" rows="5" required
                                style="background-color: #212122; border: 0; border-bottom: 3px solid rgb(32, 30, 30)"></textarea>
                        </div>

                        <button class="pl-3 pr-3 p-2" style="background-color: #f1cd1d;" type="submit">Postuler
                            maintenant</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
