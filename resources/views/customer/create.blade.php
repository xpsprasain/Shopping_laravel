<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Laravel Form</h2>
    <form method="post" action="/customer/store">

        {{csrf_field()}}

        <div class="form-group">
            <label for="org">Organisation Or Person:</label>
            <input type="text" class="form-control" id="org" placeholder="Organisation Or Person" name="organisation_or_person">
        </div>



        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender">
        </div>

        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="name" placeholder="First Name" name="first_name">
        </div>

        <div class="form-group">
            <label for="name">Middle Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Middle Name" name="middle_initial">
        </div>


        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Last Name" name="last_name">
        </div>

        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email_address" name="email_address">
        </div>

        <div class="form-group">
            <label for="name">Login Name:</label>
            <input type="text" class="form-control" id="name" name="login_name">
        </div>

        <div class="form-group">
            <label for="name">Logon PWD:</label>
            <input type="password" class="form-control" id="name"  name="login_password">
        </div>

        <div class="form-group">
            <label for="name">Address 1:</label>
            <input type="text" class="form-control" id="name"  name="address_line_1">
        </div>

        <div class="form-group">
            <label for="name">Address 2:</label>
            <input type="text" class="form-control" id="name"  name="address_line_2">
        </div>

        <div class="form-group">
            <label for="name">Address 3:</label>
            <input type="text" class="form-control" id="name" name="address_line_3">
        </div>

        <div class="form-group">
            <label for="name">Address 4:</label>
            <input type="text" class="form-control" id="name" name="address_line_4">
        </div>

        <div class="form-group">
            <label for="name">Town:</label>
            <input type="text" class="form-control" id="name" name="town_city">
        </div>

        <div class="form-group">
            <label for="name">County:</label>
            <input type="text" class="form-control" id="name"  name="county">
        </div>

        <div class="form-group">
            <label for="name">Country:</label>
            <input type="text" class="form-control" id="name" name="country">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>