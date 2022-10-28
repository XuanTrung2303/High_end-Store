<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <img src="../img/logoo.png" class="navbar-brand-img h-100">
            <span class="ms-1 font-weight-bold text-white">High-End Store</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{asset('/dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('admin/users/index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-10">receipt_long</i>
                    Category
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{asset('admin/categories/create')}}">Add category</a></li>
                    <li><a class="dropdown-item" href="{{asset('admin/categories/index')}}">List category</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-10">receipt_long</i>
                    Brand
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{asset('admin/brands/create')}}">Add Brand</a></li>
                    <li><a class="dropdown-item" href="{{asset('admin/brands/index')}}">List Brand</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-10">receipt_long</i>
                    Product
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{asset('admin/products/create')}}">Add Product</a></li>
                    <li><a class="dropdown-item" href="{{asset('admin/products/index')}}">List Product</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('admin/orders/index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('admin/comment_product/index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Product_Comments</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-10">receipt_long</i>
                    Blog
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{asset('admin/blogs/create')}}">Add blog</a></li>
                    <li><a class="dropdown-item" href="{{asset('admin/blogs/index')}}">List blog</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('admin/comment_blog/index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Blog_Comments</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
