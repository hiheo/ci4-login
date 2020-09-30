<?= $this->extend('layout/template_main'); ?>
<?= $this->section('content'); ?>

<div class="container w-75 justify-content-start">
    <!-- Member Insert and Update Modal-->
    <h1>New Member</h1>

    <hr>

    <div>

        <!-- Start Form -->
        <!-- INSERT and UPDATE Form -->
        <form id="member-form" action="/member/insert" method="POST" class="user">

            <!-- ID place holder for javascript -->
            <input type="hidden" id="id" name="id">

            <table class="table table-borderless">
                <!-- Image -->
                <tr>
                    <td>Profile Image</td>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image" required autocomplete="off">
                        </div>
                    </td>
                </tr>

                <!-- Name -->
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Insert Member Name" required autocomplete="off">
                        </div>
                    </td>
                </tr>
                <!-- Address -->
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <input type=" text" class="form-control" name="address" id="address" placeholder="Address" required autocomplete="off">
                        </div>
                    </td>
                </tr>
                <!-- Birth Place -->
                <tr>
                    <td>Place of Birth</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <input type=" text" class="form-control" name="birth_place" id="birth_place" placeholder="Place of birth" required autocomplete="off">
                        </div>
                    </td>
                </tr>
                <!-- Birth Date -->
                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="Date of birth" required autocomplete="off">
                        </div>
                    </td>
                </tr>
                <!-- Religion -->
                <tr>
                    <td>Religion</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <select class="custom-select" name="religion" id="religion" onreset="(this.value = '')">
                                <option id="option-default" hidden selected>Member Religion</option>
                                <option id="Islam" value="Islam">Islam</option>
                                <option id="Hindu" value="Hindu">Hindu</option>
                                <option id="Protestan" value="Protestan">Protestan</option>
                                <option id="Katolik" value="Katolik">Katolik</option>
                                <option id="Buddha" value="Buddha">Buddha</option>
                                <option id="Khonghucu" value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <!-- Phone -->
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group">
                            <input type=" text" class="form-control" name="phone" id="phone" placeholder="Phone number" required autocomplete="off">
                        </div>
                    </td>
                </tr>
                <!-- Gender -->
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <div class=" form-group d-flex justify-content-start">
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="m" checked>
                                <label class="form-check-label" for="gender1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check d-inline-block mx-4">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="f">
                                <label class="form-check-label" for="gender2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>


            <div class=" modal-footer">
                <!-- Reset -->
                <button id="resetButton" type="reset" class="btn btn-success btn-block">
                    Reset
                </button>
                <!-- Submit -->
                <button id="memberButton" type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>
            </div>
        </form>
        <!-- End Form -->
    </div>
</div>


<?= $this->endSection(); ?>