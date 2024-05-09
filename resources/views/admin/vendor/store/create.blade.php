@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <style>
        /* Custom styles for select */
        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px 15px;
            font-size: 16px;
            line-height: 1.5;
            width: 100%;
            border-radius: 4px;
        }

        /* Custom styles for select arrow */
        .custom-select::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        /* Custom styles for select options */
        .custom-select option {
            background-color: #fff;
            color: #333;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn-1 {
            background: rgb(6, 14, 131);
            background: linear-gradient(0deg, rgba(6, 14, 131, 1) 0%, rgba(12, 25, 180, 1) 100%);
            border: none;
        }

        .btn-1:hover {
            background: rgb(0, 3, 255);
            background: linear-gradient(0deg, rgb(0, 17, 255) 0%, rgba(2, 126, 251, 1) 100%);
        }

        .campaign_store {
            border: 1px solid black !important;
        }

        .add_more {
            padding: 10px;

        }

        .add_more .form-control,
        .add_more .custom-select {
            border: none !important;
        }
    </style>
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Store</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Add Store Store : </h4>
                        </div>
                        @if (session('flash_success'))
                            <div class="alert alert-success">
                                {{ session('flash_success') }}
                            </div>
                        @endif
                        @if (session('flash_error'))
                            <p class="text-danger">
                                {{ session('flash_error') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="card-body ">
                            <form enctype="multipart/form-data" role="form" id="myform" method="POST"
                                action="{{ route('vendor_store_post') }}">
                                @csrf

                                <div class="row add-products-page manual_upload">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Select Vendor </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select name="vendor" class="custom-select" required>
                                                    <option value="">---- Select Vendor ----</option>
                                                    @foreach ($vendors as $vendor)
                                                        <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <h5 class="justify-content-center">Add Store</h5>
                                <div class="row ">
                                    <div class="col-md-3  campaign_store">
                                        <label for="">Store Name</label>
                                    </div>
                                    <div class="col-md-3  campaign_store">
                                        <label for="">Category Type</label>
                                    </div>
                                    <div class="col-md-2  campaign_store">
                                        <label for="">Store Rent</label>
                                    </div>
                                    <div class="col-md-2  campaign_store">
                                        <label for="">Profit Percentage</label>
                                    </div>
                                    <div class="col-md-2  campaign_store">
                                        <label for="">Action</label>
                                    </div>

                                </div>
                                <div id="container" class="mb-4">
                                    <div class="row">
                                        <div class="col-md-3 campaign_store add_more">
                                            <select name="store_id[]" class="custom-select" required>
                                                <option value="">---- Select Store ----</option>
                                                @foreach ($stores as $store)
                                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 campaign_store add_more">
                                            <select name="category_id[]" class="custom-select" required>
                                                <option value="">---- Select Category ----</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 campaign_store add_more">
                                            <input type="number" name="rent[]" class="form-control" placeholder="Rent"
                                                value="" required>
                                        </div>
                                        <div class="col-md-2 campaign_store add_more">
                                            <input type="number" name="percent[]" class="form-control"
                                                placeholder="Percentage" value="" required>
                                        </div>
                                        <div class="col-md-2 campaign_store add_more">
                                            <button type="button" class="custom-btn btn-1" onclick="addRow(this)">Add
                                                more</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-danger mx-2">Submit</button>
                                    <a href="{{ route('vendor_store_index') }}" class="btn btn-primary mx-2">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <script>
        function addRow(button) {
            var container = document.getElementById('container');
            if (container) {
                var row = button.parentNode.parentNode.cloneNode(true);

                // Clear input fields and select elements
                var inputs = row.querySelectorAll('input[type="number"]');
                var selects = row.querySelectorAll('select');
                inputs.forEach(function(input) {
                    input.value = '';
                });
                selects.forEach(function(select) {
                    select.selectedIndex = 0;
                });

                row.querySelector('.custom-btn').textContent = 'Remove';
                row.querySelector('.custom-btn').onclick = function() {
                    removeRow(this);
                };
                container.appendChild(row);
            } else {
                console.error("Container element not found.");
            }
        }

        function removeRow(button) {
            button.parentNode.parentNode.remove();
        }
    </script>

    <!--app-content closed-->
@endsection
