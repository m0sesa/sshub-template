<?php
$type = "Tickets";
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
        <div class="sidebar-brand-icon">
            <img src="img/bowen-bw.png" width="40" class="d-inline-block align-top" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">SSHub<sup style='text-transform:lowercase !important'><?= $type ?></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= strtolower(trim($page->title)) === strtolower('Dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="./index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Curricular -->
    <li class="nav-item <?= strtolower(trim($page->title)) === strtolower('Tickets') ? 'active' : '' ?>">
        <a class="nav-link" href="./tickets.php">
            <i class="fas fa-ticket-alt"></i>
            <span>Tickets</span></a>
    </li>

    <!-- Nav Item - Curricular -->
    <li class="nav-item <?= strtolower(trim($page->title)) === strtolower('Open Tickets') ? 'active' : '' ?>">
        <a class="nav-link" href="./tickets.php">
            <i class="far fa-ticket-alt"></i>
            <span>Open Tickets</span></a>
    </li>

    <!-- Nav Item - Curricular -->
    <li class="nav-item <?= strtolower(trim($page->title)) === strtolower('Closed Tickets') ? 'active' : '' ?>">
        <a class="nav-link" href="./tickets.php">
            <i class="far fa-ticket-alt"></i>
            <span>Closed Tickets</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->