<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />


    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    Saira: ["Saira Condensed", "sans-serif"],
                },
                extend: {
                    colors: {
                        whitec: "#ffffff ",
                        bkeuciel: "#809fff",
                        bleu: "#bfcfff",
                        bleuc: "#001247",
                        bleucc: "#000066",
                        beige: "#DED3A6",
                        verblanc: "#E7EAEF",
                    },
                },
            },
        };
    </script>
    <style>
        @layer components {
            .sidebar {
                transition: all .4s ease-in-out;
            }
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.363);
        }
    </style>
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

<body class="bg-verblanc">
    
        @yield('form')

</body>
