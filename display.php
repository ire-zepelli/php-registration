<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCLM - Student Registration</title>
    <link rel="icon" href="https://uqulenyafyepinfweagp.supabase.co/storage/v1/object/sign/images/icons/teams/UCLM_1739197608922.webp?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJpbWFnZXMvaWNvbnMvdGVhbXMvVUNMTV8xNzM5MTk3NjA4OTIyLndlYnAiLCJpYXQiOjE3MzkxOTc2MTAsImV4cCI6MTc3MDczMzYxMH0.oJtvp3JS5t6OMZv3gFLxdZvRuWO2KZEfNBo7yOdCezU" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[url('https://instructure-uploads-apse1.s3.ap-southeast-1.amazonaws.com/account_234870000000000001/attachments/152/uc-login%20ver2-background.jpg')] bg-cover bg-center bg-fixed">
    <div class="min-h-screen flex items-center justify-center">
        <div class="card bg-base-100 w-120 shadow-sm">
            <div class="card-body">
                <div class="w-full flex justify-center">
                    <img src="https://instructure-uploads-apse1.s3.ap-southeast-1.amazonaws.com/account_234870000000000001/attachments/188/UC%20logofinal.png" alt="uclm_logo" class="w-45">
                </div>
                <div class="relative w-full mt-3 mb-3 text-gray-500">
                    <h1 class="font-bold text-xl absolute -top-4 left-1/2 -translate-x-1/2 bg-white px-2">
                        Student Profile
                    </h1>
                    <hr>
                </div>

                <div class="grid grid-cols-3">
                    <div class="avatar col-span-1">
                        <div class="max-h-30 w-30 rounded-full">
                            <img src="https://i.pinimg.com/736x/c0/74/9b/c0749b7cc401421662ae901ec8f9f660.jpg" />
                        </div>
                    </div>
                    <?php
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $course_year = $_POST["course_year"];
                    $email = $_POST["email"];
                    $address = $_POST["address"];
                    $date_of_birth = $_POST["date_of_birth"];
                    $emergency_person = $_POST["emergency_person"];
                    $emergency_contact = $_POST["emergency_contact"];


                    echo '<div class="col-span-2 flex flex-col items-start justify-start w-full gap-2">
                         <h1 class="font-bold text-xl">Personal Information</h1>
                         <div class="w-full flex justify-between text-end">
                         <h1 class="font-bold text-base ">Name</h1>
                         <p class="text-base">' . $fname . ' ' . $lname .  '</p>
                         </div>
                          <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Course & Year</h1>
                        <p class="text-base">' . $course_year . '</p>
                        </div>
                          <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Email</h1>
                        <p class="text-base">' . $email . '</p>
                        </div>
                         <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Address</h1>
                        <p class="text-base">' . $address . '</p>
                        </div>
                         <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Date of Birth</h1>
                        <p class="text-base">' . $date_of_birth . '</p>
                        </div>
                        <h1 class="font-bold text-xl mt-5">Emergency Contact</h1>
                        <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Guardian</h1>
                        <p class="text-base">' . $emergency_person . '</p>
                        </div>
                        <div class="w-full flex justify-between text-end">
                        <h1 class="font-bold text-base">Contact Number</h1>
                        <p class="text-base">' . $emergency_contact . '</p>
                        </div>
                    </div>';
                    ?>
                </div>
                <button class="btn btn-outline btn-primary my-4" onclick="confirmInfo()">Confirm Information</button>
            </div>
        </div>
</body>
<script>
    function confirmInfo() {
        alert("Your information has been confirmed!");
    }
</script>

</html>