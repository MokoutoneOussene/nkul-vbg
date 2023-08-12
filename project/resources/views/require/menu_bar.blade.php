<div class="art-menu-bar">

    <div class="art-menu-bar-frame">

        <div class="art-menu-bar-header">
            <a class="art-menu-bar-btn" href="#.">
                <span></span>
            </a>
        </div>
        <div class="art-current-page"></div>
        <div class="art-scroll-frame">
            <nav id="swupMenu">

                @can('isAdmin')
                    <ul class="main-menu">
                        <li class="menu-item"><a href="{{ route('home') }}">DASHBOARD</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#.">ENQUETES</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('gestion_enquete.create') }}">Ajouter Enquetes</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('gestion_enquete.index') }}">Liste des Enquetes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#.">UTILISATEURS</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('gestion_users.create') }}">Ajouter utilisateur</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('gestion_users.index') }}">Liste des
                                        utilisateurs</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="{{ route('gestion_posts.index') }}">BLOG</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_alerts.index') }}">ALERTS</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_refuge.index') }}">DEMANDE REFUGE</a></li>
                    </ul>
                @endcan

                @can('isObservateur')
                    <ul class="main-menu">
                        <li class="menu-item"><a href="{{ route('home') }}">DASHBOARD</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#.">ENQUETES</a>
                            <!-- sub menu -->
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('gestion_enquete.create') }}">Ajouter Enquetes</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('gestion_enquete.index') }}">Liste des Enquetes</a>
                                </li>
                            </ul>
                            <!-- sub menu end -->
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#.">UTILISATEURS</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('form_user') }}">Ajouter utilisateur</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('list_user') }}">Liste des
                                        utilisateurs</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="{{ route('gestion_posts.index') }}">BLOG</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_alerts.index') }}">ALERTS</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_refuge.index') }}">DEMANDE REFUGE</a></li>
                    </ul>
                @endcan

                @can('isUser')
                    <ul class="main-menu">
                        <li class="menu-item"><a href="{{ route('home') }}">DASHBOARD</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_posts.index') }}">BLOG</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_alerts.index') }}">ALERTS</a></li>
                        <li class="menu-item"><a href="{{ route('gestion_refuge.index') }}">DEMANDE REFUGE</a></li>
                    </ul>
                @endcan
            </nav>
        </div>
    </div>
</div>
