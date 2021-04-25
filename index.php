<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="text-center p-3 mb-5 bg-primary " style="color: white;">
        <h1>Client Ayush</h1>
    </div>
    <div class="container">
        <form action="form.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="topic">Topic</label>
                    <input type="text" id="topic" class="form-control" name="topic" placeholder="topic..." />
                </div>
                <div class="form-group col-md-4">
                    <label for="numwords">Number of Words</label>
                    <input type="number" id="numwords" class="form-control" name="numwords" max=1000
                        placeholder="number of words..." />
                </div>
                <div class="form-group col-md-4">
                    <label for="instructions">Instructions</label>
                    <input type="text" id="instructions" class="form-control" name="instructions"
                        placeholder="instructions..." />
                </div>

                <button type="submit" class="btn btn-primary mr-3">Add Project</button>
        </form>
        <form action="./projects.php">
            <button type="submit" class="btn btn-warning">View On-Going Projects</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
            <a href="https://drive.google.com/drive/folders/1c3iicqJ7kRGfvjV-rHBAfeMFp1VCERL7?usp=sharing" target="_blank"class="href">view screenshots for other test cases</i></a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>


<!--    ### form ###

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required></input>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required></input>
        <button type="submit">Submit</button> 
-->