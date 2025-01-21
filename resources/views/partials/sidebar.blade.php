<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ url('admin') }}" class="d-block text-decoration-none position-relative">
{{--            <img src="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}" alt="logo-icon" style="margin-left: 48px;height: 35px;">--}}
{{--            <img id="logo-image" src="{{asset('images/photo_settings/lightlogo.png')}}" alt="logo-icon" style="margin-left: 48px;height: 35px;" >--}}
            <img id="logo-image" src="" alt="" style="visibility: hidden">
            <span class="logo-text fw-bold text-dark">TGI Admin</span>
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
           <!-- <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MAIN</span>
            </li>v-->
{{--            <li class="menu-item open">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">dashboard</span>--}}
{{--                    <span class="title">Dashboard</span>--}}
{{--                    <span class="count">5</span>--}}
{{--                </a>--}}

{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin') }}" class="menu-link {{ Request::is('/') ? 'active' : '' }}">--}}
{{--                            eCommerce--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/crm') }}" class="menu-link {{ Request::is('crm') ? 'active' : '' }}">--}}
{{--                            CRM--}}
{{--                            <span class="hot tag">Hot</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/project-management') }}" class="menu-link {{ Request::is('project-management') ? 'active' : '' }}">--}}
{{--                            Project Management--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item mb-0">--}}
{{--                        <a href="{{ url('admin/lms') }}" class="menu-link {{ Request::is('lms') ? 'active' : '' }}">--}}
{{--                            LMS--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item mb-0">--}}
{{--                        <a href="{{ url('admin/help-desk') }}" class="menu-link {{ Request::is('help-desk') ? 'active' : '' }}">--}}
{{--                            HelpDesk--}}
{{--                            <span class="new tag">New</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">note_stack</span>--}}
{{--                    <span class="title">Front Pages</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/landing-page') }}" class="menu-link {{ Request::is('landing-page') ? 'active' : '' }}">--}}
{{--                            Landing Page--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/pricing-plan') }}" class="menu-link {{ Request::is('pricing-plan') ? 'active' : '' }}">--}}
{{--                            Pricing Plan--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/faq') }}" class="menu-link {{ Request::is('faq') ? 'active' : '' }}">--}}
{{--                            FAQ--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/timeline') }}" class="menu-link {{ Request::is('timeline') ? 'active' : '' }}">--}}
{{--                            Timeline--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-title small text-uppercase">--}}
{{--                <span class="menu-title-text">APPS</span>--}}
{{--            </li>--}}

            <li class="menu-item">
                <a href="{{ route('pages.index') }}" class="menu-link {{ Request::is('pages') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">description</span>
                    <span class="title">Menu</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('sectionTypes.index') }}" class="menu-link {{ Request::is('sectionTypes*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">folder</span>
                    <span class="title">Section Types</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('sliders.index') }}" class="menu-link {{ Request::is('sliders') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">slideshow</span>
                    <span class="title">slideshow</span>
                </a>
            </li>

          <!--  <li class="menu-item">
                <a href="{{ route('services.index') }}" class="menu-link {{ Request::is('services') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">handyman</span>
                    <span class="title">Sections</span>
                </a>
            </li>-->

            <li class="menu-item">
                <a href="{{ route('categories.index') }}" class="menu-link {{ Request::is('categories') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">table</span>
                    <span class="title">Gallery Categories</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('galleries.index') }}" class="menu-link {{ Request::is('galleries') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">collections</span>
                    <span class="title">Gallery</span>
                </a>
            </li>

           <!-- <li class="menu-item">
                <a href="{{ route('projects.index') }}" class="menu-link {{ Request::is('projects') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">work</span>
                    <span class="title">Projects</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('project-photos.index') }}" class="menu-link {{ Request::is('projectPhotos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">image</span>
                    <span class="title">Project Photos</span>
                </a>
            </li>



            <li class="menu-item">
                <a href="{{ route('photo-settings.index') }}" class="menu-link {{ Request::is('photo-settings') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">photo_camera</span>
                    <span class="title">Photo Settings</span>
                </a>
            </li>

            -->

            <li class="menu-item">
                <a href="{{ route('clients.index') }}" class="menu-link {{ Request::is('projectPhotos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">contact_page</span>
                    <span class="title">Sponsers</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('members.index')}}" class="menu-link {{ Request::is('members') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Team Members</span>
                </a>
            </li>


            <li class="menu-item">
                <a href="{{ route('joins.index')}}" class="menu-link {{ Request::is('joins') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">handshake</span>
                    <span class="title">Join Us</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('contacts.index') }}" class="menu-link {{ Request::is('projectPhotos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">mail</span>
                    <span class="title">Contacts</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link {{ Request::is('projectPhotos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">group_add</span>
                    <span class="title">Admin Users</span>
                </a>
            </li>



            <li class="menu-item">
                <a href="{{ route('settings.index') }}" class="menu-link {{ Request::is('settings') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">General Settings</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('photo-settings.index') }}" class="menu-link {{ Request::is('photo-settings') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">photo_camera</span>
                    <span class="title">Logo Settings</span>
                </a>
            </li>


            {{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/to-do-list') }}" class="menu-link {{ Request::is('to-do-list') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">format_list_bulleted</span>--}}
{{--                    <span class="title">To Do List</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/contacts') }}" class="menu-link {{ Request::is('contacts') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">contact_page</span>--}}
{{--                    <span class="title">Contacts</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/chat') }}" class="menu-link {{ Request::is('chat') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">chat</span>--}}
{{--                    <span class="title">Chat</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">mail</span>--}}
{{--                    <span class="title">Email</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/inbox') }}" class="menu-link {{ Request::is('inbox') ? 'active' : '' }}">--}}
{{--                            Inbox--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/compose') }}" class="menu-link {{ Request::is('compose') ? 'active' : '' }}">--}}
{{--                            Compose--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/read-email') }}" class="menu-link {{ Request::is('read-email') ? 'active' : '' }}">--}}
{{--                            Read Email--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/snoozed') }}" class="menu-link {{ Request::is('snoozed') ? 'active' : '' }}">--}}
{{--                            Snoozed--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/draft') }}" class="menu-link {{ Request::is('draft') ? 'active' : '' }}">--}}
{{--                            Draft--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/sent-mail') }}" class="menu-link {{ Request::is('sent-mail') ? 'active' : '' }}">--}}
{{--                            Sent Mail--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/trash-email') }}" class="menu-link {{ Request::is('trash-email') ? 'active' : '' }}">--}}
{{--                            Trash--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/spam') }}" class="menu-link {{ Request::is('spam') ? 'active' : '' }}">--}}
{{--                            Spam--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/starred') }}" class="menu-link {{ Request::is('starred') ? 'active' : '' }}">--}}
{{--                            Starred--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/important') }}" class="menu-link {{ Request::is('important') ? 'active' : '' }}">--}}
{{--                            Important--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/kanban-board') }}" class="menu-link {{ Request::is('kanban-board') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">space_dashboard</span>--}}
{{--                    <span class="title">Kanban Board</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">folder</span>--}}
{{--                    <span class="title">File Manager</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/file-manager') }}" class="menu-link {{ Request::is('file-manager') ? 'active' : '' }}">--}}
{{--                            My Drive--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/assets-manager') }}" class="menu-link {{ Request::is('assets-manager') ? 'active' : '' }}">--}}
{{--                            Assets--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/projects')}}" class="menu-link {{ Request::is('projects') ? 'active' : '' }}">--}}
{{--                            Projects--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/personal')}}" class="menu-link {{ Request::is('personal') ? 'active' : '' }}">--}}
{{--                            Personal--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/applications')}}" class="menu-link {{ Request::is('applications') ? 'active' : '' }}">--}}
{{--                            Applications--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/documents')}}" class="menu-link {{ Request::is('documents') ? 'active' : '' }}">--}}
{{--                            Documents--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/media')}}" class="menu-link {{ Request::is('media') ? 'active' : '' }}">--}}
{{--                            Media--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-title small text-uppercase">--}}
{{--                <span class="menu-title-text">PAGES</span>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">shopping_cart</span>--}}
{{--                    <span class="title">eCommerce</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/products-grid')}}" class="menu-link {{ Request::is('products-grid') ? 'active' : '' }}">--}}
{{--                            Products Grid--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/products-list')}}" class="menu-link {{ Request::is('products-list') ? 'active' : '' }}">--}}
{{--                            Products List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/product-details')}}" class="menu-link {{ Request::is('product-details') ? 'active' : '' }}">--}}
{{--                            Product Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-product')}}" class="menu-link {{ Request::is('create-product') ? 'active' : '' }}">--}}
{{--                            Create Product--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/edit-product')}}" class="menu-link {{ Request::is('edit-product') ? 'active' : '' }}">--}}
{{--                            Edit Product--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/cart')}}" class="menu-link {{ Request::is('cart') ? 'active' : '' }}">--}}
{{--                            Cart--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/checkout')}}" class="menu-link {{ Request::is('checkout') ? 'active' : '' }}">--}}
{{--                            Checkout--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/orders')}}" class="menu-link {{ Request::is('orders') ? 'active' : '' }}">--}}
{{--                            Orders--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/order-details')}}" class="menu-link {{ Request::is('order-details') ? 'active' : '' }}">--}}
{{--                            Order Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-order')}}" class="menu-link {{ Request::is('create-order') ? 'active' : '' }}">--}}
{{--                            Create Order--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/order-tracking')}}" class="menu-link {{ Request::is('order-tracking') ? 'active' : '' }}">--}}
{{--                            Order Tracking--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/customers')}}" class="menu-link {{ Request::is('customers') ? 'active' : '' }}">--}}
{{--                            Customers--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/customer-details')}}" class="menu-link {{ Request::is('customer-details') ? 'active' : '' }}">--}}
{{--                            Customer Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/categories')}}" class="menu-link {{ Request::is('categories') ? 'active' : '' }}">--}}
{{--                            Categories--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/sellers')}}" class="menu-link {{ Request::is('sellers') ? 'active' : '' }}">--}}
{{--                            Sellers--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/seller-details')}}" class="menu-link {{ Request::is('seller-details') ? 'active' : '' }}">--}}
{{--                            Seller Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-seller')}}" class="menu-link {{ Request::is('create-seller') ? 'active' : '' }}">--}}
{{--                            Create Seller--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/reviews')}}" class="menu-link {{ Request::is('reviews') ? 'active' : '' }}">--}}
{{--                            Reviews--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/refunds')}}" class="menu-link {{ Request::is('refunds') ? 'active' : '' }}">--}}
{{--                            Refunds--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">handshake</span>--}}
{{--                    <span class="title">CRM</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/contacts-2')}}" class="menu-link {{ Request::is('contacts-2') ? 'active' : '' }}">--}}
{{--                            Contacts--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/customers-2')}}" class="menu-link {{ Request::is('customers-2') ? 'active' : '' }}">--}}
{{--                            Customers--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/leads')}}" class="menu-link {{ Request::is('leads') ? 'active' : '' }}">--}}
{{--                            Leads--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/deals')}}" class="menu-link {{ Request::is('deals') ? 'active' : '' }}">--}}
{{--                            Deals--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">content_paste</span>--}}
{{--                    <span class="title">Project Management</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/project-overview')}}" class="menu-link {{ Request::is('project-overview') ? 'active' : '' }}">--}}
{{--                            Project Overview--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/project-list')}}" class="menu-link {{ Request::is('project-list') ? 'active' : '' }}">--}}
{{--                            Project List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-project')}}" class="menu-link {{ Request::is('create-project') ? 'active' : '' }}">--}}
{{--                            Create Project--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/clients')}}" class="menu-link {{ Request::is('clients') ? 'active' : '' }}">--}}
{{--                            Clients--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/teams')}}" class="menu-link {{ Request::is('teams') ? 'active' : '' }}">--}}
{{--                            Teams--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/kanban-board-2')}}" class="menu-link {{ Request::is('kanban-board-2') ? 'active' : '' }}">--}}
{{--                            Kanvan Board--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/user')}}" class="menu-link {{ Request::is('user') ? 'active' : '' }}">--}}
{{--                            User--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">auto_stories</span>--}}
{{--                    <span class="title">LMS</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/courses-list')}}" class="menu-link {{ Request::is('courses-list') ? 'active' : '' }}">--}}
{{--                            Courses List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/course-details')}}" class="menu-link {{ Request::is('course-details') ? 'active' : '' }}">--}}
{{--                            Course Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/lesson-preview')}}" class="menu-link {{ Request::is('lesson-preview') ? 'active' : '' }}">--}}
{{--                            Lesson Preview--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-course')}}" class="menu-link {{ Request::is('create-course') ? 'active' : '' }}">--}}
{{--                            Create Course--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/edit-course')}}" class="menu-link {{ Request::is('edit-course') ? 'active' : '' }}">--}}
{{--                            Edit Course--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/instructors')}}" class="menu-link {{ Request::is('instructors') ? 'active' : '' }}">--}}
{{--                            Instructors--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">support</span>--}}
{{--                    <span class="title">Help Desk</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/tickets')}}" class="menu-link {{ Request::is('tickets') ? 'active' : '' }}">--}}
{{--                            Tickets--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/ticket-details')}}" class="menu-link {{ Request::is('ticket-details') ? 'active' : '' }}">--}}
{{--                            Ticket Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/agents')}}" class="menu-link {{ Request::is('agents') ? 'active' : '' }}">--}}
{{--                            Agents--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/reports')}}" class="menu-link {{ Request::is('reports') ? 'active' : '' }}">--}}
{{--                            Reports--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">local_activity</span>--}}
{{--                    <span class="title">Events</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/events')}}" class="menu-link {{ Request::is('events') ? 'active' : '' }}">--}}
{{--                            Events--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/events-list')}}" class="menu-link {{ Request::is('events-list') ? 'active' : '' }}">--}}
{{--                            Events List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/event-details')}}" class="menu-link {{ Request::is('event-details') ? 'active' : '' }}">--}}
{{--                            Event Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-an-event')}}" class="menu-link {{ Request::is('create-an-event') ? 'active' : '' }}">--}}
{{--                            Create An Event--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/edit-an-event')}}" class="menu-link {{ Request::is('edit-an-event') ? 'active' : '' }}">--}}
{{--                            Edit An Event--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">share</span>--}}
{{--                    <span class="title">Social</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/profile')}}" class="menu-link {{ Request::is('profile') ? 'active' : '' }}">--}}
{{--                            Profile--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/settings')}}" class="menu-link {{ Request::is('settings') ? 'active' : '' }}">--}}
{{--                            Settings--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">content_paste</span>--}}
{{--                    <span class="title">Invoice</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/invoice-list')}}" class="menu-link {{ Request::is('invoice-list') ? 'active' : '' }}">--}}
{{--                            Invoice List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/invoice-details')}}" class="menu-link {{ Request::is('invoice-details') ? 'active' : '' }}">--}}
{{--                            Invoice Details--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/create-invoice')}}" class="menu-link {{ Request::is('create-invoice') ? 'active' : '' }}">--}}
{{--                            Create Invoice--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/edit-invoice')}}" class="menu-link {{ Request::is('edit-invoice') ? 'active' : '' }}">--}}
{{--                            Edit Invoice--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">group_add</span>--}}
{{--                    <span class="title">Users</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/team-members')}}" class="menu-link {{ Request::is('team-members') ? 'active' : '' }}">--}}
{{--                            Team Members--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/users-list')}}" class="menu-link {{ Request::is('users-list') ? 'active' : '' }}">--}}
{{--                            Users List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/add-user')}}" class="menu-link {{ Request::is('add-user') ? 'active' : '' }}">--}}
{{--                            Add User--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">account_circle</span>--}}
{{--                    <span class="title">Profile</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/user-profile')}}" class="menu-link {{ Request::is('user-profile') ? 'active' : '' }}">--}}
{{--                            User Profile--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/teams-2')}}" class="menu-link {{ Request::is('teams-2') ? 'active' : '' }}">--}}
{{--                            Teams--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/my-projects')}}" class="menu-link {{ Request::is('my-projects') ? 'active' : '' }}">--}}
{{--                            Projects--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/starter')}}" class="menu-link {{ Request::is('starter') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">star</span>--}}
{{--                    <span class="title">Starter</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-title small text-uppercase">--}}
{{--                <span class="menu-title-text">MODULES</span>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">add_reaction</span>--}}
{{--                    <span class="title">Icons</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/material-icons')}}" class="menu-link {{ Request::is('material-icons') ? 'active' : '' }}">--}}
{{--                            Material Icons--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/feathericon')}}" class="menu-link {{ Request::is('feathericon') ? 'active' : '' }}">--}}
{{--                            Feathericon--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/remixicon')}}" class="menu-link {{ Request::is('remixicon') ? 'active' : '' }}">--}}
{{--                            Remixicon--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">gallery_thumbnail</span>--}}
{{--                    <span class="title">UI Elements</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/alerts')}}" class="menu-link {{ Request::is('alerts') ? 'active' : '' }}">--}}
{{--                            Alerts--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/avatar')}}" class="menu-link {{ Request::is('avatar') ? 'active' : '' }}">--}}
{{--                            Avatar--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/buttons')}}" class="menu-link {{ Request::is('buttons') ? 'active' : '' }}">--}}
{{--                            Buttons--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/badges')}}" class="menu-link {{ Request::is('badges') ? 'active' : '' }}">--}}
{{--                            Badges--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/cards')}}" class="menu-link {{ Request::is('cards') ? 'active' : '' }}">--}}
{{--                            Cards--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/carousels')}}" class="menu-link {{ Request::is('carousels') ? 'active' : '' }}">--}}
{{--                            Carousels--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/dropdowns')}}" class="menu-link {{ Request::is('dropdowns') ? 'active' : '' }}">--}}
{{--                            Dropdowns--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/grids')}}" class="menu-link {{ Request::is('grids') ? 'active' : '' }}">--}}
{{--                            Grids--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/images')}}" class="menu-link {{ Request::is('images') ? 'active' : '' }}">--}}
{{--                            Images--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/list')}}" class="menu-link {{ Request::is('list') ? 'active' : '' }}">--}}
{{--                            List--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/modals')}}" class="menu-link {{ Request::is('modals') ? 'active' : '' }}">--}}
{{--                            Modals--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/navs')}}" class="menu-link {{ Request::is('navs') ? 'active' : '' }}">--}}
{{--                            Navs--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/paginations')}}" class="menu-link {{ Request::is('paginations') ? 'active' : '' }}">--}}
{{--                            Paginations--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/popover-tooltips')}}" class="menu-link {{ Request::is('popover-tooltips') ? 'active' : '' }}">--}}
{{--                            Popover Tooltips--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/progess')}}" class="menu-link {{ Request::is('progess') ? 'active' : '' }}">--}}
{{--                            Progess--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/spinners')}}" class="menu-link {{ Request::is('spinners') ? 'active' : '' }}">--}}
{{--                            Spinners--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/tabs')}}" class="menu-link {{ Request::is('tabs') ? 'active' : '' }}">--}}
{{--                            Tabs--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/accoridions')}}" class="menu-link {{ Request::is('accoridions') ? 'active' : '' }}">--}}
{{--                            Accoridions--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/date-time-picker')}}" class="menu-link {{ Request::is('date-time-picker') ? 'active' : '' }}">--}}
{{--                            Date/Time Picker--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/videos')}}" class="menu-link {{ Request::is('videos') ? 'active' : '' }}">--}}
{{--                            Videos--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">table</span>--}}
{{--                    <span class="title">Tables</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/basic-table')}}" class="menu-link {{ Request::is('basic-table') ? 'active' : '' }}">--}}
{{--                            Basic Table--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/data-tables')}}" class="menu-link {{ Request::is('data-tables') ? 'active' : '' }}">--}}
{{--                            Data Table--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">clarify</span>--}}
{{--                    <span class="title">Forms</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/basic-elements')}}" class="menu-link {{ Request::is('basic-elements') ? 'active' : '' }}">--}}
{{--                            Basic Elements--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/advanced-elements')}}" class="menu-link {{ Request::is('advanced-elements') ? 'active' : '' }}">--}}
{{--                            Advanced Elements--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/validation')}}" class="menu-link {{ Request::is('validation') ? 'active' : '' }}">--}}
{{--                            Validation--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/wizard')}}" class="menu-link {{ Request::is('wizard') ? 'active' : '' }}">--}}
{{--                            Wizard--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/editors')}}" class="menu-link {{ Request::is('editors') ? 'active' : '' }}">--}}
{{--                            Editors--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/file-upload')}}" class="menu-link {{ Request::is('file-upload') ? 'active' : '' }}">--}}
{{--                            File Upload--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/apex-charts')}}" class="menu-link {{ Request::is('apex-charts') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">donut_large</span>--}}
{{--                    <span class="title">Apex Charts</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">lock</span>--}}
{{--                    <span class="title">Authentication</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/login')}}" class="menu-link {{ Request::is('login') ? 'active' : '' }}">--}}
{{--                            Login--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/register')}}" class="menu-link {{ Request::is('register') ? 'active' : '' }}">--}}
{{--                            Register--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">featured_video</span>--}}
{{--                    <span class="title">Extra Pages</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/animation')}}" class="menu-link {{ Request::is('animation') ? 'active' : '' }}">--}}
{{--                            Animation--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/clip-board')}}" class="menu-link {{ Request::is('clip-board') ? 'active' : '' }}">--}}
{{--                            Clip Board--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/drag-drop')}}" class="menu-link {{ Request::is('drag-drop') ? 'active' : '' }}">--}}
{{--                            Drag & Drop--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/range-slider')}}" class="menu-link {{ Request::is('range-slider') ? 'active' : '' }}">--}}
{{--                            Range Slider--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/ratings')}}" class="menu-link {{ Request::is('ratings') ? 'active' : '' }}">--}}
{{--                            Ratings--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/toasts')}}" class="menu-link {{ Request::is('toasts') ? 'active' : '' }}">--}}
{{--                            Toasts--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/check-radio')}}" class="menu-link {{ Request::is('check-radio') ? 'active' : '' }}">--}}
{{--                            Check & Radio--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/sweet-alarts')}}" class="menu-link {{ Request::is('sweet-alarts') ? 'active' : '' }}">--}}
{{--                            Sweet Alarts--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/select')}}" class="menu-link {{ Request::is('select') ? 'active' : '' }}">--}}
{{--                            Select--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/scrollbar')}}" class="menu-link {{ Request::is('scrollbar') ? 'active' : '' }}">--}}
{{--                            Scrollbar--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/typography')}}" class="menu-link {{ Request::is('typography') ? 'active' : '' }}">--}}
{{--                            Typography--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/gallery')}}" class="menu-link {{ Request::is('gallery') ? 'active' : '' }}">--}}
{{--                            Gallery--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/search')}}" class="menu-link {{ Request::is('search') ? 'active' : '' }}">--}}
{{--                            Search--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/blank-page')}}" class="menu-link {{ Request::is('blank-page') ? 'active' : '' }}">--}}
{{--                            Blank Page--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">chat_error</span>--}}
{{--                    <span class="title">Errors</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/404-error-page')}}" class="menu-link {{ Request::is('404-error-page') ? 'active' : '' }}">--}}
{{--                            404 Error Page--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/internal-error')}}" class="menu-link {{ Request::is('internal-error') ? 'active' : '' }}">--}}
{{--                            Internal Error--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/widgets')}}" class="menu-link {{ Request::is('widgets') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">widgets</span>--}}
{{--                    <span class="title">Widgets</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/google-map')}}" class="menu-link {{ Request::is('google-map') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">map</span>--}}
{{--                    <span class="title">Google Map</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/notification')}}" class="menu-link {{ Request::is('notification') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">notifications</span>--}}
{{--                    <span class="title">Notification</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/members')}}" class="menu-link {{ Request::is('members') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">group</span>--}}
{{--                    <span class="title">Members</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-title small text-uppercase">--}}
{{--                <span class="menu-title-text">OTHERS</span>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="{{ url('admin/my-profile')}}" class="menu-link {{ Request::is('my-profile') ? 'active' : '' }}">--}}
{{--                    <span class="material-symbols-outlined menu-icon">account_circle</span>--}}
{{--                    <span class="title">My Profile</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">settings</span>--}}
{{--                    <span class="title">Settings</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/account-settings')}}" class="menu-link {{ Request::is('account-settings') ? 'active' : '' }}">--}}
{{--                            Account Settings--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/change-password')}}" class="menu-link {{ Request::is('change-password') ? 'active' : '' }}">--}}
{{--                            Change Password--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/connections')}}" class="menu-link {{ Request::is('connections') ? 'active' : '' }}">--}}
{{--                            Connections--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/privacy-policy')}}" class="menu-link {{ Request::is('privacy-policy') ? 'active' : '' }}">--}}
{{--                            Privacy Policy--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item">--}}
{{--                        <a href="{{ url('admin/terms-conditions')}}" class="menu-link {{ Request::is('terms-conditions') ? 'active' : '' }}">--}}
{{--                            Terms & Conditions--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="menu-item">--}}
{{--                <a href="javascript:void(0);" class="menu-link menu-toggle active">--}}
{{--                    <span class="material-symbols-outlined menu-icon">keyboard_arrow_down</span>--}}
{{--                    <span class="title">Multi Level Menu</span>--}}
{{--                </a>--}}
{{--                <ul class="menu-sub">--}}
{{--                    <li class="menu-item after-sub-menu">--}}
{{--                        <a href="javascript:void(0);" class="menu-link menu-toggle">--}}
{{--                            <span class="title">Level One</span>--}}
{{--                        </a>--}}
{{--                        <ul class="menu-sub">--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ url('admin/#')}}" class="menu-link {{ Request::is('/') ? 'active' : '' }}">--}}
{{--                                    Level Three--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="menu-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link logout">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
