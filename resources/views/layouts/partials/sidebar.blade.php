<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span ></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action([\App\Http\Controllers\Admin\OrderController::class,'index'])}}">
                    <span ></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action([\App\Http\Controllers\Admin\ProductController::class,'index'])}}">
                    <span ></span>
                    Products
                </a>
            </li>


        </ul>

        <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span ></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span ></span>
                    Current month
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span ></span>
                    Year-end sale
                </a>
            </li>
        </ul>
        -->
    </div>
</nav>