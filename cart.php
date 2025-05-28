<?php include("header.php"); ?>


<article class="cart">
    <section class="part1">
        <h1>Cart</h1>
        <div>
            <i class='bx bx-bell'></i>
            <span>Your cart is currently empty.</span>
        </div>
        <a href="./products.php" class="returnToShop">Return to shop</a>
    </section>

    <section class="part2">
        <h1>Cart</h1>
        <div>
            <table class="cart">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sum = 0;
                    for($i=0; $i<sizeof($varUser); $i++) { 
                        $conn = mysqli_connect('localhost', 'admin', 'admin', 'phoneShop');
                        $goodId = $varUser[$i]['goodId'];
                        if ($conn) {
                            $query = "SELECT * FROM allgoods WHERE id='$goodId'";
                            $result = mysqli_query($conn, $query);
                            $varGood = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            mysqli_close($conn);
                        }
                        $sum = $sum + ($varGood[0]['count'] * $varGood[0]['price']);
                    ?>
                    <tr>
                        <td>
                            <a href="#"><img src="<?php echo($varGood[0]['imageAddress']); ?>" alt="AirPods Pro" /></a>
                            <a href="#">
                                <h3><?php echo($varGood[0]['name']); ?></h3>
                            </a>
                            <p>$<?php echo($varGood[0]['price']); ?></p>
                        </td>
                        <td id="<?php echo($goodId); ?>">
                            <button class="decreaseProductBtn">-</button>
                            <span class="numberOfProduct"><?php echo($varGood[0]['count']); ?></span>
                            <button class="increaseProductBtn">+</button>
                        </td>
                        <td>
                            <span>$<?php echo($varGood[0]['count'] * $varGood[0]['price']); ?></span>
                            <i class='bx bxs-trash-alt'></i>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <form>
                <input type="text" name="couponCode" value="Coupon code">
                <input type="submit" name="apply" value="Apply coupon">
                <input type="submit" name="Update" value="Update cart">
            </form>
        </div>
        <aside>
            <h1>Cart totals</h1>
            <h2>Subtotal</h2>
            <span>$<?php echo($sum); ?></span>
            <h2>Total</h2>
            <span>$<?php echo($sum); ?></span>
            <input type="submit" name="ProceedToCheckout" value="Proceed to checkout">
        </aside>
    </section>
</article>

<?php include("footer.php"); ?>