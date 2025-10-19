<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Support Ticket System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Support Ticket System</h1>
            <nav class="space-x-6 hidden md:block">
                <a href="#features" class="hover:text-blue-600">Features</a>
                <a href="#how" class="hover:text-blue-600">How It Works</a>
                <a href="#contact" class="hover:text-blue-600">Contact</a>
            </nav>
            <a href="{{route('login')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Your Support, Simplified</h2>
            <p class="text-lg mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti alias ad culpa..</p>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Features</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Ticket Management</h4>
                    <p class="text-gray-600">Create, track, and resolve tickets with ease.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Fast Response</h4>
                    <p class="text-gray-600">Ensure quick communication between users and agents.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Role-Based Access</h4>
                    <p class="text-gray-600">Assign permissions for SuperAdmins and General Users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how" class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">How It Works</h3>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-2xl font-bold">1</div>
                    <h4 class="mt-4 font-semibold">Login or Register</h4>
                    <p class="text-gray-600">Access your personalized dashboard.</p>
                </div>
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-2xl font-bold">2</div>
                    <h4 class="mt-4 font-semibold">Create Ticket</h4>
                    <p class="text-gray-600">Submit your issue with detailed information.</p>
                </div>
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-2xl font-bold">3</div>
                    <h4 class="mt-4 font-semibold">Track & Resolve</h4>
                    <p class="text-gray-600">Monitor progress until the ticket is resolved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-gray-300 py-8">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between">
            <p>&copy; 2025 Support Ticket System. <br> All rights reserved.</p>
            <div>
                <p>
                    <a href="mailto:support@example.com" class="hover:underline">Email: support@example.com</a>
                </p>
                <p>
                    <a href="tel:0235xxxx" class="hover:underline">Phone: 0235xxxx</a>
                </p>
            </div>
        </div>
    </footer>

</body>

</html>