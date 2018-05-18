<body>
        <form name="text-form" method="post">
            <textarea name="text" cols="80" rows="6">
              <?php if (isset($_POST['text'])) echo $_POST['text']; else echo "Введите текст";?>
            </textarea>
             //Определяется, была ли установлена переменная $_POST['text'],
              если да, выводит её значение, если нет, выводит “Введите текст”

            <br/>
            <input type="submit" value="Отправить"/>
            <input type="reset" value="Очистить"/>
        </form>
        <?php
        $text=$_POST['text'];
        $text_nonspace=str_replace(array(" "), '', $text);
        echo 'Количесвто символов с пробелом: ' , mb_strlen($text, 'utf-8');
        echo '<br/>','Количество символов без пробела: ' , mb_strlen($text_nonspace, 'utf-8');
        ?>
</body>
