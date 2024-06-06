@extends('layout')

@section('content')
    <div class="jumbotron" style="margin-left: 50px;margin-right: 50px;">
        <div class="container-fluid">
            <form id="myForm">
                <h5
                    style=" font-family: 'Open Sans', sans-serif;font-weight: bold;text-align: center;position: relative;bottom:40px;">
                    Form Of Application For
                    Allotment Of
                    Residental Accommodation</h5>
                <hr style="position:relative;bottom:40px;">

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Name Of Applicant</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Mobile No.</label>
                        <input type="number" class="form-control" id="validationServer02" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Email</label>
                        <input type="email" class="form-control" id="validationServer02" value="" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Date Of Birth</label>
                        <input type="date" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Aadhar No.</label>
                        <input type="number" class="form-control" id="validationServer02" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Pan No.</label>
                        <input type="number" class="form-control" id="validationServer02" value="" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Designation</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Whether Permanent or Temporary</label>
                        <select class="form-control" name="cars" id="cars">
                            <option value="Permanent">Permanent</option>
                            <option value="Temporary">Temporary</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Present Residential Address</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                        {{-- <input type="text" class="form-control" id="validationServer02" value="" required> --}}
                    </div>
                </div>

                <div style="text-align: center;">
                    <label><u>Details of Salary Drawn</u></label>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Basic Pay</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Grade Pay</label>
                        <input type="text" class="form-control" id="validationServer02" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Level in 7th CPC</label>
                        <input type="text" class="form-control" id="validationServer02" value="" required>
                    </div>
                </div>

                <div style="text-align: center;">
                    <label><u>Present Posting</u></label>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Present Office</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Office Phone No.</label>
                        <input type="number" class="form-control" id="validationServer02" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Joining Date to Present Office</label>
                        <input type="date" class="form-control" id="validationServer02" value="" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Designation</label>
                        <input type="text" class="form-control" id="validationServer02" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Place of Head Quarter</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Date of entry in Govt. Service</label>
                        <input type="date" class="form-control" id="validationServer02" value="" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">Whether Wife / Husband / Son / Daughter serving under the
                            Administration.<br>
                            If so, please give the details</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">If so, Whether housing accommodation is given to that member of
                            family serving<br> under the Administration</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div style="text-align: center;">
                    <label><u>Details of Family members likely to be accommodated</u></label>
                    <input type="hidden" class="form-control" name="family_member_details_json"
                        id="family_member_details_json">
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Name</label>
                        <input type="text" class="form-control" name="family_member_name" id="family_member_name">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer02">Age</label>
                        <input type="number" class="form-control" name="family_member_age" id="family_member_age">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Relationship</label>
                        <input type="text" class="form-control" name="family_member_relationship"
                            id="family_member_relationship">
                    </div>
                    <div class="col-md-1 mb-3">
                        <button type="button" class="btn btn-sm mr-3 btn-outline-success" style="margin-top:32px"
                            name="add" value="Save" id="add">Add</button>
                    </div>
                </div>

                <table class="table data-table">
                    <colgroup>
                        <col span="1" style="width: 35%;">
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 25%;">
                        <col span="1" style="width: 20%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Relationship</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">Whether any of the above family members is/are in possession/likely
                            to be allotted residential facility within 8 km. from the place of head quarter by the
                            Govt. Autonomous Body/Society.</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">Whether owning house in his / her / dependent's name. <br>Please
                            give
                            the
                            details.</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">If so, the monthly income received from the same</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">Present residential arrangement</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">Whether willing to accept allotment of <br>lower type of
                            accommodation.</label>
                        <input type="text" class="form-control" id="validationServer01" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">Location/area in which the applicant desired allotment. Please give
                            details. In case of multistorey building the floor (Ground, First, Second) on which the
                            accommodation is preferred be stated.</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationServer01">Any Other Particulars</label>
                        <textarea name="" id="" class="form-control" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="button" class="btn btn-sm mr-3 btn-outline-success">Submit</button>
                    <button type="button" class="btn btn-sm mr-3 btn-outline-warning">Cancel</button>
                </div>

            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            fillValues();

            $("#add").click(function() {

                var name = $("#family_member_name").val();
                var age = $("#family_member_age").val();
                var relationship = $("#family_member_relationship").val();

                $(".data-table tbody").append("<tr data-name='" + name + "' data-age='" + age +
                    "' data-relationship='" + relationship + "'><td>" + name + "</td><td>" + age +
                    "</td><td>" + relationship +
                    "</td><td><span class='btn btn-warning mr-2 btn-sm btn-edit'>Edit</span><span class='btn btn-danger mr-2 btn-sm btn-delete'>Delete</span></td></tr>"
                );

                $("#family_member_name").val("");
                $("#family_member_age").val("");
                $("#family_member_relationship").val("");
                fillValues();
            });

            $("body").on("click", ".btn-delete", function() {
                $(this).parents("tr").remove();
                fillValues();
            });

            $("body").on("click", ".btn-edit", function() {
                var name = $(this).parents("tr").attr('data-name');
                var age = $(this).parents("tr").attr('data-age');
                var relationship = $(this).parents("tr").attr('data-relationship');

                $(this).parents("tr").find("td:eq(0)").html('<input name="edit_name" value="' + name +
                    '">');
                $(this).parents("tr").find("td:eq(1)").html('<input name="edit_age" value="' + age + '">');
                $(this).parents("tr").find("td:eq(2)").html('<input name="edit_relationship" value="' +
                    relationship + '">');

                $(this).parents("tr").find("td:eq(3)").prepend(
                    "<span class='btn btn-info mr-2 btn-sm btn-update'>Update</span><span class='btn btn-secondary mr-2 btn-sm btn-cancel'>Cancel</span>"
                )
                $(this).hide();
            });

            $("body").on("click", ".btn-cancel", function() {
                var name = $(this).parents("tr").attr('data-name');
                var age = $(this).parents("tr").attr('data-age');
                var relationship = $(this).parents("tr").attr('data-relationship');

                $(this).parents("tr").find("td:eq(0)").text(name);
                $(this).parents("tr").find("td:eq(1)").text(age);
                $(this).parents("tr").find("td:eq(2)").text(relationship);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-update").remove();
                $(this).parents("tr").find(".btn-cancel").remove();
                fillValues();
            });

            $("body").on("click", ".btn-update", function() {
                var name = $(this).parents("tr").find("input[name='edit_name']").val();
                var age = $(this).parents("tr").find("input[name='edit_age']").val();
                var relationship = $(this).parents("tr").find("input[name='edit_relationship']").val();

                $(this).parents("tr").find("td:eq(0)").text(name);
                $(this).parents("tr").find("td:eq(1)").text(age);
                $(this).parents("tr").find("td:eq(2)").text(relationship);

                $(this).parents("tr").attr('data-name', name);
                $(this).parents("tr").attr('data-age', age);
                $(this).parents("tr").attr('data-relationship', relationship);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-cancel").remove();
                $(this).parents("tr").find(".btn-update").remove();
                fillValues();
            });

            function fillValues() {
                var data = [];

                $(".data-table tbody tr").each(function(index) {
                    var name = $(this).attr('data-name');
                    var age = $(this).attr('data-age');
                    var relationship = $(this).attr('data-relationship');

                    data.push({
                        name: name,
                        age: age,
                        relationship: relationship
                    });
                });


                if ($.isEmptyObject(data)) {
                    $("#family_member_details_json").val("");
                } else {
                    var jsonString = JSON.stringify(data);
                    $("#family_member_details_json").val(jsonString);
                }

            }
        });
    </script>
@endsection
