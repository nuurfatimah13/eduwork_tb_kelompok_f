## Catatan Folder
  - Gunakan template yang sudah ada, silakan check folder template.
  - Pada bagian sidebar, silakan cari class ***active*** dan tempatkan pada navigation yang sesuai dengan nama folder dan sesuaikan juga bagian ***href***-nya, example : 
    ```html
    <li class="sidebar-item active">
        <a class="sidebar-link" href="./actor.php">
            <i class="align-middle" data-feather="users"></i> 
            <span class="align-middle">Actors</span>
        </a>
    </li>
    ```
  - Format nama file setiap folder gunakan nama folder tersebut untuk index dan inisial namanya untuk file create dan edit, example: 

    ---
        Folder actor: 
        file index -> actor.php
        file create -> create-act.php
        file edit -> edit-act.php

  - Format untuk create dan edit, silakan pada bagian action disesuaikan dengan nama folder dan inisial nama folder, example: 
    
    ---
        action="../../../controllers/template/store-tmp.php" -> action="../../../controllers/actor/store-act.php" 

  - Ganti nama bagian title dan card title dengan menyesuaikan nama folder bersangkutan.

***Happy Coding (^_^)***