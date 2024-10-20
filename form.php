<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Файлы на Яндекс.Диске</h1>

    <form action="web.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Загрузить файл</button>
    </form>

    <h2>Список файлов</h2>
    <ul>
        <?php foreach ($res as $file): ?>
            <li>
                <a target="_blank" href="<?php echo $file['docviewer']?>"><?php echo $file['name'];?></a>
                
                
                <form action="web.php" method="delete" >
                    <button type="submit" name="delete" value="<?= htmlspecialchars($file['name']) ?>">Удалить</button>
                </form>
              
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>