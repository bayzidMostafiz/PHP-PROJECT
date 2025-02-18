<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
                        <!-- bootstrap cdn include-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                            <!-- fontAwesome cdn include-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                            <!-- Style sheet connect -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <div class="container ">
        <div class="row">
            <header class="text-light text-center bg-black p-3"><h3>Contact Form</h3></header>
        </div>



        <div class="row ">
            <div class="main col-12 d-flex align-items-center justify-content-center bg-dark">
                <form action="" class="col-8">
                                            
                    <div class="row d-flex col-12 d-flex align-items-center justify-content-center">
                        <div class="col-2 text-light"><p>First Name</p></div>
                        <div class="col-6"><input class="col-12" type="text" name="first_name" ></div>
                    </div>

                    <div class="row d-flex col-12 d-flex align-items-center justify-content-center">
                        <div class="col-2 text-light"><p>Last Name</p></div>
                        <div class="col-6"><input class="col-12" type="text" name="lastname" ></div>
                    </div>

                    <div class="row d-flex col-12 d-flex align-items-center justify-content-center">
                        <div class="col-2 text-light"><p>Phone Number</p></div>
                        <div class="col-6"><input class="col-12" type="text" name="phone" ></div>
                    </div>

                    <div class="row d-flex col-12 d-flex align-items-center justify-content-center">
                        <div class="col-2 text-light"><p>Email Address</p></div>
                        <div class="col-6"><input class="col-12" type="text" name="email" ></div>
                    </div>

                    <div class="row d-flex col-12 d-flex align-items-center justify-content-center">
                        <div class="col-2 text-light"><p>Message</p></div>
                        <div class="col-6"><textarea class="col-12" name="message"></textarea></div>
                    </div>
                    <div class="submit col-12"><button class="p-3" type="submit" name="submit">Submit</button></div>
                </form>
            </div>
        </div>




        <div class="row">
        <footer class="text-light text-center p-3 bg-black"><h3>This is Footer</h3></footer>
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>