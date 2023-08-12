@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title mt-3">
                    <div class="art-title-frame">
                        <h4>LISTE DES POSTS</h4>
                    </div>
                </div>
                <div class="art-buttons-frame mb-3">
                    <a href="{{route('gestion_posts.create')}}" class="art-link art-color-link art-w-chevron">Ajouter un Sujet</a>
                </div>
                @foreach ($posts as $post)
                    <div class="col-lg-12 col-md-6">
                        <div class="art-a art-service-icon-box">
                            <div class="art-service-ib-content">
                                <h5 class="mb-15">{{ $post->User->nom ?? '' }} {{ $post->User->prenom ?? '' }}</h5>
                                <h6 class="mb-15">{{ $post->post_name ?? '' }}</h6>
                                <div class="art-el-suptitle mb-15 text-warning">Date : {{ $post->created_at }}</div>
                                <div class="mb-15">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item"
                                            style="background-color: #1c1c1d23 !important; border: 0 !important; border-bottom: 3px solid rrgb(30,30,40) !important">
                                            <b class="text-warning">Contenu :</b> <br>
                                            <p class="mt-3">{{ $post->content ?? '' }}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex">
                                    @can('isAdmin')
                                    <div class="art-buttons-frame mr-4">
                                        <a onClick="return confirm('You sure??');" href="{{ url('destroyPost/' . $post->id) }}"
                                            class="art-link art-color-link art-w-chevron">Delete</a>
                                    </div>
                                @endcan
                                <div class="art-buttons-frame">
                                    <a href="{{route ('gestion_posts.show', [$post->id]) }}"
                                        class="art-link art-color-link art-w-chevron">Voir plus</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
