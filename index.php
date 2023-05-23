<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <link rel="stylesheet" href="file-css/style.css">
</head>
<body>
   
    <div id="app">
        <h1>casa</h1>

        <div>
            <ul>
                <li v-for="(elem,index) in data" :key="index">
                    <img :src="elem.poster" alt="">
                </li>
            </ul>
        </div>
    </div>




    <script src="https://unpkg.com/vue@3/dist/vue.global.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>