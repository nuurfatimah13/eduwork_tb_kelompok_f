## Catatan Folder
  - Gunakan template yang sudah ada, silakan check folder template.
  - Pada bagian sidebar, silakan cari class ***active*** dan tempatkan pada navigation yang sesuai dengan nama folder dan sesuaikan juga bagian ***href***-nya, example : 
    ```html
    <li class="sidebar-item active">
        <a class="sidebar-link" href="./genre.php">
            <i class="align-middle" data-feather="list"></i> 
            <span class="align-middle">Genre</span>
        </a>
    </li>
    ```
  - Format nama file setiap folder gunakan nama folder tersebut untuk index dan inisial namanya untuk file create dan edit, example: 

    ---
        Folder genre: 
        file index -> genre.php
        file create -> create-gn.php
        file edit -> edit-gn.php

  - Format untuk create dan edit, silakan pada bagian action disesuaikan dengan nama folder dan inisial nama folder, example: 
    
    ---
        action="../../../controllers/template/store-tmp.php" -> action="../../../controllers/genre/store-gn.php" 

  - Ganti nama bagian title dan card title dengan menyesuaikan nama folder bersangkutan.

***Happy Coding (^_^)***