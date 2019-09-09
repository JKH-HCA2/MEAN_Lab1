<div class="container-fluid">

            <div class="container">
                <div class="row">
                    <div id="contentBlock" class="col-md text-center">
                        <h1 class="mt-3 display-4 ">Team Details</h1>
                        <form id="detailsForm" class="border border-dark rounded-lg mt-4 mx-auto">
                            <div class="row form-group-inline">
                                <div class="form-group hidden">
                                    <label for="memberIdInput">Member ID</label>
                                    <input readonly type="text" name="memberid" class="form-control" id="memberIdInput">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="emailInput">Email Address</label>
                                    <input readonly type="text" name="email" class="form-control" id="emailInput">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="phoneInput">Phone Number</label>
                                    <input readonly type="text" name="phone" class="form-control" id="phoneInput">
                                </div>
                            </div>
                            <div class="row form-group-inline">
                                <div class="col-sm-6 form-group">
                                    <label for="memberNameInput">Player Name</label>
                                    <input readonly type="text" name="membername" class="form-control"
                                        id="memberNameInput">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="contactNameInput">Contact Name</label>
                                    <input readonly type="text" name="contactname" class="form-control"
                                        id="contactNameInput">
                                </div>

                            </div>
                            <div class="row form-group-inline">
                                <div class="col-sm-6 form-group">
                                    <label for="playerAge">Player Age</label>
                                    <input readonly type="number" min="0" max="100" name="age" class="form-control"
                                        id="playerAge">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="genderInput">Gender</label>
                                    <input readonly type="text" name="gender" class="form-control" id="genderInput">
                                </div>
                            </div>
                            <button type='button' class='btn btn-warning mr-1 ml-1 mt-2'
                                id='editPlayerBtn'>Edit</button>
                            <button type="button" class="hidden btn btn-success mr-1 ml-1 mt-2" id="saveChanges">Save
                                Changes</button>
                            <button type="button" class="hidden btn btn-dark mr-1 ml-1 mt-2" id="resetChanges">Discard
                                Changes</button>
                            <button type="button" class="btn btn-danger mr-1 ml-1 mt-2" data-toggle="modal"
                                data-target="#deleteModal" id="deletePlayerBtn">Delete Player</button>
                        </form>
                        <div id="detailBtnGroup">

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="myModalLabel">Confirm Deletion</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you wish to remove this player?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button id="confirmDelete" type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>