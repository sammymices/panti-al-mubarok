<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index-2.html">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                xml:space="preserve">
                <path
                    d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
      C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
                <path
                    d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
                <path
                    d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
            </svg>

            <span class="align-middle me-3"><?php echo e(config('app.name')); ?></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Master</li>
            <li class="sidebar-item">
                <a class="sidebar-link"  href="<?php echo e(route('dashboard.index')); ?>">
                    <i class="align-middle" data-feather="home"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <?php if(auth()->user()->role == 'admin'): ?>
                <li class="sidebar-item <?php echo e(request()->routeIs('dashboard.donation.*') ? 'active' : ''); ?>">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="heart"></i>
                            <span class="align-middle">Donasi</span>
                        </a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item <?php echo e(request()->routeIs('dashboard.donation.barang.*') ? 'active' : ''); ?>"><a class="sidebar-link" href="<?php echo e(Route('dashboard.donation.barang.index')); ?>">Barang</a></li>
							<li class="sidebar-item <?php echo e(request()->routeIs('dashboard.donation.uang') ? 'active' : ''); ?>"><a class="sidebar-link" href="<?php echo e(Route('dashboard.donation.uang')); ?>">Uang</a></li>
						</ul>
					</li>
                <li class="sidebar-item <?php echo e(request()->routeIs('dashboard.events.index') ? 'active' : ''); ?>">
                <a class="sidebar-link" href="<?php echo e(route('dashboard.events.index')); ?>">
                    <i class="align-middle" data-feather="calendar"></i>
                    <span class="align-middle">Event</span>
                </a>
                </li>


                <li class="sidebar-item  <?php echo e(request()->routeIs('dashboard.profile.index') ? 'active' : ''); ?>">
                    <a class="sidebar-link" href="<?php echo e(route('dashboard.profile.index')); ?>">
                        <i class="align-middle me-2" data-feather="user"> </i>
                        <span class="align-middle">Data Profiles</span>
                    </a>
                </li>

                <li class="sidebar-item <?php echo e(request()->routeIs('dashboard.child.index') ? 'active' : ''); ?>" >
                    <a class="sidebar-link" href="<?php echo e(route('dashboard.child.index')); ?>">
                        <i class="align-middle me-2" data-feather="smile"></i>
                        <span class="align-middle">Data Anak</span>
                    </a>
                </li>

                <li class="sidebar-item <?php echo e(request()->routeIs('dashboard.feedback.index') ? 'active' : ''); ?>" >
                    <a class="sidebar-link" href="<?php echo e(route('dashboard.feedback.index')); ?>">
                        <i class="align-middle me-2" data-feather="message-circle"></i>
                        <span class="align-middle">Data Feedback</span>
                    </a>
                </li>






















            <?php elseif(auth()->user()->roles->pluck('name')[0] == 'rental'): ?>
































            <?php endif; ?>
        </ul>
    </div>
</nav>
<?php /**PATH C:\abc_Gabrielipp\Semester3\projek_laravel\panti-asuhan\resources\views/dashboard/layout/sidebar.blade.php ENDPATH**/ ?>