<form class='mt-3 mx-auto border border-dark rounded-lg mb-5 registrationForm' id="teamRegForm">
                <h1 class='display-4 mx-auto'>Team Registration</h1>
                <div class="form-group">
                    <label for="teamNameInput">Team Name</label>
                    <input type="text" name="teamname" maxlength="25" class="form-control" id="teamNameInput">
                </div>
                <div id='teamNameWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Team Name</p>
                    <p class="mb-0">Team Name must be between 5 and 30 characters</p>
                </div>                
                <div class="form-group">
                    <label for="leagueSelector">League</label>
                    <select name="leaguecode" id="leagueSelector" class="custom-select">
                        <option disabled selected>Select a League</option>
                    </select>
                </div>
                <div id='leagueWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please select a league</p>
                </div>
                <div class="form-group">
                    <label for="managerNameInput">Manager Name</label>
                    <input type="text" name="managername" class="form-control" id="managerNameInput">
                </div>
                <div id='managerNameWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Name</p>
                </div>
                <div class="form-group">
                    <label for="managerPhoneInput">Manager Phone Number</label>
                    <input type="text" name="managerphone" class="form-control" id="managerPhoneInput">
                </div>
                <div id='managerPhoneWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid phone number</p>
                </div>
                <div class="form-group">
                    <label for="managerEmailInput">Email Address</label>
                    <input type="text" name="manageremail" class="form-control" id="managerEmailInput">
                </div>
                <div id='managerEmailWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid email address</p>
                </div>
                <div class="form-group">
                    <label for="minAge">Minimum Age</label>
                    <input type="number" min="0" max="100" name="minmemberage" class="form-control" id="minAge">
                </div>
                <div id='minAgeWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid minimum age</p>
                </div>
                <div class="form-group">
                    <label for="maxAge">Maximum Age</label>
                    <input type="number" min="0" max="100" name="maxmemberage" class="form-control" id="maxAge">
                </div>
                <div id='maxAgeWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid maximum age</p>
                </div>
                <div class="form-group">
                    <label for="maxMembers">Max Members</label>
                    <input type="number" min="0" max="7" name="maxteammembers" class="form-control" id="maxMembers">
                </div>
                <div id='maxMembersWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Teams must have a minimum of 5 and a maximum of 15 players</p>
                </div>
                <div class="form-group">
                    <label for="genderSelector">Gender</label>
                    <select name="teamgender" id="genderSelector" class="custom-select">
                        <option disabled selected>Choose One</option>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                        <option value='Any'>Any</option>
                    </select>
                </div>
                <div id='genderSelectWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please select a gender requirement</p>
                </div>
                <button type='button' id="submitTeam" class='mt-2 btn btn-outline-primary'>Submit</button>
            </form>