<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
</head>
<!-- <style>
    
</style> -->
<body class="text-gray-600">
    <!-- content wrapper -->
    <div class="grid md:grid-cols-3">
        <!-- nav -->
        <div class="md:col-span-1">
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/" class="hover:text-gray-700">Nija Food</a>
                    </h1>
                </div>
                <ul>
                    <li class="text-gray-700 font-bold">
                        <a href="#">
                            <span>Home</span>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>About</span>
                            <i class="fa fa-info"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact</span>
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end nav -->

        <!-- main content -->
        <main class="px-16 py-6 bg-gray-100 md:col-span-2">
            <div class="flex justify-center md:justify-end">
                <a href="#" class="text-primary rounded-full py-2 px-3 uppercase text-xs font-bold cursor-pointer tracking-wider border-primary md:border-2 hover:bg-primary hover:text-white">Log in</a>
                <a href="#" class="text-primary ml-2 rounded-full py-2 px-3 uppercase text-xs font-bold cursor-pointer tracking-wider border-primary md:border-2 hover:bg-primary hover:text-white">sign up</a>
            </div>

            <header>
                <h2 class="text-gray-700 text-6xl font-semibold">Recipes</h2>
                <h3 class="text-2xl font-semibold">For Nija</h3>
            </header>

            <div>
                <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Lates Recipes</h4>

                <div class="mt-8 grid lg:grid-cols-3 gap-10">
                    <!-- cards go here -->
                    <div class="card bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                        <img src="images/bbq.jpg" alt="bbq" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span class="font-bold">Full pizza</span>
                            <span class="block text-gray-500 text-sm">Recipe by Emerie</span>
                        </div>
                        <div class="badge bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                            <i class="fa fa-clock"></i>
                            <span>25 mins</span>
                        </div>
                    </div>

                    <div class="card bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                        <img src="images/beef-shawama2.jpg" alt="beef" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span class="font-bold">Beef Shawarma</span>
                            <span class="block text-gray-500 text-sm">Recipe by Emerie</span>
                        </div>
                        <div class="badge bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                            <i class="fa fa-clock"></i>
                            <span>25 mins</span>
                        </div>
                    </div>

                    <div class="card bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                        <img src="images/chickensharwama.jpg" alt="chicken" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span class="font-bold">Chicken Shawarma</span>
                            <span class="block text-gray-500 text-sm">Recipe by Emerie</span>
                        </div>
                        <div class="badge bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                            <i class="fa fa-clock"></i>
                            <span>25 mins</span>
                        </div>
                    </div>
                </div>

                <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Most Popular</h4>

                <div class="mt-8">
                    <!-- cards go here -->
                </div>

                <!-- button -->
                <div class="flex justify-center">
                    <div class="bg-secondary-100 text-secondary-200 rounded-full py-2 px-3 uppercase text-xs font-bold cursor-pointer tracking-wider hover:shadow-inner">Load More</div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>