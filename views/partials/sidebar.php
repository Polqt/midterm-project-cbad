<div class="d-flex flex-column justify-content-center align-items-center h-100 position-fixed top-0 start-0 p-3 z-1">
    <div class="h-auto position-relative w-auto z-3">
        <nav class="d-block border border-dark border-1 rounded-4 bg-dark bg-opacity-50">
            <div class="sidebar d-flex flex-column align-items-start align-content-start justify-content-center p-4 h-auto w-auto gap-5">
                <a href="./home.php" class="rounded-3 bg-black p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="<?= urlIs('home.php') ? 'white' : 'gray' ?>" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                    </svg>
                </a>

                <a href="./about.php" class="rounded-3 bg-black p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="<?= urlIs('about.php') ? 'white' : 'gray' ?>" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                </a>

                <a href="./projects.php" class="rounded-3 bg-black p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill=" <?= urlIs('projects.php') ? 'white' : 'gray' ?>" class="bi bi-folder-fill" viewBox="0 0 16 16">
                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z" />
                    </svg>
                </a>

                <a href="./contacts.php" class="rounded-3 bg-black p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="<?= urlIs('contacts.php') ? 'white' : 'gray' ?>" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg>
                </a>
            </div>
        </nav>
    </div>
</div>