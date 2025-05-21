
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
            <aside>
                <img src="./assets/product-7-500x415.webp" alt="AirPods Pro" />
                <h3>AirPods Pro</h3>
                <p>$249.00</p>
                <span>GADGETS</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
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
            </aside>
            <aside>
                <img src="./assets/product-8.webp" alt="Valve Index Knuckles" />
                <h3>Valve Index Knuckles</h3>
                <p>$419.00</p>
                <span>GAMING</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-3.webp" alt="XBOX Elite Controller" />
                <h3>XBOX Elite Controller</h3>
                <p>$179.00</p>
                <span>GAMING</span>
                <button>Add to Cart</button>
            </aside>
            <aside>
                <img src="./assets/product-4.webp" alt="XBOX Series X" />
                <h3>XBOX Series X</h3>
                <p>$499.00</p>
                <span>GAMING</span>
                <button>Add to Cart</button>
            </aside>
        </div>
    </section>
</article>

<?php include("footer.php"); ?>

