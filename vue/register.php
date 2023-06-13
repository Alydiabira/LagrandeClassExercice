<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <?php require_once("nav.php") ?>
    <!-- <div class="container  spacer col-md-6 col-xs-12">
        <div class="card">
            <div class="card-header">Inscription</div>
            <div class="card-body">
                <form method="post" action="inscription.php">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" name="nom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email"  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Passsword:</label>
                        <input type="text" name="passsword"  class="form-control" />
                    </div>
                    <div>
                        <button type="submit">se connecter</button>
                    </div>
                    


                </form>

            </div>
        </div>
    </div> -->



    <!--Formulaire-->
        <!--Débordé-->
        <div class="overflow-x-auto" >
            <h1>Register</h1>
        </div>
        <br>
                    <!-- Pills navs -->
        <div class="container" onmouseenter="myEnterFunction1()">
            <!-- Section: Design Block -->
            <!-- Section: Design Block -->
            <section class="background-radial-gradient overflow-hidden" >
                
                <div  class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" onmouseenter="myEnterFunction1()">
                    <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0 overflow-x-auto" style="z-index: 10">
                         <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
                                padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                                border-radius: 8px; will-change: transform;" onmouseenter="myEnterFunction1()" >
                                <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFOjetyUY0&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                </iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-dark">
                            <div class="card-body px-4 py-5 px-md-5">
                            <form method="post" action="inscription.php">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4 ">
                                    <div class="col">
                                        <div class="form-outline text-light">
                                            <input  name="nom" type="text" id="form3Example1" class="form-control" />
                                            <label class="form-label" for="form3Example1">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline text-light">
                                            <input  name="prenom" type="text" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Prenom</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4 text-light">
                                    <input name="email" type="email" id="form3Example3" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4 text-light">
                                    <input name="password" type="password" id="form3Example4" class="form-control" />
                                    <label class="form-label" for="form3Example4">Mot de passe</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-danger btn-block mb-5">S'incrire</button>

                               
                            </form>


                            <!-- <form >
                                    <div class="form-group">
                                        <label>Nom:</label>
                                        <input type="text" name="nom" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Prenom:</label>
                                        <input type="text" name="prenom" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" name="email"  class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Passsword:</label>
                                        <input type="text" name="passsword"  class="form-control" />
                                    </div>
                                    <div>
                                        <button type="submit">se connecter</button>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>

    
</body>
<!--Footer-->
<?php include 'footer.php'?>
<!--Footer-->

</html>