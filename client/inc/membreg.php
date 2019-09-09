<form class='border mt-3 mx-auto border-dark rounded-lg registrationForm mb-5' id="membRegForm">
                <h1 class='display-4 mx-auto'>Member Registration</h1>
                <div class="form-group hidden">
                    <label for="teamInputId">Team ID</label>
                    <input readonly type="text" class="form-control" id="teamInputId">
                </div>
                <div class="form-group">
                    <label for="teamName">Desired Team</label>
                    <input readonly type="text" class="form-control" id="teamName">
                </div>
                <div id='teamWarningDiv' class='stop-warning hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Select a Team from the Team Search page to register <a href='teams.php'>Here</a></p>
                </div>
                <div id='teamFullDiv' class='stop-warning hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">This team is full, select a different team from the Team Search page to register <a href='teams.php'>Here</a></p>
                </div>

                <div class="form-group">
                    <label for="emailInput">Email Address</label>
                    <input type="text" name="email" class="form-control" id="emailInput">
                </div>
                <div id='emailWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid email Adress</p>
                </div>
                <div class="form-group">
                    <label for="nameInput">Member Name</label>
                    <input type="text" name="membername" class="form-control" id="nameInput">
                </div>
                <div id='nameWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Name</p>
                </div>
                <div class="form-group">
                    <label for="contactNameInput">Contact Name</label>
                    <input type="text" name="contactname" class="form-control" id="contactNameInput">
                </div>
                <div id='contactWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Contact Name</p>
                </div>
                <div class="form-group">
                    <label for="ageInput">Age</label>
                    <input type="number" name="age" class="form-control" id="ageInput">
                </div>
                <div id='ageWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Age</p>
                </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary mt-2">
                        <input type="radio" name="gender" value="Male"> Male
                    </label>
                    <label class="btn btn-secondary mt-2">
                        <input type="radio" name="gender" value="Female"> Female
                    </label>
                </div>
                <div id='genderWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please select a gender</p>
                </div>
                <div class="form-group mt-3">
                    <label for="phoneInput">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phoneInput">
                </div>
                <div id='phoneWarningDiv' class='warning-div hidden mt-3 mb-2 p-3 border border-danger rounded-lg'>
                    <p class="mb-0">Please enter a valid Phone Number</p>
                </div>
                <button type='button' id="submitMember" class='btn btn-outline-primary'>Submit</button>
            </form>