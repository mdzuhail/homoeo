@extends('layouts.app')


@section('content')
    <!-- Toggle Button -->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4">
        <i class="ki-outline ki-setting-4 fs-4 me-1"></i> Patient History
    </button>

    <!-- Drawer -->
    <div id="kt_app_layout_builder" class="bg-body drawer drawer-end">
        <div class="card border-0 shadow-none rounded-0 w-100">
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header" style="background:#000">
                <!-- Card Title -->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Patient History
                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                        Previous Consultations and Updates
                    </small>
                </h3>
                <!-- Card Toolbar -->
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                        id="kt_app_layout_builder_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Drawer Hidden State */
        #kt_app_layout_builder {
            position: fixed;
            top: 0;
            right: -400px;
            /* Hidden off-screen */
            height: 100%;
            width: 380px;
            background: #f8f9fa;
            z-index: 1050;
            display: none;
            /* Initially hidden */
            transition: right 0.3s ease;
            /* Smooth slide effect */
        }

        /* Drawer Visible State */
        #kt_app_layout_builder.drawer-on {
            display: block;
            right: 0;
            /* Slide into view */
        }

        /* Backdrop for Better UX */
        .drawer-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent */
            z-index: 1049;
            /* Below the drawer */
            display: none;
            /* Initially hidden */
            opacity: 0;
            transition: opacity 0.3s ease;
            /* Fade in/out effect */
        }

        .drawer-backdrop.active {
            display: block;
            opacity: 1;
        }

        .btn-icon:hover .ki-outline.ki-cross-square {
            color: var(--bs-primary);
        }


    </style>

    <script>
        // Toggle Button Click Event
        document.getElementById('kt_app_layout_builder_toggle').addEventListener('click', function() {
            const drawer = document.getElementById('kt_app_layout_builder');
            let backdrop = document.querySelector('.drawer-backdrop');

            // Check if backdrop exists, create if not
            if (!backdrop) {
                backdrop = document.createElement('div');
                backdrop.className = 'drawer-backdrop';
                document.body.appendChild(backdrop);
            }

            if (!drawer.classList.contains('drawer-on')) {
                // Open Drawer
                drawer.classList.add('drawer-on');
                drawer.style.display = 'block';
                backdrop.classList.add('active');
            } else {
                // Close Drawer
                closeDrawer(drawer, backdrop);
            }

            // Backdrop Click Event
            backdrop.addEventListener('click', function() {
                closeDrawer(drawer, backdrop);
            });
        });

        // Close Button Click Event
        document.getElementById('kt_app_layout_builder_close').addEventListener('click', function() {
            const drawer = document.getElementById('kt_app_layout_builder');
            const backdrop = document.querySelector('.drawer-backdrop');
            closeDrawer(drawer, backdrop);
        });

        // Close Drawer Function
        function closeDrawer(drawer, backdrop) {
            if (drawer.classList.contains('drawer-on')) {
                drawer.classList.remove('drawer-on');
                setTimeout(() => (drawer.style.display = 'none'), 300); // Wait for animation to complete
                if (backdrop) {
                    backdrop.classList.remove('active');
                }
            }
        }
    </script>
@endsection
