<div id="sidebar" class="d-flex flex-column p-3 text-bg-dark min-vh-100 start-0 position-fixed">
    <ul class="nav flex-column mb-auto gap-5 my-4">
        <li class="nav-item">
            <a href="./home.php" class="<?= urlIs('home.php') ? 'nav-link text-white' : 'nav-link text-secondary' ?> d-flex align-items-center gap-3 fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="<?= urlIs('home.php') ? 'white' : 'gray' ?>" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="./about.php" class="<?= urlIs('about.php') ? 'nav-link text-white' : 'nav-link text-secondary' ?> d-flex align-items-center gap-3 fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="<?= urlIs('about.php') ? 'white' : 'gray' ?>" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                About
            </a>
        </li>
        <li>
            <a href="./projects.php" class="<?= urlIs('projects.php') ? 'nav-link text-white' : 'nav-link text-secondary' ?> d-flex align-items-center gap-3 fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill=" <?= urlIs('projects.php') ? 'white' : 'gray' ?>" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z" />
                </svg>
                Projects
            </a>
        </li>
        <li>
            <a href="./contacts.php" class="<?= urlIs('contacts.php') ? 'nav-link text-white' : 'nav-link text-secondary' ?> d-flex align-items-center gap-3 fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="<?= urlIs('contacts.php') ? 'white' : 'gray' ?>" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                </svg>
                Contacts
            </a>
        </li>
    </ul>
    <hr>
    <?php require'date.php' ?>
</div>