<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Educativa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 p-4 text-white flex justify-between items-center">
        <h1 class="text-2x1 font-bold">EducaWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="Estudiantes" class="hover:underline">Registro de Estudiantes</a></li>
            <li><a href="Docentes" class="hover:underline">Registro de docentes</a></li>
        </ul>
    </nav>
    
    <header class="text-center py-12 bg-blue-500 text-white">
        <h2 class="text-4xl font-bold">Bienvenido al centro educativo Aprende con Ruby</h2>
        <p class="text-lg mt-2">Explora nuestros cursos y mejora tus habilidades.</p>
    </header>
    
    <main class="container mx-auto px-4 py-10">
        <h3 class="text-2xl font-semibold text-center">Nuestros Cursos</h3>
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold">Matemáticas</h4>
                <p class="mt-2 text-gray-600">Aprende desde lo básico hasta lo avanzado con nuestros cursos de matemáticas.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold">Ciencia</h4>
                <p class="mt-2 text-gray-600">Descubre el mundo de la ciencia con cursos en diversos.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-xl font-bold">Historia</h4>
                <p class="mt-2 text-gray-600">Explora el pasado y comprende mejor el mundo de hoy.</p>
            </div>
        </div>
    </main>
    
    <footer class="text-right p-4 bg-blue-600 text-white mt-auto w-full fixed bottom-0 left-0">
        &copy; 2025 EducaWeb - Todos los derechos reservados
    </footer>
</body>
</html>