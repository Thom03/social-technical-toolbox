<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{!! url('dashboard'); !!}">Dashboard</a></li>
							<li><a href="{!! url('doctors'); !!}">Profile Management</a></li>
{{--							<li><a href="{!! url('doctors-details'); !!}">Doctors Details</a></li>--}}
{{--							<li><a href="{!! url('doctors-review'); !!}">Doctors Review</a></li>--}}
{{--							<li><a href="{!! url('patient-details'); !!}">Patient Details</a></li>--}}
						</ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
						<i class="flaticon-381-user"></i>
							<span class="nav-text">User Management</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('user_list') }}">User List</a></li>
{{--                            <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Role Management</a>--}}
{{--                                <ul aria-expanded="false">--}}
{{--                                    <li><a href="{!! url('./email-compose'); !!}">User List</a></li>--}}
{{--                                    <li><a href="{!! url('./email-inbox'); !!}">Role Management</a></li>--}}
{{--                                    <li><a href="{!! url('./email-read'); !!}">Read</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="{!! url('./rolelist'); !!}">Role Management</a></li>
{{--							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>--}}
{{--                                <ul aria-expanded="false">--}}
{{--                                    <li><a href="{!! url('./ecom-product-grid'); !!}">Product Grid</a></li>--}}
{{--									<li><a href="{!! url('./ecom-product-list'); !!}">Product List</a></li>--}}
{{--									<li><a href="{!! url('./ecom-product-detail'); !!}">Product Details</a></li>--}}
{{--									<li><a href="{!! url('./ecom-product-order'); !!}">Order</a></li>--}}
{{--									<li><a href="{!! url('./ecom-checkout'); !!}">Checkout</a></li>--}}
{{--									<li><a href="{!! url('./ecom-invoice'); !!}">Invoice</a></li>--}}
{{--									<li><a href="{!! url('./ecom-customers'); !!}">Customers</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="{{ route('permission_list') }}">Permissions</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-file-2"></i>
							<span class="nav-text">Datasets</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./datasetlist'); !!}">Bundle List</a></li>
                            <li><a href="{!! url('./upload_dataset'); !!}">Upload Bundles</a></li>
                            <li><a href="{!! url('./upload_inventory_data_form'); !!}">Upload Inventory Data</a></li>
                            <li><a href="{!! url('./inventory_data_list'); !!}">Inventory Data list</a></li>
                            <li><a href="{!! url('./geographic_info_list'); !!}">Geographic Data</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">API</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./ui-accordion'); !!}">API Collection</a></li>
                            <li><a href="{!! url('./ui-alert'); !!}">Pull Datasets</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Settings</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('provider_list') }}">Dataset Providers</a></li>
                            <li><a href="{{ route('region_list') }}">Dataset Regions</a></li>
                            <li><a href="{{ route('cluster_list') }}">Dataset Clusters</a></li>
                            <li><a href="{{ route('impact_list') }}">Dataset Impact Areas</a></li>
                            <li><a href="{{ route('innovation_list') }}">Social Innovations</a></li>
                            <li><a href="{{ route('techprac_list') }}">Technology/Practices</a></li>
{{--                            <li><a href="{!! url('./uc-toastr'); !!}">Toastr</a></li>--}}
{{--                            <li><a href="{!! url('./map-jqvmap'); !!}">Jqv Map</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{!! url('widget-basic'); !!}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-album"></i>
							<span class="nav-text">Documentation</span>
						</a>
					</li>
{{--                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">--}}
{{--							<i class="flaticon-381-notepad"></i>--}}
{{--							<span class="nav-text">Forms</span>--}}
{{--						</a>--}}
{{--                        <ul aria-expanded="false">--}}
{{--                            <li><a href="{!! url('./form-element'); !!}">Form Elements</a></li>--}}
{{--                            <li><a href="{!! url('./form-wizard'); !!}">Wizard</a></li>--}}
{{--                            <li><a href="{!! url('./form-editor-summernote'); !!}">Summernote</a></li>--}}
{{--                            <li><a href="{!! url('form-pickers'); !!}">Pickers</a></li>--}}
{{--                            <li><a href="{!! url('form-validation-jquery'); !!}">Jquery Validate</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">--}}
{{--							<i class="flaticon-381-network"></i>--}}
{{--							<span class="nav-text">Table</span>--}}
{{--						</a>--}}
{{--                        <ul aria-expanded="false">--}}
{{--                            <li><a href="{!! url('table-bootstrap-basic'); !!}">Bootstrap</a></li>--}}
{{--                            <li><a href="{!! url('table-datatable-basic'); !!}">Datatable</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">--}}
{{--							<i class="flaticon-381-layer-1"></i>--}}
{{--							<span class="nav-text">Pages</span>--}}
{{--						</a>--}}
{{--                        <ul aria-expanded="false">--}}
{{--                            <li><a href="{!! url('./page-register'); !!}">Register</a></li>--}}
{{--                            <li><a href="{!! url('./page-login'); !!}">Login</a></li>--}}
{{--                            <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>--}}
{{--                                <ul aria-expanded="false">--}}
{{--                                    <li><a href="{!! url('./page-error-400'); !!}">Error 400</a></li>--}}
{{--                                    <li><a href="{!! url('./page-error-403'); !!}">Error 403</a></li>--}}
{{--                                    <li><a href="{!! url('./page-error-404'); !!}">Error 404</a></li>--}}
{{--                                    <li><a href="{!! url('./page-error-500'); !!}">Error 500</a></li>--}}
{{--                                    <li><a href="{!! url('./page-error-503'); !!}">Error 503</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="{!! url('./page-lock-screen'); !!}">Lock Screen</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>

{{--				<div class="plus-box">--}}
{{--					<p>Create new appointment</p>--}}
{{--				</div>--}}
{{--				<div class="copyright">--}}
{{--					<p><strong>STIBs Admin Dashboard</strong> © 2023 All Rights Reserved</p>--}}
{{--					<p>Made with <i class="fa fa-heart"></i> by George </p>--}}
{{--				</div>--}}
			</div>
        </div>
