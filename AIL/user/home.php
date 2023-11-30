    <!-- main -->
    <?php 
    $film = "SELECT * FROM film ORDER BY idfilm DESC";
    $query = mysqli_query($koneksi, $film);
    $data_film = mysqli_fetch_array($query);
    ?>
    <main>
        <!-- main -->
        <section id="hero" class="hero">
            <div class="container">
                <h3>Movies and Streaming</h3>
                <h1>AIL Streaming Film</h1>
                <span></span>
                <p>
                    Tired getting home after work? Watch some Film and Chill with AIL ID.
                </p>
                <a href="?page=film" class="action_btn">Get Started</a>
            </div>
        </section>
        <!-- services -->
        <section id="services" class="services">
            <div class="container">
                <h2>Newest Release Production</h2>
                <!--Service 1-->
                <div class="service">
                    <div class="image">
                        <img src="../supplier/images/<?php echo $data_film['cover']; ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="num">#1</div>
                        <h3><?php echo $data_film['namafilm']; ?></h3>
                        <p>
                            <?php echo $data_film['deskripsi']; ?>
                        </p>
                        <a href="?page=film"><button class="action_btn">Read More</button></a>
                    </div>
                </div>
                <!--Service 2-->
                <div class="service service2">
                    <div class="info">
                        <div class="num">#2</div>
                        <h3><?php echo $data_film['namafilm']; ?></h3>
                        <p>
                            <?php echo $data_film['deskripsi']; ?>
                        </p>
                        <a href="?page=film"><button class="action_btn">Read More</button></a>
                    </div>
                    <div class="image">
                        <img src="../supplier/images/<?php echo $data_film['cover']; ?>" alt="">
                    </div>
                </div>
                <!--Service 2-->
                <div class="service">
                    <div class="image">
                        <img src="../supplier/images/<?php echo $data_film['cover']; ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="num">#3</div>
                        <h3><?php echo $data_film['namafilm']; ?></h3>
                        <p>
                        <?php echo $data_film['deskripsi']; ?>
                        </p>
                        <a href="?page=film"><button class="action_btn">Read More</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <h2>Testimonials</h2>
                <div class="grid_container">
                    <!--Testimonials-->
                    <div class="testimonial">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Perjalanan membuat website ini tidaklah mudah, perjalanan naik turun seperti menaiki roller coaster. Sekian kata dari saya, semoga mendapat hasil dan nilai yang terbaik.
                        </p>
                        <div class="name">Achmad Aulia</div>
                        <div class="job">Executive</div>
                    </div>
                    <!--Testimonials-->
                    <div class="testimonial">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Membagi waktu mungkin mudah untuk dibilang, tetapi nyatanya tidaklah semudah itu untuk dilaksanakan. Ketika semua dirasa rumit dan tidak ada jalan keluar, ingat aku akan selalu bersamamu.
                        </p>
                        <div class="name">Levi</div>
                        <div class="job">Director</div>
                    </div>
                    <div class="testimonial">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Jangan percaya kepada siapapun, sesungguhnya di dunia ini kau hanya memiliki diri mu sendiri, dan Tuhan. Maka jangan pernah lupakan Tuhanmu.
                        </p>
                        <div class="name">Asshidiqi</div>
                        <div class="job">Programmer</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- contact -->
        <section id="contact" class="contact"></section>
    </main>
    