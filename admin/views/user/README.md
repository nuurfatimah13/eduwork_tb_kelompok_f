## Catatan Folder
  - Gunakan template yang sudah ada, silakan check folder template.
  - Pada bagian sidebar, silakan cari class ***active*** dan tempatkan pada navigation yang sesuai dengan nama folder dan sesuaikan juga bagian ***href***-nya, example : 
    ```html
    <li class="sidebar-item active">
        <a class="sidebar-link" href="./user.php">
            <i class="align-middle" data-feather="users"></i> 
            <span class="align-middle">Users</span>
        </a>
    </li>
    ```
  - Format nama file setiap folder gunakan nama folder tersebut untuk index dan inisial namanya untuk file create dan edit, example: 

    ---
        Folder user: 
        file index -> user.php
        file create -> create-usr.php
        file edit -> edit-usr.php

  - Format untuk create dan edit, silakan pada bagian action disesuaikan dengan nama folder dan inisial nama folder, example: 
    
    ---
        action="../../../controllers/template/store-tmp.php" -> action="../../../controllers/user/store-usr.php" 

  - Ganti nama bagian title dan card title dengan menyesuaikan nama folder bersangkutan.

***Happy Coding (^_^)***