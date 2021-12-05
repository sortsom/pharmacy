<!-- Brand Logo -->
<a href="#" class="brand-link">
    <img src="{{asset('admins/dist/img/logo-1.jpg')}}" alt="Pharmacy" class="brand-image img-circle " style="opacity: .8">
    <span class="brand-text font-weight-light">Pharmacy Angkor</span>
</a>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard Admin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard users</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Employees<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.employees.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>add employees</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.employees.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Employees List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Customers<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('/customer')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/customers')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Customer List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Credit Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Paid Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Customer Ladger</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Supplies<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('supplier')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>add Supplies</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/suppliers')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Supplies List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Supplies ledger</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Medicine<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('/medicine')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Medicine</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Medicine List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/category')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/categories')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('unit')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Unit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('units')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Unit List</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Purchase<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>add Purchase</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Purchase List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Invoice<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('/invoice')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>add Invoice</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>POS Invoice</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/invoiced')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoice List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Stock<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stock Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stock Report(Batch Wise)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Available Stock</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{asset('/product')}}" class="nav-link">
                    <i class="nav-icon fas fa-ambulance"></i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cart-arrow-down"></i>
                    <p>Sales</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>Orders<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('/order')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>add orders</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('/ordered')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Orders Details</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Report<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Closing</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Closing List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sales Report(User)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sales Report(Product)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sales Report(Category)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Purchase Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Purchase Report(Category)</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Setting<i class="fas fa-angle-left right"></i><span class="badge badge-info right"></span></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Top Navigation</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
