<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci - <\ NetoDEV>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .fibonacci-image {
            width: 23rem;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Sequência de Fibonacci</h1>
        <div class="row marcador align-items-center">
            <div class="col mx-auto text-center">
                <img src="https://immagini.quotidiano.net/?url=http://p1014p.quotidiano.net:80/polopoly_fs/1.5743745.1606152791!/httpImage/image.jpg_gen/derivatives/cinemascope/image.jpg&w=700" alt="Fibonacci" class="fibonacci-image">
            </div>
        </div>
        <hr>
        <p>Na matemática, os números de Fibonacci são uma sequência ou sucessão definida como recursiva pela fórmula:</p>
        <h3 class="text-center">
            <code>(n+2) = F(n+1) + F(n), com n ≥ 1 e F(1) = F(2) = 1</code>
        </h3>
        <p>Os primeiros números de Fibonacci são: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, ...</p>
        <p>Esta sequência foi descrita primeiramente por Leonardo de Pisa, também conhecido como Fibonacci, para descrever o crescimento de uma população de coelhos.</p>
        <form method="post" class="mb-4">
            <div class="form-group">
                <label for="numTerms">Para calcular a sequência da espiral de Fibonacci, insira o número de termos desejados.</label>
                <input type="number" class="form-control" id="numTerms" name="numTerms" min="1" required>
            </div>
            <button type="submit" class="btn btn-block btn-secondary">Calcular
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-opacity="0" stroke="currentColor" stroke-dasharray="36" stroke-dashoffset="36" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6L18 12L8 18z">
                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="36;0" />
                        <animate fill="freeze" attributeName="fill-opacity" begin="0.5s" dur="0.15s" values="0;0.3" />
                    </path>
                </svg>
            </button>
        </form>

        <?php

        function fibonacci($n)
        {
            // Verifica se o número de termos é menor ou igual a 0
            if ($n <= 0) return [];
            // Verifica se o número de termos é igual a 1
            if ($n === 1) return [0];
            // inicializa os dois primeiros
            $sequence = [0, 1];
            // calcula os números seguintes
            for ($i = 2; $i < $n; $i++) {
                // Soma os dois números anteriores para obter o próximo número da sequência...
                $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
            }
            //Voilà!
            return $sequence;
        }
        // Retorno
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numTerms = intval($_POST["numTerms"]);
            $fibonacciSequence = fibonacci($numTerms);
            echo "<div class=\"alert alert-secondary\" role=\"alert\">";
            echo "Essa é a sequência de Fibonacci tendo como parâmetro <strong>{$_REQUEST["numTerms"]} termos: </strong> " . implode(", ", $fibonacciSequence);
            echo "</div>";
            $_REQUEST = null;
        }
        ?>
    </div>

    <footer class="text-center bg-dark text-light py-3">
        <p class="mb-0"> Desenvolvido por: Manoel Tavares Neto, <strong>
                <\ NetoDEV>🧙‍♂️

            </strong></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
