<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog de comida</title>
</head>

<body>

    <!-- HEADER -->

    <header>
        <div id="logo">
            <a href="index.php">
                Blog de Cocina
            </a>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php"> Categoría 1 </a></li>
                <li><a href="index.php"> Categoría 2 </a></li>
                <li><a href="index.php"></a> Categoría 3 </li>
                <li><a href="index.php"></a> Categoría 4 </li>
                <li><a href="index.php"></a> Categoría 5 </li>
            </ul>
        </nav>
    </header>

    <!-- SIDE BAR -->
    <aside>
        <div id="login" class="block-aside">
            <p>Identificate</p>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Entrar">
            </form>
        </div>
    </aside>

    <aside>
        <div id="register" class="block-aside">

            <p>Regístrate</p>

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

        <article class="entry">
            <h2 class="entry_title">Título de la entrada</h2>
            <p class="entry_description"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
            </p>
        </article>

        <article class="entry">
            <h2 class="entry_title">Título de la entrada</h2>
            <p class="entry_description"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
            </p>
        </article>

        <article class="entry">
            <h2 class="entry_title">Título de la entrada</h2>
            <p class="entry_description"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
            </p>
        </article>

        <article class="entry">
            <h2 class="entry_title">Título de la entrada</h2>
            <p class="entry_description"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
            </p>
        </article>

        <article class="entry">
            <h2 class="entry_title">Título de la entrada</h2>
            <p class="entry_description"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur dolorem fugiat illum tenetur harum nisi labore ipsa et! Eos autem modi quisquam quis corrupti veritatis dignissimos aut, laudantium numquam, sed delectus nulla? Illo quam blanditiis consectetur quidem, assumenda corporis perspiciatis est sunt? Animi sequi accusamus mollitia dolorum ut doloremque deleniti libero omnis iste harum, veniam quidem. Asperiores, exercitationem molestiae?
            </p>
        </article>
    </main>
    <!-- FOOTER -->
    <footer>
        <p>Desarrolado por SantiSvk &copy;</p>
    </footer>

</body>

</html>