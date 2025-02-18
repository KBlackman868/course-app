    <x-layouts>
        <x-slot:heading>
            Home Page
        </x-slot:heading>

        <!-- Hero Section -->
        <header class="bg-blue-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4">
                <h1 class="text-4xl font-bold mb-4">Learn New Skills Online</h1>
                <p class="text-lg mb-6">
                    Join millions of students from around the world already learning on our platform.
                </p>
                <a href="#"
                class="inline-block bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">
                    Get Started
                </a>
            </div>
        </header>

        <!-- Courses Grid -->
        <main class="max-w-7xl mx-auto px-4 py-10">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">Featured Courses</h2>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1: Microsoft Word -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?computer,people"
                        alt="People using computer" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Microsoft Word
                        </h5>
                        <p class="mb-4 text-gray-700">Learn about Microsoft Word.</p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>

                <!-- Card 2: PowerPoint -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?coding,computer"
                        alt="Coding on computer" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Learn Microsoft PowerPoint
                        </h5>
                        <p class="mb-4 text-gray-700">
                            Dive into Python programming with real-world projects and hands-on examples.
                        </p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>

                <!-- Card 3: Microsoft Excel -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?technology,education"
                        alt="Technology education" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Microsoft Excel
                        </h5>
                        <p class="mb-4 text-gray-700">
                            Learn about Excel to Excel in life.
                        </p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>

                <!-- Card 4: Graphic Design -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?design,creative"
                        alt="Creative design" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Graphic Design
                        </h5>
                        <p class="mb-4 text-gray-700">
                            Unleash your creativity with courses on graphic design and digital art.
                        </p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>

                <!-- Card 5: Social Media Marketing -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?marketing,advertising"
                        alt="Marketing advertising" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Social Media Marketing
                        </h5>
                        <p class="mb-4 text-gray-700">
                            Learn how to create engaging content and build a strong social media presence.
                        </p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>

                <!-- Card 6: Entrepreneurship 101 -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://source.unsplash.com/featured/?business,startup"
                        alt="Business startup" />
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Entrepreneurship 101
                        </h5>
                        <p class="mb-4 text-gray-700">
                            Turn your ideas into reality with our comprehensive entrepreneurship course.
                        </p>
                        <a href="{{ route('courses.register') }}"
                        class="block w-full text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Sign Up Now
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </x-layouts>
