<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="">
    <meta name="author" content="Tim Lucas, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Simple Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        #sbmt:hover {
            background-color: black;
        }
    </style>
</head>
<body>

<!-- Link to header -->
<?php include_once 'includes/header.php'; ?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Simple Data</h1>
            <p class="col-lg-10 fs-4">
                This project displays the functionality of a
                simple database to store small tasks and time, combined with the styling and layout of Bootstrap.
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form action="results.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                    <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="First Name"
                            name="firstName"
                            required
                    />
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Last Name"
                            name="lastName"
                            required
                    />
                    <label for="floatingInput">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Task ID"
                            name="taskID"
                            required
                    />
                    <label for="floatingInput">Task ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                            type="time"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Task Time Start"
                            name="taskTimeStart"
                            required
                    />
                    <label for="floatingInput">Task Time Start</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                            type="time"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Task Time End"
                            name="taskTimeEnd"
                            required
                    />
                    <label for="floatingInput">Task Time End</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                            type="date"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Completion Date"
                            name="completionDate"
                            required
                    />
                    <label for="floatingInput">Completion Date</label>
                </div>
                <button id="sbmt" class="w-100 btn btn-lg btn-primary" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
