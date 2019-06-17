<?php

require '../src/connec.php';
require '../src/function.php';

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP && FONTAWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CleverFox - Gestionnaire de contacts en ligne</title>
</head>
<body>
<header>
<!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-light py-3">
        <a class="navbar-brand colorme" href="#"><!--<i class="far fa-address-book"></i>--><img class="imgfox d-inline-block align-top" src="/img/fox.png">  CleverFox </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                    <a class="nav-link mx-5 p-2 colorme" href="#"><i class="fas fa-user-friends"></i> Your contact list <span class="sr-only">(current)</span></a>
                </li>
                <p class="space p-2">//</p>
                <li class="nav-item active ">
                    <a class="nav-link mx-5 p-2 colorme" href="#"><i class="fas fa-user-plus"></i> ADD a contact</a>
                </li>
                <p class="space p-2">//</p>

                <li class="nav-item active ">
                    <a class="nav-link mx-5 p-2 colorme" href="#"><i class="far fa-envelope"></i> Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- JUMBOTRON -->


    <div class="jumbotron mb-5">
        <div class="container-fluid txtjum ">
        <h1 class="display-1 mx-auto">Welcome to CleverFox !</h1>
        <p class="lead display-4 txtjum2">The most secure repertory on the world !</p>
        <h4 class="txtjum2 mt-5">Here you can manage all your private contacts, and find new people.</h4>
        </div>
    </div>
<div class="container">
    <h1 class="text-center text-secondary my-5 display-3"><i class="fas fa-cloud mx-2"></i> Your personnal contact list <i class="fas fa-cloud mx-2"></i></h1>
    <nav>
        <div class="nav nav-tabs justify-content-center my-3" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active navbutton px-5" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="far fa-address-book"></i> Contact</a>
            <a class="nav-item nav-link navbutton px-5" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="far fa-star"></i> Favorites</a>
            <a class="nav-item nav-link navbutton px-5" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-hourglass-half"></i> Most recently</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active text-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="table table-hover table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col"><i class="fas fa-phone"></i></th>
                    <th scope="col"><i class="fas fa-at"></i></th>
                    <th scope="col">Adress</th>
                    <th scope="col">add to Fav <i class="far fa-star"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-outline-info"><i class="fas fa-heart"></i></button></td>


                </tr>


                </tbody>
            </table>
        </div>
        <div class="tab-pane fade text-center" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table class="table table-hover table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col"><i class="fas fa-phone"></i></th>
                    <th scope="col"><i class="fas fa-at"></i></th>
                    <th scope="col">Address</th>
                    <th scope="col">add to Fav <i class="far fa-star"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mark Otto</td>
                    <td>Male</td>
                    <td>0612345678</td>
                    <td>Mark.Otto@gmail.com</td>
                    <td>1 rue de Bannier</td>
                    <td><button type="button" class="btn btn-outline-info"><i class="fas fa-heart"></i></button></td>


                </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade text-center" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <table class="table table-hover table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col"><i class="fas fa-phone"></i></th>
                    <th scope="col"><i class="fas fa-at"></i></th>
                    <th scope="col">Address</th>
                    <th scope="col">add to Fav <i class="far fa-star"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mark Otto</td>
                    <td>Male</td>
                    <td>0612345678</td>
                    <td>Mark.Otto@gmail.com</td>
                    <td>1 rue de Bannier</td>
                    <td><button type="button" class="btn btn-outline-info"><i class="fas fa-heart"></i></button></td>


                </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
        <div class="transi text-center my-5 py-5 col-md-3">
            <img  src="/img/fox.png">

        </div>
        </div>

        <!-- FORM ADD A CONTACT -->
        <?php




        if (isset($_POST) && !empty($_POST)) {
            $errors = [];
            if (empty($_POST['lastname'])) {
                $errors['lastname'] = "No empty lastname allowed";

            }
            if ( !preg_match ("/^[a-zA-Z\s]+$/",($_POST['lastname']))) {
                $errors['lastname'] = "Name must only contain letters!";
            }
            if (empty($_POST['firstname'])) {
                $errors['firstname'] = "No empty firstname allowed";
            }
            if (empty($_POST['civility'])) {
                $errors['civility'] = "You must choose something!";
            }


            if (!$errors) {/*
                require '../src/connec.php';

                $pdo = new PDO(DSN, USER, PASS);*/

                $query = "INSERT INTO contact (lastname, firstname, gender_id, mail, address, tel, fav) VALUES (:lastname, :firstname, :gender, :mail, :address, :tel, :fav)";
                $statement = $pdo -> prepare($query);
                $statement -> bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
                $statement -> bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
                $statement -> bindValue(':gender', $_POST['gender'], PDO::PARAM_STR);
                $statement -> bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
                $statement -> bindValue(':address', $_POST['address'], PDO::PARAM_STR);
                $statement -> bindValue(':tel', $_POST['tel'], PDO::PARAM_STR);
                $statement -> bindValue(':fav', $_POST['fav'], PDO::PARAM_STR);
                $statement->execute();

                header("location: index.php");
                exit();
            }
        }
        ?>
        <h1 class="text-center text-secondary my-5 display-3"><i class="fas fa-cloud mx-2"></i> Add a new contact <i class="fas fa-cloud mx-2"></i></h1>

        <form method="POST" action="index.php" class="formcontact px-5 py-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <strong class="text-danger">*</strong>

                    <label for="lastname">Lastname</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-user"></i></div>
                        </div>
                    <input type="text" class="form-control" id="lastname" placeholder="Clever" name="lastname">
                        </div>
                </div>
           <div class="form-group col-md-6">
                    <strong class="text-danger">*</strong>

                    <label for="firstname">Firstname</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-user"></i></div>
                        </div>
                    <input type="text" class="form-control" id="lastname" placeholder="Fox" name="firstname">
                        </div>
                </div>

            </div>
            <div class="form-group ">
                <strong class="text-danger">*</strong>

                <label for="inputState">Gender</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-venus-mars"></i></div>
                    </div>
                <select id="inputState" class="form-control custom-select-lg" name="gender">
                    <option selected value="">Choose...</option>
                    <option  value="1">Male</option>
                    <option  value="2">Female</option>
                </select>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <strong class="text-danger">*</strong>

                    <label for="tel">Phone Number</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                        </div>
                        <input type="tel" class="form-control" id="tel" placeholder="0612345678" name="tel">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <strong class="text-danger">*</strong>

                    <label for="mail">Email</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                        </div>
                        <input type="email" class="form-control" id="mail" placeholder="Clever.fox@gmail.com" name="mail">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <strong class="text-danger">*</strong>

                <label for="address">Address</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-home"></i></div>
                    </div>
                    <input type="text" class="form-control" id="address" placeholder="1234 St Main" name="address">
                </div>
            </div>


            <div class="text-center pt-5">
            <button type="submit" class="btn btn-light font-weight-bold btn-lg btn-block" ><i class="fas fa-user-plus"></i> Add contact</button>
            </div>

            </form>
    </div>

<!--CONTACT US -->

    <h1 class="text-center text-secondary my-5 display-3"><i class="fas fa-cloud mx-2"></i> Contact us <i class="fas fa-cloud mx-2"></i></h1>
<div class="row justify-content-center">
    <form class="formcontact2 px-5 py-4 mb-5 col-md-4 col-md-offset-4">

    <div class="form-group">
        <strong class="text-danger">*</strong>

        <label for="firstname">Complete name</label>

        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="completename" placeholder="Fox" name="completename">
        </div>
    </div>
            <div class="form-group">
                <strong class="text-danger">*</strong>

                <label for="lastname">Email</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                    </div>
                    <input type="email" class="form-control" id="email2" placeholder="Cleverfox@gmail.com" name="email2">
                </div>
            </div>

           <div class="form-group">
                <strong class="text-danger">*</strong>

                <label for="message">Message</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                    </div>
                    <textarea class="form-control" id="message" placeholder="Type your message here.." name="message" rows="3"></textarea>
                </div>
            </div>
        <div class="text-center pt-5">
            <button type="submit" class="btn btn-info font-weight-bold btn-lg mb-2"> Send message</button>
        </div>

    </form>
</div>





</div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

