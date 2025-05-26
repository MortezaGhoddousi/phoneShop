
<?php 
session_start();
include("header.php"); 
if (!empty($_SESSION['username'])) {
    echo "<script>showMessage();</script>";
}

?>

<div class='hide'>
    <p>You have been logged in successfully ...</p>
</div>

<article class="homePage">
    <section class="part1">
        <aside>
            <p>From $999</p>
            <h1>iPhone 12 Pro</h1>
            <button>buy now</button>
            <a href="#"><i class="bx bx-play-circle"></i>watch video</a>
        </aside>
        <img src="./assets/home-hero-image.jpg" alt="home-hero" />
        <aside>
            <ul>
                <li>
                    <i class="bx bx-play-circle"></i>
                    <h4>Free Shipping</h4>
                    <p>Free shipping on all US orders</p>
                </li>
                <li>
                    <i class="bx bxl-bitcoin"></i>
                    <h4>100% Money Back</h4>
                    <p>You have 10 days to return</p>
                </li>
                <li>
                    <i class="bx  bx-timer"></i> 
                    <h4>Support 24/7</h4>
                    <p>Contact us 24 hours a day</p>
                </li>
                <li>
                    <i class="bx  bx-lock-open-alt"></i>
                    <h4>100% Payment Secure</h4>
                    <p>Your payment are safe with us</p>
                </li>
            </ul>
        </aside>
    </section>

    <section class="part2">
        <div>
            <h4>Laptops</h4>
            <p>245</p>
            <img src="./assets/category-laptops.webp" alt="category" />
        </div>
        <div>
            <h4>Drones</h4>
            <p>28</p>
            <img src="./assets/category-drones-2.webp" alt="category" />
        </div>
        <div>
            <h4>Smartphones</h4>
            <p>273</p>
            <img src="./assets/category-phones.webp" alt="category" />
        </div>
        <div>
            <h4>Gaming</h4>
            <p>25</p>
            <img src="./assets/category-gaming.webp" alt="category" />
        </div>
    </section>

    <section class="part3">
        <div>
            <h3>#1 Hacus Habitasse</h3>
            <hr />
            <p>Neque egestas odio nisi congue quisque.</p>
        </div>
        <div>
            <h3>#2 Natoque Penatibus</h3>
            <hr />
            <p>Ultrices tincidunt arcu non sodales vestibulum.</p>
        </div>
        <div>
            <h3>#3 Tincidunt Ornare</h3>
            <hr />
            <p>Dignissim diam quis enim lobortis scelerisque.</p>
        </div>
        <div>
            <h3>#4 Aliquam Sagittis</h3>
            <hr />
            <p>Venenatis cras sed felis eget aliquet commodo.</p>
        </div>
        <div>
            <aside>
                <h1>Oculus VR</h1>
                <p>
                    Ullamcorper malesuada proin libero nunc consequat
                    interdum varius consequat mauris nunc congue nisi
                    vitae.
                </p>
                <button>view offer</button>
                <a href="#"
                    ><i class="bx bx-play-circle"></i>watch video</a
                >
            </aside>
            <img src="./assets/oculus-img-768x495.webp" alt="" />
        </div>
    </section>

    <section class="part4">
        <div>
            <div>
                <h1>Featured Products</h1>
                <p>Feugiat pretium nibh ipsum consequat commodo.</p>
            </div>
            <button>View all</button>
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

                <?php for($i=0; $i<6; $i++) { ?>
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
      
            <!-- <aside>
                <img src="./assets/product-10-500x415.webp" alt="AirTag" />
                <h3>AirTag</h3>
                <p>$29.00</p>
                <span>GADGETS</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-1-1-500x415.webp" alt="Apple Watch Series 6" />
                <h3>Apple Watch Series 6</h3>
                <p>$399.00</p>
                <span>GADGETS</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-6-500x415.webp" alt="HTC Vive Pro 2" />
                <h3>HTC Vive Pro 2</h3>
                <p>$699.00</p>
                <span>GADGETS, GAMING</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-5-500x415.webp" alt="Razer Blackshark" />
                <h3>Razer Blackshark</h3>
                <p>$159.00</p>
                <span>GADGETS, GAMING</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-2-1-500x415.webp" alt="Samsung Galaxy S21" />
                <h3>Samsung Galaxy S21</h3>
                <p>$799.00</p>
                <span>SMARTPHONES</span>
                <button>Add to Cart</button>
            </aside> -->
        </div>
    </section>

    <section class="part5">
        <img src="./assets/home-page-cta-ipad-768x614.webp" alt="" />
        <aside>
            <p>From $1099</p>
            <h1>iPad Pro</h1>
            <h4>
                Libero nunc consequat interdum Varius sitamet mattis
                vulputate Ultricies mieget mauris pharetra
            </h4>
            <button>Buy now</button>
        </aside>
        <aside>
            <h3>Super Powerful Chip</h3>
            <p>
                Pellentesque pulvinar habitant morbi tristique maecenas.
            </p>
        </aside>
    </section>

    <section class="part6">
        <div>
            <aside>
                <i class="bx bx-star"></i>
            </aside>
            <h2>Special Offers</h2>
            <p>
                Lorem ipsum consectetur adipiscing eiusmod tempor
                incididunt labore dolore magna aliqua.
            </p>
            <button>learn more</button>
        </div>
        <div>
            <aside>
                <i class="bx bx-ghost"></i>
            </aside>
            <h2>Amazing Events</h2>
            <p>
                Massa tincidunt nunc pulvinar sapien et ligula
                ullamcorper blandit turpis cursus commodo sed egestas
                egestas.
            </p>
            <button>learn more</button>
        </div>
        <div>
            <aside>
                <i class="bx bxs-star"></i>
            </aside>
            <h2>Human Reviews</h2>
            <p>
                Ullamcorper malesuada proin libero nunc consequat
                interdum varius consequat mauris nunc congue nisi vitae.
            </p>
            <button>learn more</button>
        </div>
    </section>

    <section class="part7">
        <div>
            <div>
                <h1>Latest News</h1>
                <p>Feugiat pretium nibh ipsum consequat commodo.</p>
            </div>
            <button>View all</button>
        </div>
        <div>
            <aside>
                <img src="./assets/article-image-5.webp" alt="" />
                <div>
                    <span>USEFUL</span>
                    <h3>Amet Commodo Nulla Facilisi Vehicula Ipsum</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do…
                    </p>
                    <button>Read more</button>
                </div>
            </aside>
            <aside>
                <img
                    src="./assets/article-image-4-768x637.webp"
                    alt="" />
                <div>
                    <span>GADGETS</span>
                    <h3>Urnaneque Viverra Justo Ultrices Sapieneget</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do…
                    </p>
                    <button>Read more</button>
                </div>
            </aside>
            <aside>
                <img src="./assets/article-image-6.webp" alt="" />
                <div>
                    <span>EXPIRIENCE</span>
                    <h3>Tristique Magna Amet Purus Gravida Quisblandit</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do…
                    </p>
                    <button>Read more</button>
                </div>
            </aside>
        </div>
    </section>
</article>

<?php include("footer.php"); ?>
   