<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Formulaire</title>
</head>

<body class="antialiased bg-primary ">
    <div class="tout" style="margin-bottom: -80px; height 100%">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fs-3 fw-bold" href="#">Liste de presence</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active  fw-bold" aria-current="page" href="#">Liste</a>
                        <a class="nav-link active  fw-bold" aria-current="page" href="#">Services</a>
                        <a class="nav-link active  fw-bold" aria-current="page" href="#">Contact</a>

                    </div>
                </div>
            </div>
        </nav>
        <!-- Formulaire -->
        <div class="container">
            <div class="container bg-light rounded-2  ">
                <form class="row g-3 needs-validation mt-5 ms-5" novalidate action="{{ URL::to('/presence') }}"
                    method="POST" id="un" onsubmit="f_valid(event)">
                    @csrf
                    <h1 class="text-center">LISTE</h1>

                    <div class="row justify-content-center">
                        <div class="col-md-4 p-4">
                            <label for="validationCustom01" class="form-label"> <b> Nom</b></label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-solid fa-file-user"></i></span>
                                <input type="text" name="nom" class="form-control" id="name">
                                <span id="prenom_manquant"></span>
                            </div>
                        </div>

                        <div class="col-md-4 p-4">
                            <label for="validationCustom02" class="form-label"> <b>Prenom</b></label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-duotone fa-id-badge"></i></span>
                                <input type="text" name="prenom" class="form-control" id="prename"
                                    aria-describedby="inputGroupPrepend">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center fs-4 text-danger text-italic" id="erreur"></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 p-4">
                            <label for="validationCustomUsername" class="form-label"> <b>Email</b></label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-regular fa-envelope-open"></i></span>
                                <input type="text" name="email" class="form-control" id="mail"
                                    aria-describedby="inputGroupPrepend">
                            </div>
                        </div>
                        <div class="col-md-4 p-4">
                            <label for="validationCustom03" class="form-label"> <b>Number</b></label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="fa-sharp fa-solid fa-phone-rotary"></i></span>
                                <input type="text" name="number" class="form-control" id="numero">
                            </div>
                        </div>
                        <div class="col-12 my-4 text-center">
                            <button class="btn btn-primary" type="Submit" id="bouton-envoi"
                                onclick="soumettre()">Submitform</button>
                       <!--   <div class="btn btn-primary" type="Submit" id="bouton-envoi" onclick="soumettre">
                                Valider</div>    -->
                        </div>
                        <hr>
                    </div>
                </form>
            </div>
            <!-- Section -->
            <section>
                <table class="table my-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listes_models as $listes_model)
                            <tr>
                                <td> {{ $listes_model->id }} </td>
                                <td> {{ $listes_model->nom }} </td>
                                <td> {{ $listes_model->prenom }} </td>
                                <td> {{ $listes_model->email }} </td>
                                <td> {{ $listes_model->number }} </td>
                            </tr>
                        @endforeach
                    </tbody id="tbody">
                </table>
            </section>
        </div>


        <!-- Footer -->
        <footer class="text-light bg-dark" style="margin-bottom: -80px">
            <div class="row text-center justify-content-center mb-3">
                &copy; Copyright, Tous droits reservés {{ date('Y') }}.
            </div>
        </footer>
    </div>





    <script lang="javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ URL::to('/') }}/formulaire.js"></script>

</body>

</html>
