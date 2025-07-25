

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
<section class="bg-gray-50">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="/userregister">
                    @csrf
                    <div>
                        <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 ">User name</label>
                        <input type="text" name="name" id="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="Ex: username123">
                    </div>
                    <div>
                        <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="text" name="email" id="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="Ex: username123">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            Password
                        </label>
                        <div class="relative w-full">
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300
                            text-gray-900 rounded-lg focus:ring-primary-600
                             focus:border-primary-600 block w-full p-2.5 pr-10"
                                   required>
                            <div onclick="//togglePasswordVisibility()" class="absolute inset-y-0 right-3 flex items-center cursor-pointer text-gray-500">
                                <i id="togglePasswordIcon" class="fa fa-eye"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end">

                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
                    </div>

                    <div class = "grid place-item-center">
                        <button type="submit" class="text-white btn btn-error">Sign in</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


</body>
</html>
