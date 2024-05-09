@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <style>
        .radio-button {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin: 10px;
            position: relative;
            align-items: center;
            color: black;
        }

        .radio-button input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .radio {
            position: relative;
            display: inline-block;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 2px solid #ccc;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            transform: translateZ(-25px);
            transition: all 0.3s ease-in-out;
        }

        .radio::before {
            position: absolute;
            content: '';
            width: 10px;
            height: 10px;
            top: 5px;
            left: 5px;
            border-radius: 50%;
            background-color: #0d290d;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }

        .radio-button input[type="radio"]:checked+.radio {
            border-color: #0d290d;
            transform: translateZ(0px);
            background-color: #fff;
        }

        .radio-button input[type="radio"]:checked+.radio::before {
            opacity: 1;
        }
    </style>
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Vendor Category</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Add campaign : </h4>
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
                                action="{{ route('vendor_category_post') }}">
                                @csrf

                                <div class="row add-products-page manual_upload">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Category Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Campaign Name " value="{{ old('name') }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <h6 class="mb-0"> Tax </h6>
                                            </div>
                                            <div class="col-sm-10 text-secondary">
                                                <input type="text" name="tax" class="form-control"
                                                    placeholder="Campaign Id" value="{{ old('tax') }}">
                                                @error('tax')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-danger mx-2">Submit</button>
                                    <a href="{{ route('vendor_category_index') }}" class="btn btn-primary mx-2">Cancel</a>
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
        // Get radio buttons and sections
        const radioButtons = document.querySelectorAll('input[name="example-radio"]');
        const manualUploadSection = document.querySelector('.manual_upload');
        const excelUploadSection = document.querySelector('.excel_page');

        // Function to toggle sections based on selected radio button
        function toggleSections() {
            if (radioButtons[0].checked) {
                manualUploadSection.style.display = 'flex';
                excelUploadSection.style.display = 'none';
            } else {
                manualUploadSection.style.display = 'none';
                excelUploadSection.style.display = 'block';
            }
        }

        // Initial call to toggleSections to set initial state
        toggleSections();

        // Add event listener to radio buttons to toggle sections when clicked
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('click', toggleSections);
        });

        // Optional: Add event listener to Cancel button to reset form
        document.getElementById('cancelBtn').addEventListener('click', function() {
            document.getElementById('myform').reset();
            toggleSections(); // Reset to initial state
        });
    </script>
    <!--app-content closed-->
@endsection
