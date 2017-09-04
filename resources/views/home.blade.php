@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-2 col-md-3">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="far fa-fw fa-search"></i>&nbsp;Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#"><i class="far fa-fw fa-star"></i>&nbsp;Favourites</a>
          </li>
        </ul>   
    </div>
    <div class="col-lg-10 col-md-9">
        <ul class="clearfix profile-cards list-unstyled">
            <li class="profile-card">
            <div class="card mb-2-5">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="card-title">
                                <div class="card-profileimg">
                                    <img src="https://scontent-syd2-1.xx.fbcdn.net/v/t1.0-9/11666208_884964048217239_6010246694004036225_n.jpg?oh=6a25c871b997f5547c51f32f74c58940&oe=5A5CABED" class="round img-fluid">
                                </div>Jamieson Keevers</h4>
                            <p class="card-text text-muted-sm">Maths / Geography</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ante ut purus viverra molestie in ac leo. Ut blandit quam eget est posuere, eget convallis odio accumsan.</p>
                            <div class="card-button-group">
                            <a class="btn btn-primary" href="#" role="button">View Profile</a>
                            <a href="#" class="btn btn-link">Favourite This Tutor</a>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <ul class="list-group text-muted">
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-map-marker"></i>&nbsp;Sydney</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-graduation-cap"></i>&nbsp;Bachelor Degree</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-dollar-sign"></i>&nbsp;45/Hour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </li>
            <li class="profile-card">
            <div class="card mb-2-5">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="card-title">
                                <div class="card-profileimg">
                                    <img src="https://scontent-syd2-1.xx.fbcdn.net/v/t31.0-8/11133989_594001374076228_8921485902932236639_o.jpg?oh=c03359504b17c22906fd9f8b5ed8119b&oe=5A1977DB" class="round img-fluid">
                                </div>Ethan Mitchell</h4>
                            <p class="card-text text-muted-sm">Maths / Geography</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ante ut purus viverra molestie in ac leo. Ut blandit quam eget est posuere, eget convallis odio accumsan.</p>
                            <div class="card-button-group">
                            <a class="btn btn-primary" href="#" role="button">View Profile</a>
                            <a href="#" class="btn btn-link">Favourite This Tutor</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group text-muted">
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-map-marker"></i>&nbsp;Sydney</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-graduation-cap"></i>&nbsp;Bachelor Degree</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-dollar-sign"></i>&nbsp;45/Hour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </li>
            <li class="profile-card">
            <div class="card mb-2-5">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="card-title">
                                <div class="card-profileimg">
                                    <img src="https://scontent-syd2-1.xx.fbcdn.net/v/t31.0-8/17159181_1424406024270337_8682811423908150291_o.jpg?oh=6f01dd825df2dfdc7c3d2281a968ec67&oe=5A1BCC93" class="round img-fluid">
                                </div>Blake Garrett</h4>
                            <p class="card-text text-muted-sm">Maths / Geography</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ante ut purus viverra molestie in ac leo. Ut blandit quam eget est posuere, eget convallis odio accumsan.</p>
                            <div class="card-button-group">
                            <a class="btn btn-primary" href="#" role="button">View Profile</a>
                            <a href="#" class="btn btn-link">Favourite This Tutor</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group text-muted">
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-map-marker"></i>&nbsp;Sydney</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-graduation-cap"></i>&nbsp;Bachelor Degree</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-dollar-sign"></i>&nbsp;45/Hour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </li>
            <li class="profile-card">
            <div class="card mb-2-5">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="card-title">
                                <div class="card-profileimg">
                                    <img src="https://scontent-syd2-1.xx.fbcdn.net/v/t31.0-8/340984_257957224248803_991986586_o.jpg?oh=584fdf07a8913cd27de7e1b2bd645bd7&oe=5A13C7B5" class="round img-fluid">
                                </div>Mitchell Dunn</h4>
                            <p class="card-text text-muted-sm">Maths / Geography</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet ante ut purus viverra molestie in ac leo. Ut blandit quam eget est posuere, eget convallis odio accumsan.</p>
                            <div class="card-button-group">
                            <a class="btn btn-primary" href="#" role="button">View Profile</a>
                            <a href="#" class="btn btn-link">Favourite This Tutor</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group text-muted">
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-map-marker"></i>&nbsp;Sydney</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-graduation-cap"></i>&nbsp;Bachelor Degree</li>
                                <li class="list-group-item"><i class="list-group-icon far fa-fw fa-dollar-sign"></i>&nbsp;45/Hour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </li>
        </ul>
    </div>
</div>
@endsection
