<?php include 'header.php' ?>

<?php

require 'database.php';

$sql = "SELECT * FROM tools"; //alle tools (rijen) ophalen met alle eigenschappen (kolommen)

$result = mysqli_query($conn, $sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<header>
    <h1>
        Welkom bij Tools4ever
    </h1>
    <p>
        Op deze site vind je alle informatie over de tools die te koop zijn bij Tools4ever
    </p>
</header>
<main>
    <section class="search">
        <form action="vewerk-zoek.php" method="post">
            <label for="">zoek</label>
            <input type="text" name="zoekveld" id="">
            <button type="submit">Zoek!</button>
        </form>
    </section>

    <div class="product-container">

        <div class="products-grid">
            <?php foreach ($tools as $tool) : ?>
                <div class="product">
                    <h3 class="product-name"><?php echo $tool['tool_name']; ?></h3>

                    <div class="product-price">&euro;<?php echo $tool['tool_price']; ?></div>

                    <img src="images/<?php echo $tool['tool_image']; ?>" alt="" class="product-image">
                    <a href="tools-detail.php?tool_id=<?php echo $tool['tool_id']; ?>">bekijk</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
</body>

</html>