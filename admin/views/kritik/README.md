## Catatan Folder
  - Gunakan template yang sudah ada, silakan check folder template.
  - Pada bagian sidebar, silakan cari class ***active*** dan tempatkan pada navigation yang sesuai dengan nama folder dan sesuaikan juga bagian ***href***-nya, example : 
    ```html
    <li class="sidebar-item active">
        <a class="sidebar-link" href="./kritik.php">
            <i class="align-middle" data-feather="message-square"></i> 
            <span class="align-middle">Kritik</span>
        </a>
    </li>
    ```
  - Format nama file setiap folder gunakan nama folder tersebut untuk index dan inisial namanya untuk file create dan edit, example: 

    ---
        Folder kritik: 
        file index -> kritik.php
        file create -> create-ktk.php
        file edit -> edit-ktk.php

  - Format untuk create dan edit, silakan pada bagian action disesuaikan dengan nama folder dan inisial nama folder, example: 
    
    ---
        action="../../../controllers/template/store-tmp.php" -> action="../../../controllers/kritik/store-ktk.php" 

  - Ganti nama bagian title dan card title dengan menyesuaikan nama folder bersangkutan.

***Happy Coding (^_^)***