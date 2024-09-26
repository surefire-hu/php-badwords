<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
          }
        }
      }
    }
  </script>
</head>
<body>
    <header class="text-center p-4">
        <h1 class="text-3xl font-bold">Censugrafo</h1>
    </header>
    <div class="container mx-auto p-4">
        <form action="response.php" method="GET" class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <span class="block text-gray-700">Parola</span>
                <label for="censura" class="sr-only">Censura</label>
                <input type="text" class="border border-gray-300 rounded-lg p-2 w-full" id="censura" placeholder="Censura" name="censura">
            </div>
            <div class="mb-4">
                <label for="paragrafo" class="sr-only">Paragrafo</label>
                <textarea class="border border-gray-300 rounded-lg p-2 w-full" id="paragrafo" rows="10" placeholder="Scrivi il testo" name="paragrafo"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-lg p-2 hover:bg-blue-600">Submit</button>
        </form>
    </div>
</body>
</html>