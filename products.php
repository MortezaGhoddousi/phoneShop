
<?php include("header.php"); ?>

<article class="products">
    <section class="part1">
        <nav>
            <ul>
                <li><a href="./index.html">home</a></li>
                <span>/</span>
                <li><a class="active" href="./products.html">products</a></li>
            </ul>
        </nav>
        <h1>products</h1>
    </section>

    <section class="part2">
        <div>
            <h2>Showing all 9 results</h2>
            <select name="sortProducts" id="sortProducts">
                <option value="Default sorting">Default sorting</option>
                <option value="Sort by popularity">Sort by popularity</option>
                <option value="Sort by average rating">Sort by average rating</option>
                <option value="Sort by latest">Sort by latest</option>
                <option value="Sort by price: low to high">Sort by price: low to high</option>
                <option value="Sort by price: high to low">Sort by price: high to low</option>
            </select>
        </div>
        <div>
            <?php
                $conn = mysqli_connect('localhost', 'admin', 'admin', 'phoneShop');
                if ($conn){         
                    $query = "SELECT * FROM allgoods";
                    $result = mysqli_query($conn, $query);
                    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    mysqli_close($conn);
                }
            ?>

                <?php for($i=0; $i<sizeof($var); $i++) { ?>
                    <?php $key = $var[$i]['id']; ?>
                    <?php $imageAddress = $var[$i]['imageAddress']; ?>
                    <?php $name = $var[$i]['name']; ?>
                    <?php $price = $var[$i]['price']; ?>
                    <?php $category = $var[$i]['category']; ?>
                    <?php echo ("<aside key=$key>"); ?>
                        <img src="<?php echo($imageAddress); ?>" alt="<?php echo("$name"); ?>"/>
                        <h3><?php echo("$name"); ?></h3>
                        <p>$<?php echo("$price"); ?></p>
                        <span><?php echo("$category"); ?></span>
                        <button>Add to Cart</button>
                    <?php echo("</aside>"); ?>
            <?php } ?>
        </div>
    </section>
</article>

<?php include("footer.php"); ?>

