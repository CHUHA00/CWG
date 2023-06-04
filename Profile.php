<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .profile-container {
        text-align: center;
        margin-top: 30px;
    }

    .avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    .change-avatar-button {
        font-size: 14px;
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }

    .kidoo-id {
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="profile-container">
        <img class="avatar" src="default-avatar.jpg" alt="Avatar">
        <div class="change-avatar-button" onclick="changeAvatar()">Change Avatar</div>
        <div class="kidoo-id" id="kidooId">Kidoo ID: </div>
    </div>

    <script>
    function changeAvatar() {
        // Logic to change the avatar goes here
    }

    // Get the username from registration
    var username = "JohnDoe";

    // Update the Kidoo ID with the username
    var kidooIdElement = document.getElementById("kidooId");
    kidooIdElement.textContent += username;
    </script>
</body>

</html>