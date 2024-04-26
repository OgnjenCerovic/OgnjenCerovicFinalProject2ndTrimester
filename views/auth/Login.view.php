<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .main {
            background-image: url('../assets/images/backgroundnajnovi.jpg');
            background-repeat: repeat;
        }

        .font-belle {
            font-family: 'La Belle Aurore', sans-serif;
        }

        .bg-custom {
            background-color: #122f1a;
        }

        .text-custom {
            color: #122f1a;
        }

        .border-custom {
            border-color: #122f1a;
        }
    </style>
</head>

<body class="main h-screen flex items-center justify-center">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="text-red-600"><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="POST" action="#" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2 text-custom">Username</label>
            <input type="text" name="username" id="username" class="font-belle shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-custom">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 text-custom">Password</label>
            <input type="password" name="password" id="password" class="font-belle shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline border-custom" placeholder="******************">
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign In</button>
        </div>
    </form>
</body>

</html>
