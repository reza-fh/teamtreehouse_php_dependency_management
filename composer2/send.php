<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="col-4">
               <form action="index.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Depan</label>
                      <input type="text" class="form-control" name="nampan" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Belakang</label>
                        <input type="text" class="form-control" name="nambel" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" name="kritik" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
               </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>