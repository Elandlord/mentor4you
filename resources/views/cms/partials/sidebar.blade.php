  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/user_icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="text-color-light">{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <?php if(Auth::user()->admin == 1){?>

        <li class="header">CRM Beheer</li>
        <!-- CUSTOM NAVIGATION GOES BETWEEN THIS AND -->

        
        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-clipboard"></i> <span>Aanmeldingen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("/cms/candidate/mentoren") }}"><i class="fa fa-circle-o text-orange"></i> Aanmeldingen mentoren </a></li>
            <li><a href="{{ URL::to("/cms/candidate/jongeren") }}"><i class="fa fa-circle-o text-orange"></i>Aanmeldingen jongeren </a></li>
          </ul>
        </li>
        <!-- end of section -->

         <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-android-person-add"></i> <span>Gebruikers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ URL::to("cms/user") }}"><i class="fa fa-circle-o text-orange"></i>Overzicht </a></li>
              <li><a href="{{ URL::to("cms/user/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-ios-folder-outline"></i> <span>Bestanden</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/maps") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <!-- <li><a href="{{ URL::to("cms/maps/create") }}"><i class="fa fa-circle-o text-orange"></i> Map toevoegen </a></li> -->
            <li><a href="{{ URL::to("cms/mappen/overzicht") }}"><i class="fa fa-circle-o text-orange"></i> Map bewerken </a></li>
          </ul>
        </li>
        <!-- end of section -->



        <!-- ////////////  THIS  ////////////////////// -->

        <li class="header">Website beheer</li>

        <!--  pages and sections -->
        @include('cms.navigation.navigation-dropdown', [
          'title' => "Pagina's",
          'icon' => 'ion ion-document',
          'linkGroup' => [
            [
              'header' => "Pagina's",
              'cms/page' => 'Overzicht',
            ],
          ]
        ])


        <!-- CUSTOM NAVIGATION LINKS GO UNDERNEATH HERE -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-ios-person"></i> <span>Mentoren</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ URL::to("cms/mentor") }}"><i class="fa fa-circle-o text-orange"></i>Overzicht </a></li>
              <li><a href="{{ URL::to("cms/mentor/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-ios-paper"></i> <span>Nieuws</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/news") }}"><i class="fa fa-circle-o text-orange"></i>Overzicht </a></li>
            <li><a href="{{ URL::to("cms/news/create") }}"><i class="fa fa-circle-o text-orange"></i>Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-briefcase"></i> <span>Partners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/partner") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/partner/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

         <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-person-stalker"></i> <span>Teammembers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/teammember") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/teammember/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-android-happy"></i> <span>Jongeren</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/youth") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/youth/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <?php }else{?>

         <li class="header">Bestanden</li>

         <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-ios-folder-outline"></i> <span>Bestanden</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/maps") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <?php }?>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
