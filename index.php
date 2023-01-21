<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cocina</title>
</head>


<body>

    <!-- HEADER -->

    <header id="header">
        <div id="logo">
            <a href="index.php">
                Blog de Cocina
            </a>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php"> Categoría 1 </a></li>
                <li><a href="index.php"> Categoría 2 </a></li>
                <li><a href="index.php"> Categoría 3 </a></li>
                <li><a href="index.php"> Categoría 4 </a></li>
                <li><a href="index.php"> Categoría 5 </a></li>
                <li><a href="index.php"> Sobre Mí </a></li>
                <li><a href="index.php"> Contacto </a></li>

            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>


    <div id="container">

        <!-- SIDE BAR -->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div id="register" class="block-aside">

                <h3>Regístrate</h3>

                <form action="register.php" method="POST">

                    <label for="username">Username</label>
                    <input type="text" name="username">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <label for="password_repeat">Repite la contraseña</label>
                    <input type="password" name="password_repeat">

                    <input type="submit" value="Entrar">
                </form>
            </div>
        </aside>

        <!-- MAIN -->

        <main id="principal">

            <h1>Últimas entradas</h1>

            <a href="">
                <article class="entry">
                    <h2 class="entry_title">Título de la entrada</h2>
                    <p class="entry_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
                    </p>
                </article>
            </a>

            <article class="entry">
                <a href="">
                    <h2 class="entry_title">Título de la entrada</h2>
                </a>
                <p class="entry_description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
                </p>
            </article>

            <a href="">
                <article class="entry">
                    <h2 class="entry_title">Título de la entrada</h2>
                    <p class="entry_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
                    </p>
                </article>
            </a>

            <a href="">
                <article class="entry">
                    <h2 class="entry_title">Título de la entrada</h2>
                    <p class="entry_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
                    </p>
                </article>
            </a>

            <a href="">
                <article class="entry">
                    <h2 class="entry_title">Título de la entrada</h2>
                    <p class="entry_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
                    </p>
                </article>
            </a>
            <a href="">
                <div id="ver-todas">
                    <span href="">Ver todas las entradas</span>
                </div>
            </a>
        </main>
    </div>
    <div class="clearfix"></div>

    <!-- FOOTER -->
    <footer id="footer">
        <p>Desarrollado por SantiSvk &copy; <?=date("Y")?></p>
    </footer>

</body>

</html>