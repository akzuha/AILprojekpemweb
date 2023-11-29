    <!-- main -->
    <?php 
    $film = "SELECT * FROM film ORDER BY idfilm DESC";
    $query = mysqli_query($koneksi, $film);
    $data_film = mysqli_fetch_array($query);
    ?>
        
        <!-- services -->
        <section id="services" class="services">
            <div class="container">
                <h2>Weekly Best Film Reccomendation</h2>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsam, eos minima voluptatem architecto assumenda, consectetur doloremque doloribus animi quibusdam nostrum perferendis fugiat reprehenderit fuga delectus? Aliquam vel accusantium enim.
                        </p>
                        <div class="name">Achmad Aulia</div>
                        <div class="job">Director</div>
                    </div>
                    <!--Testimonials-->
                    <div class="testimonial">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsam, eos minima voluptatem architecto assumenda, consectetur doloremque doloribus animi quibusdam nostrum perferendis fugiat reprehenderit fuga delectus? Aliquam vel accusantium enim.
                        </p>
                        <div class="name">Achmad Aulia</div>
                        <div class="job">Director</div>
                    </div>
                    <div class="testimonial">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsam, eos minima voluptatem architecto assumenda, consectetur doloremque doloribus animi quibusdam nostrum perferendis fugiat reprehenderit fuga delectus? Aliquam vel accusantium enim.
                        </p>
                        <div class="name">Achmad Aulia</div>
                        <div class="job">Director</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- contact -->
        <section id="contact" class="contact"></section>
    </main>
    