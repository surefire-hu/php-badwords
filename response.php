<?php 
    $censura = $_GET['censura'];
    $paragrafo = $_GET['paragrafo'];
    $newParagrafo = str_replace($censura, '****', $paragrafo);
    $lengthParagrafo = strlen($paragrafo);
    $lenghtNewParagrafo = strlen($newParagrafo);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body class="bg-gray-100">
    <h2 class="text-center text-2xl font-bold mt-4">
        <?php 
            echo $censura;
        ?>
    </h2>
    <main class="max-w-2xl mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <p class="text-gray-700">
                    <?php 
                    echo $paragrafo;
                    ?>
                </p>
            </div>
            <div class="mb-4">
                <span class="text-gray-600">Caratteri: 
                    <?php 
                    echo $lengthParagrafo 
                    ?>
                </span>
            </div>
            <div class="mb-4">
                <p class="text-gray-700">
                    <?php 
                    echo $newParagrafo;
                    ?>
                </p>
            </div>
            <div class="mb-4">
                <span class="text-gray-600">Caratteri: 
                    <?php 
                    echo $lenghtNewParagrafo
                    ?>
                </span>
            </div>
        </div>
    </main>
</body>
</html>