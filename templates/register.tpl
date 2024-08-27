<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
    <h1>Register</h1>

    {if isset($error)}
        <p class="error">{$error}</p>
    {/if}

    <form method="post" action="register.php">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{$username|escape}" />
            {if isset($errors.username)}<p class="error">{$errors.username}</p>{/if}
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{$email|escape}" />
            {if isset($errors.email)}<p class="error">{$errors.email}</p>{/if}
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            {if isset($errors.password)}<p class="error">{$errors.password}</p>{/if}
        </div>
        <div>
            <input type="submit" value="Register" />
        </div>
    </form>
</body>
</html>
