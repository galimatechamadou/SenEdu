<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulaire d'inscription des élèves</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title">Formulaire d'incription</h2>
            </div>
            <div class="card-body">
                <form action="{{route('students.store')}}" id="formulaire" class="form-group" method="post">
                    <div class="form-row">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <!-- Required meta tags-->
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                            <meta name="description" content="Colorlib Templates">
                            <meta name="author" content="Colorlib">
                            <meta name="keywords" content="Colorlib Templates">

                            <!-- Title Page-->
                            <title>Formulaire d'inscription des élèves</title>

                            <!-- Font special for pages-->
                            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

                            <!-- Main CSS-->
                            <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
                        </head>

                        <body>
                        <div class="page-wrapper bg-dark p-t-100 p-b-50">
                            <div class="wrapper wrapper--w900">
                                <div class="card card-6">
                                    <div class="card-heading">
                                        <h2 class="title">Formulaire d'incription</h2>
                                    </div>
                                    <div class="card-body">
                                            <div class="form-row">
                                                <form action="{{route('students.update',['id'=>$parent->id])}}" method="post" class="form-group">
                                                    @csrf
                                                    @method('patch')
                                                <div class="name">Nom:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="name" placeholder="Entrez votre nom">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="first_name">Prenom:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="first_name" placeholder="Entrez votre Prenom">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="year_birth">Date de naissance:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="year_birth" placeholder="Entrez votre date de naissance">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="Birth_Place">Lieu de naissance:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="Birth_Place" placeholder="Entrez votre Lieu de naissance">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="level">Niveau:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="level" placeholder="Entrez votre Niveau">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="filiere">Filiere:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="filiere" placeholder="Entrez votre Filiere">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="address">Adresse:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="address" placeholder="Entrez votre Adresse">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="phone">Téléphone:</div>
                                                <div class="value">
                                                    <input class="input--style-6" type="text" name="phone" placeholder="Entrez votre numero de téléphone">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="email">Email:</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="civility">Genre:</div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="civility" id="civilityF" value="0"/>
                                                    <label class="form-check-label" for="civilityF">F</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="civility" id="civilityM" value="1"/>
                                                    <label class="form-check-label" for="civilityM">M </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="name">Message</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn--radius-2 btn--blue-2 bg-blue-dark" type="submit">Enregistrer</button>
                                            </div>
                                            <div>
                                                <select name="parent_students_id" id="parent_students_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach($parent_students as $key => $value)
                                                        <option value="{{$key}}">{{$value}}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Jquery JS-->
                        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>


                        <!-- Main JS-->
                        <script src="{{asset('js/global.js')}}"></script>

                        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

                        </html>
                        <!-- end document-->

                        <div class="name">Nom:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="name" placeholder="Entrez votre nom">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="first_name">Prenom:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="first_name" placeholder="Entrez votre Prenom">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="year_birth">Date de naissance:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="year_birth" placeholder="Entrez votre date de naissance">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="Birth_Place">Lieu de naissance:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="Birth_Place" placeholder="Entrez votre Lieu de naissance">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="level">Niveau:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="level" placeholder="Entrez votre Niveau">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="filiere">Statut:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="filiere" placeholder="Entrez votre Filiere">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="address">Adresse:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="address" placeholder="Entrez votre Adresse">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="phone">Téléphone:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="phone" placeholder="Entrez votre numero de téléphone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="email">Email:</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Mot de Pass:</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="password" name="password" placeholder="Entrez votre mot de pass">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="confirm_password">Comfirmer not de pass:</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="password" name="confirm_password" placeholder="Confirmer votre mot de pass">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="civility">Genre:</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civility" id="civilityF" value="0"/>
                            <label class="form-check-label" for="civilityF">F</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civility" id="civilityM" value="1"/>
                            <label class="form-check-label" for="civilityM">M </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Message</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2 bg-blue-dark" type="submit">Enregistrer</button>
                    </div>
                    <div>
                        <select name="parent_students_id" id="parent_students_id" class="form-control">
                            <option value=""></option>
                            @foreach($parent_students as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>

                            @endforeach
                        </select>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>


<!-- Main JS-->
<script src="{{asset('js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->