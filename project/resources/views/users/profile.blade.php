@extends('layouts.main')

@section('homecontent')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3"
                    style="background-color: #2c2c38; border: 0 !important; border-bottom: 3px solid rgb(44,44,56) !important; color:#8c8c8e !important;">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">{{ Auth::User()->nom }}
                            {{ Auth::User()->prenom }}</h3>
                        <p class="text-muted text-center">{{ Auth::User()->role->label }}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item" style="background-color: #1e1e28 !important;">
                                <b>Contact</b> <a class="float-right">{{ Auth::User()->telephone }}</a>
                            </li>
                            <li class="list-group-item" style="background-color: #1e1e28 !important;">
                                <b>Pays</b> <a class="float-right">{{ Auth::User()->pays }}</a>
                            </li>
                            <li class="list-group-item" style="background-color: #1e1e28 !important;">
                                <b>ville</b> <a class="float-right">{{ Auth::User()->ville }}</a>
                            </li>
                            <li class="list-group-item" style="background-color: #1e1e28 !important;">
                                <b>Association/leaderE Trans</b> <a class="float-right">{{ Auth::User()->association }}</a>
                            </li>
                            <li class="list-group-item" style="background-color: #1e1e28 !important;">
                                <b>Email</b> <a class="float-right">{{ Auth::User()->email }}</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#viewventemodal"><b>Changer le mot de passe</b></a>
                        <div class="modal fade bd-example-modal-lg" id="viewventemodal" role="dialog">
                            <div class="modal-dialog modal-lg modal-content">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title" id="exampleModalLabel">Changer le mot de passe</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-dark" href="">Modifier</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
