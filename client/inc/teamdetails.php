<div class="container-fluid">

            <div class="container">
            <div class="row">
                    <div id="contentBlock" class="col-md text-center">

                        <form id="detailsForm" class="border border-dark rounded-lg mt-4 mx-auto">
                            <h1 class="display-4 ">Team Details</h1>
                            <div class="mt-2 row form-group-inline">
                                <div class="col-sm-6 form-group hidden">
                                    <label for="teamId">Team ID</label>
                                    <input readonly type="text" name="teamid" class="form-control" id="teamId">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="teamNameInput">Team Name</label>
                                    <input readonly type="text" name="teamname" class="form-control" id="teamNameInput">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="leagueInput">League</label>
                                    <input readonly type="text" name="leaguecode" class="form-control" id="leagueInput">
                                </div>

                            </div>
                            <div class="row form-group-inline">
                                <div class="col-sm-4 form-group">
                                    <label for="managerNameInput">Manager Name</label>
                                    <input readonly type="text" name="managername" class="form-control"
                                        id="managerNameInput">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="managerPhoneInput">Manager Phone Number</label>
                                    <input readonly type="text" name="managerphone" class="form-control"
                                        id="managerPhoneInput">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="managerEmailInput">Email Address</label>
                                    <input readonly type="text" name="manageremail" class="form-control"
                                        id="managerEmailInput">
                                </div>
                            </div>
                            <div class="row form-group-inline">
                                <div class="col-sm-6 form-group">
                                    <label for="minAge">Minimum Age</label>
                                    <input readonly type="number" min="0" max="100" name="minmemberage"
                                        class="form-control" id="minAge">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="maxAge">Maximum Age</label>
                                    <input readonly type="number" min="0" max="100" name="maxmemberage"
                                        class="form-control" id="maxAge">
                                </div>
                            </div>
                            <div class="row form-group-inline">
                                <div class="col-sm-6 form-group">
                                    <label for="maxMembers">Max Members</label>
                                    <input readonly type="number" min="0" max="7" name="maxteammembers"
                                        class="form-control" id="maxMembers">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="genderInput">Gender</label>
                                    <input readonly type="text" name="teamgender" class="form-control" id="genderInput">
                                </div>
                            </div>
                            <div id='errorDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                                <p class="mb-0">Invalid Data Entered</p>
                            </div>
                            <button type='button' class='btn btn-warning mr-1 ml-1 mt-2' id='editBtn'>Edit</button>
                            <button type="button" class="hidden btn btn-success mr-1 ml-1 mt-2" id="saveChanges">Save
                                Changes</button>
                            <button type="button" class="hidden btn btn-dark mr-1 ml-1 mt-2" id="resetChanges">Discard
                                Changes</button>
                            <button type="button" class="btn btn-danger mr-1 ml-1 mt-2" data-toggle="modal"
                                data-target="#deleteModal" id="deleteTeamBtn">Delete Team</button>
                        </form>

                        <div id="detailBtnGroup">
                            <a class='btn btn-secondary ml-1 mt-4' id='cancelBtn' href=teams.php>Back to Teams</a>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="text-center mx-auto">
                        <table id="membersTable" class='table table-hover text-center table-light table-bordered mt-3'>
                            <thead class="thead-dark">
                                <tr>
                                    <th>Member Name</th>
                                    <th>Email Address</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody id="memberTableBody">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
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
                    Are you sure you wish to delete this team?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button id="confirmDelete" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>