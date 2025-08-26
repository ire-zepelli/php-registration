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
                        Registration Form
                    </h1>
                    <hr>
                </div>
                <form action="display.php" method="post" class="flex flex-col">
                    <div class="grid grid-cols-2 gap-4">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">First Name </legend>
                            <input type="text" name="fname" id="fname" class="input" required />
                        </fieldset>
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">Last Name </legend>
                            <input type="text" name="lname" id="lname" class="input" required />
                        </fieldset>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">ID Number </legend>
                            <input type="number" name="id" class="input" required />
                        </fieldset>
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">Course & Year </legend>
                            <input type="text" name="course_year" id="course_year" class="input w-full" required />
                        </fieldset>
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">Date Of Birth</legend>
                            <input type="date" name="date_of_birth" class="input" required />
                        </fieldset>
                    </div>
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend text-sm">Email </legend>
                        <input type="email" name="email" id="email" class="input w-full" required />
                    </fieldset>
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend text-sm">Current Address</legend>
                        <input type="text" name="address" class="input w-full" required />
                    </fieldset>
                    <div class="grid grid-cols-2 gap-4">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">Emergency Person </legend>
                            <input type="text" name="emergency_person" class="input w-full" required />
                        </fieldset>
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend text-sm">Emergency Contact Number </legend>
                            <input type="number" name="emergency_contact" class="input w-full" required />
                        </fieldset>
                    </div>
                    <div class="w-full flex justify-end mt-5">
                        <input type="submit" value="Register" class="btn btn-outline btn-primary px-10">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>