<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .shadow-lg {
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }
    </style>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center">
        <form class="Container" action="./list.php" method="post">
            <div class="shadow-lg p-3 rounded">
                <div class="form-group row m-2">
                    <label class="col" for="use_name">Name</label>
                    <input class="col" type="text" name="user_name" id="user_name" required>
                </div>
                <div class="form-group row m-2">
                    <label class="col" for="last_name">Last name</label>
                    <input class="col" type="text" name="last_name" id="last_name" required>
                </div>
                <div class="form-group row m-2">
                    <label class="col" for="email">Email</label>
                    <input class="col" type="email" name="email" id="email">
                </div>
                <div class="form-group row m-2">
                    <label class="col" for="age">Birth day</label>
                    <input class="col" type="number" name="age" id="age" required>
                </div>
                <div class="form-group m-2 d-flex justify-content-around">
                    <input class="btn btn-secondary" type="reset" value="Reset">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https