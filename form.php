
    <div class="wraper">
        <form action="" method="post">
            <h3>Форма додавання студентів</h3>
            <div class="input-box">
                <input type="text" name="name" required>
                <label>Імʼя</label>
            </div>

            <div class="input-box">
                <input type="text" name="surename" required>
                <label>Прізвище</label>
            </div>
            
            <div class="input-box">
                <input type="number" name="age" required>
                <label>Вік</label>
            </div>

            <button type="submit">Додати у таблицю</button>
            <h4>
                <?php global $message ?>
                <?php echo $message ?>
            </h4>
        </form>
        <div class="cont">
            <form action="" method="post">
                <button name="logout">Вийти з аккаунту</button>
            </form>
        </div>
    </div>
    
    <?php if(isset($_COOKIE['students']) && $_COOKIE['students']){?>
        <div class="wraper-1">
            <table>
            <thead>
                <tr>
                    <th>Імʼя</th>
                    <th>Прізвище</th>
                    <th>Вік</th>
                </tr>
            </thead>
            <?php foreach(unserialize($_COOKIE['students']) as $stud) {?>
                <tr>
                    <td> <?php echo $stud['name']?></td>
                    <td> <?php echo $stud['surename']?></td>
                    <td> <?php echo $stud['age']?></td>
                </tr>
            <?php }?>    
            </table>
        </div>
    <?php }?>
