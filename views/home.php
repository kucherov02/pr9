<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<section>

    <div class="left">
        <h2>Home Page</h2>
        <hr>
    </div>

    <div class="right teal">
        <?php if($_SESSION['auth'] === false) : ?>
        <form class="card-panel" action="?controller=login" method="post">
            <div class="row">
                <div class="field">
                    <label>Email: <input type="email" name="email"></label>
                </div>
            </div>
            <div class="row">
                <div class="field">
                    <label>Password: <input type="password" name="password"><br></label>
                </div>
            </div>
            <input type="submit" class="btn" value="Login">
        </form>
        <?php else :?>
        <div>
            <a class="btn" href="?controller=logout">Logout</a>
            <a class="lsbtn btn" href="?controller=users">List of all Users</a>
            <a class="btn" href="?controller=users&action=addForm">add new user</a>
            <a class="btn" href="?controller=roles&action=addForm">add new role</a>
        </div>
        <?php endif;?>
    </div>

</section>

<style>
    section {
        width: 100%;
        height: 100vh;
    }

    .left, .right {
        height: 100%;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column; 
    }

    .lsbtn {
        color: #ffffff;
    }

    a {
        font-size: 2rem;
    }
</style>