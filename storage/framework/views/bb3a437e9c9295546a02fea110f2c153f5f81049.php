<nav id="sidebar">

                
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="<?php echo e(url('map')); ?>"> home </a>
                            </li>


                            
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class="menu">
                        <a href="#peta" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="map"></i>
                                <span>Peta</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="peta" data-bs-parent="#accordionExample">
                            <li>
                                <a href="<?php echo e(url('map')); ?>">Peta Wilayah </a>
                            </li>
                            
                            
                            <li>
                                <a href="<?php echo e(url('/draw/tabel')); ?>"> Tabel Wilayah </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/marker/tabel')); ?>"> Tabel Marker </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#diagram" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="icon_container">
                                <i data-feather="trending-up"></i>
                                 <span>Diagram</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="diagram" data-bs-parent="#accordionExample">
                            <li>
                                <a href="<?php echo e(url('chart-aman-gowa')); ?>">Gowa</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-majene')); ?>"> Majene </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-mamasa')); ?>">Mamasa</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-maros')); ?>">Maros</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-sidrap')); ?>">Sidrap</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-sinjai')); ?>">Sinjai</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('chart-toraya')); ?>">Toraya</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('AMAN-Massenrempulu')); ?>">Massenrempulu</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="users"></i>
                                <span>Kader</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                            
                            <li>
                                <a href="<?php echo e(url('/kader_aman')); ?>"> Kader </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="<?php echo e(url('/kegiatan_aman')); ?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="clipboard"></i>
                                <span>Kegiatan AMAN</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="<?php echo e(url('/anggota_aman')); ?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="clipboard"></i>
                                <span>Anggota AMAN</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="<?php echo e(url('daftar-user')); ?>"> Daftar User </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('register')); ?>">Registrasi Admin</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                
            </nav><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>