<div class="art-info-bar">
    <div class="art-info-bar-frame">
        <div class="art-info-bar-header">
            <a class="art-info-bar-btn" href="#.">
                <i class="fas fa-ellipsis-v"></i>
            </a>
        </div>
        <div class="art-header">
            <div class="art-avatar">
                <a data-fancybox="avatar" href="{{ asset('img/logo_rita.png') }}" class="art-avatar-curtain">
                    <img src="img/logo_rita.png" alt="avatar">
                    <i class="fas fa-expand"></i>
                </a>
                <div class="art-lamp-light">
                    <div class="art-available-lamp"></div>
                </div>
            </div>
            <h5 class="art-name mb-10"><a href="home.html">{{ Auth::User()->nom }} {{ Auth::User()->prenom }}</a></h5>
            <div class="art-sm-text">{{ Auth::User()->Role->label }} <br>{{ Auth::User()->association }}</div>
        </div>
        <div id="scrollbar2" class="art-scroll-frame">
            <div class="art-table p-15-15">
                <ul>
                    <li>
                        <h6>Pays :</h6><span>{{ Auth::User()->pays }}</span>
                    </li>
                    <li>
                        <h6>Ville :</h6><span>{{ Auth::User()->ville }}</span>
                    </li>
                    <li>
                        <h6>Association :</h6><span>{{ Auth::User()->association }}</span>
                    </li>
                </ul>
            </div>
            <div class="art-ls-divider"></div>
            {{-- <div class="art-lang-skills p-30-15">
                <div class="art-lang-skills-item">
                    <div id="circleprog1" class="art-cirkle-progress"></div>
                    <h6>French</h6>
                </div>
                <div class="art-lang-skills-item">
                    <div id="circleprog2" class="art-cirkle-progress"></div>
                    <h6>English</h6>
                </div>
                <div class="art-lang-skills-item">
                    <div id="circleprog3" class="art-cirkle-progress"></div>
                    <h6>Spanish</h6>
                </div>
            </div> --}}
            <div class="art-ls-divider"></div>
            {{-- <div class="art-hard-skills p-30-15">
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <h6>html</h6>
                    </div>
                    <div class="art-line-progress">
                        <div id="lineprog1"></div>
                    </div>
                </div>
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <h6>CSS</h6>
                    </div>
                    <div class="art-line-progress">
                        <div id="lineprog2"></div>
                    </div>
                </div>
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <h6>Js</h6>
                    </div>
                    <div class="art-line-progress">
                        <div id="lineprog3"></div>
                    </div>
                </div>
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <h6>PHP</h6>
                    </div>
                    <div class="art-line-progress">
                        <div id="lineprog4"></div>
                    </div>
                </div>
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <h6>Wordpress</h6>
                    </div>
                    <div class="art-line-progress">
                        <div id="lineprog5"></div>
                    </div>
                </div>

            </div> --}}
            <div class="art-ls-divider"></div>
            <h5 class="mt-3">Support</h5>
            <ul class="art-knowledge-list p-15-0">
                <li>mokutech94@gmail.com</li>
                <li>terezdongmo.cb@gmail.com</li>
                <li>+226 61 34 65 54</li>
                <li>+237 95 45 74 98</li>
            </ul>
            <div class="art-ls-divider"></div>

            <div class="art-links-frame p-15-15">

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning" style="color: #002a54;font-weight:bold">
                        <i class="fa fa-sign-out-alt"></i> Deconnexion
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
