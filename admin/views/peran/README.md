## Catatan Folder
  - Gunakan template yang sudah ada, silakan check folder template.
  - Pada bagian sidebar, silakan cari class ***active*** dan tempatkan pada navigation yang sesuai dengan nama folder dan sesuaikan juga bagian ***href***-nya, example : 
    ```html
    <li class="sidebar-item active">
        <a class="sidebar-link" href="./peran.php">
            <i class="align-middle" data-feather="cast"></i> 
            <span class="align-middle">Peran</span>
        </a>
    </li>
    ```
  - Format nama file setiap folder gunakan nama folder tersebut untuk index dan inisial namanya untuk file create dan edit, example: 

    ---
        Folder peran: 
        file index -> peran.php
        file create -> create-pra.php
        file edit -> edit-pra.php

  - Format untuk create dan edit, silakan pada bagian action disesuaikan dengan nama folder dan inisial nama folder, example: 
    
    ---
        action="../../../controllers/template/store-tmp.php" -> action="../../../controllers/peran/store-pra.php" 

  - Ganti nama bagian title dan card title dengan menyesuaikan nama folder bersangkutan.

***Happy Coding (^_^)***