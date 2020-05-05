<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="display-4 text-center mt-3">Movie</h2>
            <p class="lead text-center">Top 5 movies</p>
            <form action="result.php" method="post"name="serie[]">
                <div class="input-group my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">1</span>
                    </div>
                    <input type="text" name="movie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">2</span>
                    </div>
                    <input type="text" name="movie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">3</span>
                    </div>
                    <input type="text" name="movie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">4</span>
                    </div>
                    <input type="text" name="movie[]" class="form-control" aria-label="Username" >
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">5</span>
                    </div>
                    <input type="text" name="movie[]" class="form-control" aria-label="Username">
                </div>
                <input type="submit" name="submit" value="submit" class="btn btn-sm btn-info btn-block">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="display-4 text-center mt-3">TV Series</h2>
            <p class="lead text-center">Top 5 TV series</p>
                <div class="input-group my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">1</span>
                    </div>
                    <input type="text" name="serie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">2</span>
                    </div>
                    <input type="text" name="serie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">3</span>
                    </div>
                    <input type="text" name="serie[]" class="form-control" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">4</span>
                    </div>
                    <input type="text" name="serie[]" class="form-control" aria-label="Username" >
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">5</span>
                    </div>
                    <input type="text" name="serie[]" class="form-control" aria-label="Username">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="display-4 text-center mt-3">Get request</h2>
            <form action="result.php" method="get">
                <div class="form-group">
                    <input type="text" name="fav_country" class="form-control" placeholder="Favorite country">
                </div>

                <div class="form-group">
                    <input type="text" name="worst_movie" class="form-control" placeholder="Worst movie">
                </div>

                <div class="form-group">
                    <input type="text" name="worst_serie" class="form-control" placeholder="Worst serie">
                </div>
                <input type="submit" name="get" value="submit" class="btn btn-sm btn-info btn-block">
            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h2 class="display-4 text-center mt-3">$_FILES</h2>
            <form action="result.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <input type="submit" name="upload" value="Upload" class="btn btn-sm btn-info btn-block mt-3">
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>