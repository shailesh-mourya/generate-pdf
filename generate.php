<?php 
include ('config.php');
$sql= "SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);
$rows= mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div>
            <div class="container ">
                <form action="" method="post" class="bg-warning m-4 p-4">

                    <div class="row justify-content-center">
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label for="student_name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="student_name" id="student_name"
                                    aria-describedby="helpId" placeholder="enter name" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId"
                                    placeholder="enter date" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount"
                                    aria-describedby="helpId" placeholder="enter amount" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    aria-describedby="helpId" placeholder="enter email" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    aria-describedby="helpId" placeholder="enter mobile" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="std" class="form-label">Standard</label>
                                <input type="text" class="form-control" name="std" id="std" aria-describedby="helpId"
                                    placeholder="enter std" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="year" class="form-label">Academic year</label>
                                <input type="text" class="form-control" name="year" id="year" aria-describedby="helpId"
                                    placeholder="enter year" />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <button type="submit" class="btn btn-success col-lg-6" name="submit">
                            Submit
                        </button>



                    </div>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>