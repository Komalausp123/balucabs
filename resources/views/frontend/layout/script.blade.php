<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementsByName('direction').forEach(radio => {
            radio.addEventListener('change', function() {
                let airportName = document.querySelector('.airport-name');
                let cityLandmark = document.querySelector('.city-landmark');

                if (this.id === 'cityToAirport') {
                    airportName.style.display = 'block';
                    cityLandmark.style.display = 'none';
                } else if (this.id === 'airportToCity') {
                    airportName.style.display = 'none';
                    cityLandmark.style.display = 'block';
                }
            });
        });
    });
</script>



<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js"') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/counter-up.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/calendar.js') }}"></script>


<script src="{{ asset('frontend/assets/js/modal.js') }}"></script>

<!--- TIME MODAL START -->
<div class="modal fade" id="timebtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Select Time
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-4 col-lg-4 mb-3">
                        <label for class="form-label">Hour</label>
                        <select id="hourSelect" class="form-select" aria-label="Default select example">
                            <!-- Script to generate hour options -->
                            <script>
                                for (var t = 1; t <= 12; t++) {
                                    document.write('<option value="' + t + '">' + t + '</option>');
                                }
                            </script>
                        </select>
                    </div>

                    <div class="col-4 col-lg-4 mb-3">
                        <label for class="form-label">Minute</label>
                        <select id="minuteSelect" class="form-select" aria-label="Default select example">
                            <option value>Select an option</option>
                            <!-- Script to generate minute options -->
                            <script>
                                for (var i = 0; i <= 59; i++) {
                                    document.write('<option value="' + i + '">' + i + '</option>');
                                }
                            </script>
                        </select>
                    </div>

                    <div class="col-4 col-lg-4 mb-3">
                        <label for class="form-label">AM/PM</label>
                        <select id="ampmSelect" class="form-select" aria-label="Default select example">
                            <option value="AM" selected>AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-primary tm"> Set Time </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!--- TIME MODAL END -->

<!--- DATE MODAL START -->
<div class="modal fade" id="Datebtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Select Date </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-12 col-lg-12 mb-3">
                        <label for class="form-label form-label2"></label>
                        <input id="selectedDate" type="date" class="form-control" placeholder="Select Date">
                    </div>

                    <button id="setDateBtn" type="button" class="btn btn-primary">Set
                        Date</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!--- DATE MODAL End -->
</body>

</html>
