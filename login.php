    <div class="wraper">
        <form action="" method="post">
            <h2>Вхід</h2>
            <div class="input-box">
                <input type="text" name="login" required>
                <label>Логин</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required>
                <label>Пароль</label>
            </div>

            <button type="submit">Вхід</button>
            <?php global $message ?>
            <h4><?php echo $message?></h4>
        </form>
    </div>
