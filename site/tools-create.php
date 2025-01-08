<?php
require 'database.php';

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Nieuw product invoeren</title>

</head>
<body>
    <h1>Nieuw product</h1>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-groep">
            <label for="naamProduct">Naam product</label>
            <input type="text" name="naamProduct" id="naamProduct" required>
        </div>
        <div class="form-groep">
            <label for="categorieProduct">Categorie product</label>
            <select name="categorieProduct" id="">
                <option value="" disabled selected>Selecteer categorie</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php endforeach; ?>

            </select>
        </div>
        <div class="form-groep">
            <label for="prijsProduct">Prijs product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">
        </div>
        <div class="form-groep">
            <label for="merkProduct">Merk product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>
        <button type="submit">Maak nieuw product!</button>
    </form>
</body>

</html>