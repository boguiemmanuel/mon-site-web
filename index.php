<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>mon site web</title>
</head>

<body>
    <?php include "squelette/menu.php"; ?>

    </nav>
    <header>
        <h1>
            <samp style="color: red;margin-left:500px"> developpeur</samp><samp style="color: blue;"> web</samp>
        </h1>
        <img name="diapo" width="100%" height="500PX">

        <script>
            var images = [];
            images[0] = "Images/image1.jpg";
            images[1] = "Images/30.jpg";
            images[2] = "Images/31.jpg";

            var i = 0;
            var timer = 10000;

            function changeimage() {
                document.diapo.src = images[i];
                if (i < images.length - 1) {
                    i++;
                } else {
                    i = 0;
                }
                setTimeout("changeimage()", timer)
            }
            window.onload = changeimage;
        </script>

    </header>
    <h1 align="center"> <samp style="color:red; font-size:47px">A PROPOS DE MOI</Samp></h1>

    <section class="main" id="produits">

        <div class="content">
            <div class="card">
                <div class="left">
                    <h1></h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum hic ratione eum quod atque tempora, dolorum illo aliquid odio consequuntur modi, necessitatibus nisi delectus id blanditiis ea. Voluptatum, deleniti facere?
                        Voluptatum, eligendi non? Nam eaque vitae unde voluptatum, dolorem delectus voluptatibus eum illum cumque repellat porro libero asperiores, sequi doloremque earum sapiente provident soluta distinctio reprehenderit. Vero error harum natus?
                        Nostrum quasi tempore vel, esse delectus, exercitationem impedit nesciunt harum quam cumque id vitae maxime accusamus mollitia. Repellendus rem necessitatibus quod, similique natus asperiores numquam. Sed temporibus odit fugiat voluptatum?
                        Praesentium id quos placeat, delectus cum perspiciatis. Vero ea unde, sapiente quae, eum ipsum sit, tempora sed dicta ad ducimus! Doloremque eius perspiciatis obcaecati aspernatur consequuntur, ipsam delectus excepturi ad?
                        Cum voluptatem, itaque praesentium fugit quisquam perferendis illo quaerat necessitatibus nemo consectetur veniam harum aliquam labore eaque perspiciatis sunt aperiam, blanditiis facere repellendus corrupti laborum voluptates. Nemo sed suscipit voluptates?

                        Quod, adipisci officia. Tempore voluptates molestias pariatur consectetur quos tempora distinctio nisi. Tempore consequatur laborum, reiciendis illo similique consectetur rerum dolores, facere id iure vero aspernatur a. Consectetur, necessitatibus sint.
                        Illum saepe modi suscipit perspiciatis laboriosam! Nihil culpa, possimus autem inventore eos incidunt. Quaerat pariatur neque eaque doloremque assumenda minus ab saepe eveniet qui, eius quis nostrum harum facilis laborum.</p>

                </div>
                <div class="right">

                    <img src="Images/28.jpg" style="width:100% ; height : 900px" alt="image28">
                </div>
            </div>


        </div>
    </section>

    <h1 align="center"> <samp style="color:red;font-size:47px;"> suggestion pour l'amélioration de mon site web</samp> </h1>
    <?php include "PHP/message.php"; ?>




    <footer>
        <?php include "squelette/footer.php"; ?>
    </footer>

</body>

</html>