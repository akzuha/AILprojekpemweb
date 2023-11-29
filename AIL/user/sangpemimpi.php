    <!-- main -->
        <link rel="stylesheet" href="../css/film.css">
        <!-- services -->
        <section id="services" class="services">
        <div class='container_film'>
                        <h2>List Film</h2>
            <?php 
                    $query = "SELECT * FROM film WHERE 1";
                    $result = mysqli_query($koneksi,$query);

                    while($data_film = mysqli_fetch_assoc($result)){
                        $idfilm = $data_film['idfilm'];
                        $filmname = $data_film['namafilm'];
                        $description = $data_film['deskripsi'];
                        $cover = $data_film['cover'];
                        $idsupplier = $data_film['idsupplier'];
                        echo "
                        
                        <!--Service 1-->
                        <div class='service'>
                            <div class='image'>
                                <img src='../supplier/images/$data_film[cover]' width='100' height='100'>
                            </div>
                            <div class='info'>
                                
                                <h3>$data_film[namafilm]</h3>
                                <p>
                                $data_film[deskripsi]
                                </p>
                                <a href='?page=film'><button class='action_btn'>Watch Now</button></a>
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
    