<div class="vertical-menu">


    <!-- LOGO -->
    <div class="navbar-brand-box">
       <a href="#" class="logo logo-dark">
           <span class="logo-sm">
               <img src="assets/images/logo-sm.svg" alt="" height="26">
           </span>
           <span class="logo-lg">
               <img src="assets/images/logo-lg.svg" alt="" height="40">
           </span>
       </a>

       <a href="#" class="logo logo-light">
           <span class="logo-sm">
               <img src="assets/images/logo-sm.svg" alt="" height="26">
           </span>
           <span class="logo-lg">
               <img src="assets/images/logo-lg-wh.svg" alt="" height="40">
           </span>
       </a>
   </div>

   <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
       <i class="fa fa-fw fa-bars"></i>
   </button>

   <div data-simplebar class="sidebar-menu-scroll">

       <!--- Sidemenu -->
       <div id="sidebar-menu">
           <!-- Left Menu Start -->
           <ul class="metismenu list-unstyled" id="side-menu">
               <li class="menu-title" data-key="t-menu">For Admin</li>

               <li>
                   <a href="#">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                   </a>
               </li>


               <li>
                   <a href="{{route('employee.index')}}" class="">
                       <i class="bx bx-shield-quarter nav-icon"></i>
                       <span class="menu-item" data-key="t-ecommerce">User</span>
                   </a>
                   {{-- <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">For Central Store</a></li>
                       <li><a href="#">For Retailer</a></li>
                       <li><a href="#">For Publisher</a></li>
                       
                   </ul> --}}
               </li>


               <li>
                   <a href="{{route('task.index')}}">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Role</span>
                   </a>
               </li>
               
               <li>
                   <a href="#">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Districts Masters</span>
                   </a>
               </li>
               
                <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-shield-quarter nav-icon"></i>
                       <span class="menu-item" data-key="t-ecommerce">Content Management</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">Manage blog posts</a></li>
                       <li><a href="#">Manage Articles</a></li>
                       
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-file nav-icon"></i>
                       <span class="menu-item">Reports and Analytics</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">Overall Summary Report</a></li>
                       <li><a href="#">Activity Report</a></li>
                       <li><a href="#">Profit and Loss</a></li>
                       <li><a href="#">Sale Report</a></li>
                       <li><a href="#">Purchase Report</a></li>
                       <li><a href="#">Inventory Report</a></li>
                       <li><a href="#">Product Report</a></li>
                       <li><a href="#">Customer Report</a></li>
                       <li><a href="#">Supplier Report</a></li>
                       <li><a href="#">Payment Sale</a></li>
                       <li><a href="#">Payment Purchase</a></li>
                       <li><a href="#">Payment Sale Return</a></li>
                       <li><a href="#">Payment Purchase Return</a></li>
                       <li><a href="#">Product Quantity Alerts</a></li>
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-briefcase-alt-2 nav-icon"></i>
                       <span class="menu-item" data-key="t-projects">Utility</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">Bulk Email/SMS Notification</a></li>
                       <li><a href="#">Backup</a></li>
                   </ul>
               </li>

       
               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-briefcase-alt-2 nav-icon"></i>
                       <span class="menu-item" data-key="t-projects">Settings</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">Print</a></li>
                       <li><a href="#">Payment Mode</a></li>
                       <li><a href="#">POS Receipt</a></li>
                       <li><a href="#">SMS Templates</a></li>
                       <li><a href="#">Email Templates</a></li>
                   </ul>
               </li>
               
               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-briefcase-alt-2 nav-icon"></i>
                       <span class="menu-item" data-key="t-projects">Help and Support</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="#">Give support for all Users</a></li>
                       <li><a href="#">Manage FAQ and Documation</a></li>
                   </ul>
               </li>
               
               <li class="menu-title" data-key="t-components">Components</li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-tone nav-icon"></i>
                       <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="ui-alerts.php" data-key="t-alerts">Alerts</a></li>
                       <li><a href="ui-buttons.php" data-key="t-buttons">Buttons</a></li>
                       <li><a href="ui-cards.php" data-key="t-cards">Cards</a></li>
                       <li><a href="ui-carousel.php" data-key="t-carousel">Carousel</a></li>
                       <li><a href="ui-dropdowns.php" data-key="t-dropdowns">Dropdowns</a></li>
                       <li><a href="ui-grid.php" data-key="t-grid">Grid</a></li>
                       <li><a href="ui-images.php" data-key="t-images">Images</a></li>
                       <li><a href="ui-modals.php" data-key="t-modals">Modals</a></li>
                       <li><a href="ui-offcanvas.php" data-key="t-offcanvas">Offcanvas</a></li>
                       <li><a href="ui-placeholders.php" data-key="t-placeholders">Placeholders</a></li>
                       <li><a href="ui-progressbars.php" data-key="t-progress-bars">Progress Bars</a></li>
                       <li><a href="ui-tabs-accordions.php" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                       <li><a href="ui-typography.php" data-key="t-typography">Typography</a></li>
                       <li><a href="ui-video.php" data-key="t-video">Video</a></li>
                       <li><a href="ui-general.php" data-key="t-general">General</a></li>
                       <li><a href="ui-colors.php" data-key="t-colors">Colors</a></li>
                       <li><a href="ui-utilities.php" data-key="t-utilities">Utilities</a></li>
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-pencil nav-icon"></i>
                       <span class="menu-item" data-key="t-forms">Forms</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="form-elements.php" data-key="t-basic-elements">Basic Elements</a></li>
                       <li><a href="form-validation.php" data-key="t-validation">Validation</a></li>
                       <li><a href="form-advanced.php" data-key="t-advanced-plugins">Advanced Plugins</a></li>
                       <li><a href="form-editors.php" data-key="t-editors">Editors</a></li>
                       <li><a href="form-uploads.php" data-key="t-file-upload">File Upload</a></li>
                       <li><a href="form-wizard.php" data-key="t-wizard">Wizard</a></li>
                       <li><a href="form-mask.php" data-key="t-mask">Mask</a></li>
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-table nav-icon"></i>
                       <span class="menu-item" data-key="t-tables">Tables</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="tables-basic.php" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
                       <li><a href="tables-advanced.php" data-key="t-advanced-tables">Advance Tables</a></li>
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-bar-chart-alt-2 nav-icon"></i>
                       <span class="menu-item" data-key="t-apex-charts">Apex Charts</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="charts-line.php" data-key="t-line">Line</a></li>
                       <li><a href="charts-area.php" data-key="t-area">Area</a></li>
                       <li><a href="charts-column.php" data-key="t-column">Column</a></li>
                       <li><a href="charts-bar.php" data-key="t-bar">Bar</a></li>
                       <li><a href="charts-mixed.php" data-key="t-mixed">Mixed</a></li>
                       <li><a href="charts-timeline.php" data-key="t-timeline">Timeline</a></li>
                       <li><a href="charts-candlestick.php" data-key="t-candlestick">Candlestick</a></li>
                       <li><a href="charts-boxplot.php" data-key="t-boxplot">Boxplot</a></li>
                       <li><a href="charts-bubble.php" data-key="t-bubble">Bubble</a></li>
                       <li><a href="charts-scatter.php" data-key="t-scatter">Scatter</a></li>
                       <li><a href="charts-heatmap.php" data-key="t-heatmap">Heatmap</a></li>
                       <li><a href="charts-treemap.php" data-key="t-treemap">Treemap</a></li>
                       <li><a href="charts-pie.php" data-key="t-pie">Pie</a></li>
                       <li><a href="charts-radialbar.php" data-key="t-radialbar">Radialbar</a></li>
                       <li><a href="charts-radar.php" data-key="t-radar">Radar</a></li>
                       <li><a href="charts-polararea.php" data-key="t-polararea">Polararea</a></li>
                   </ul>
               </li>

               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-archive nav-icon"></i>
                       <span class="menu-item" data-key="t-icons">Icons</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="false">
                       <li><a href="icons-unicons.php" data-key="t-unicons">Unicons</a></li>
                       <li><a href="icons-feathericons.php" data-key="t-feather-icons">Feather icons</a></li>
                       <li><a href="icons-boxicons.php" data-key="t-boxicons">Boxicons</a></li>
                       <li><a href="icons-materialdesign.php" data-key="t-material-design">Material Design</a></li>
                       <li><a href="icons-fontawesome.php" data-key="t-font-awesome">Font Awesome 5</a></li>
                   </ul>
               </li>



               <li>
                   <a href="javascript: void(0);" class="has-arrow">
                       <i class="bx bx-share-alt nav-icon"></i>
                       <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                   </a>
                   <ul class="sub-menu" aria-expanded="true">
                       <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                       <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                           <ul class="sub-menu" aria-expanded="true">
                               <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                               <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                           </ul>
                       </li>
                   </ul>
               </li>



           </ul>
       </div>
       <!-- Sidebar -->
   </div>
</div>
<!-- Left Sidebar End -->