
<!-- Aside Start-->
<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
         <a href="/cms" class="logo-expanded">

                    <span class="nav-label">CMS MENTOR4YOU </span>
                </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">

            <!-- pages en sections -->
            <li class="has-submenu ">
                <a href="#"><i class="ion-document"></i>
                <span class="nav-label">Pagina beheer</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/page") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/page/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                    <li><strong><a href="#">Foto slider / banner</a></strong></li>
                    <li><a href="{{ URL::to("cms/slider/edit") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                </ul>
            </li>

            <!-- candidates -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Aanmeldingen</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/candidate/mentoren") }}"><i class="ion-grid"></i> Aanmeldingen mentoren </a></li>
                    <li><a href="{{ URL::to("cms/candidate/jongeren") }}"><i class="ion-grid"></i> Aanmeldingen jongeren </a></li>
                </ul>
            </li>

            <!-- mentoren -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Mentoren</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/mentor") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/mentor/create") }}"><i class="ion-grid"></i> Toevoegen </a></li>
                </ul>
            </li>
            <!-- news -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Nieuws</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/news") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/news/create") }}"><i class="ion-grid"></i> Toevoegen </a></li>
                </ul>
            </li>
            <!-- partners -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Partners</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/partner") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/partner/create") }}"><i class="ion-grid"></i> Toevoegen </a></li>
                </ul>
            </li>

            <!-- partners -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Teammembers</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/teammember") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/teammember/create") }}"><i class="ion-grid"></i> Toevoegen </a></li>
                </ul>
            </li>

            <!-- jongeren -->
            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Jongeren</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/youth") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/youth/create") }}"><i class="ion-grid"></i> Toevoegen </a></li>
                </ul>
            </li>


            <li><a href="{{ URL::to("/logout") }}"><i class="ion-home"></i> <span
                            class="nav-label">Logout</span></a>
            </li>

        </ul>
    </nav>

</aside>
<!-- Aside Ends-->