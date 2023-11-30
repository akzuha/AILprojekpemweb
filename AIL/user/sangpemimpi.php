    <!-- main -->
        <!-- services -->
        <section id="services" class="services">
        <div class='container_film'>
                        <h2>List Film</h2>
            <?php 
                    $query = "SELECT film.idfilm, film.namafilm, film.deskripsi, film.cover, film.idsupplier, supplier.username, genre.genre 
                    FROM film 
                    JOIN supplier ON film.idsupplier = supplier.idsupplier 
                    JOIN genre ON film.idgenre = genre.idgenre";
                    $result = mysqli_query($koneksi,$query);

                    while($data_film = mysqli_fetch_assoc($result)){
                        echo "
                        
                        <!--Service 1-->
                        <div class='service'>
                            <div class='image'>
                                <img src='../supplier/images/$data_film[cover]' width='100' height='100'>
                            </div>
                            <div class='info'>
                                <h3>$data_film[namafilm]</h3>
                                <p style='color:#fff;'>$data_film[genre]</p>
                                <p style='color: black;'>
                                $data_film[deskripsi]
                                </p>
                                <a href='?page=$data_film[namafilm]'><button class='action_btn'>Watch Now</button></a>
                            </div>
                        </div>
                    </div>
                          ";
                    }
                  ?>
            
            
        </section>
        
        <!-- contact -->
        <section id="contact" class="contact"></section>
    </main>
    