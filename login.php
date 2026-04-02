<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   
   <header>

        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Komunitas Kucing</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="login.php">Daftar</a>
        <a class="nav-link" href="design.php">Design</a>
      </div>
    </div>
  </div>
</nav>
    </header>

    <section class="title-daftar">
        <h1>Pendaftaran Komunitas Kucing</h1>
    </section>

    <section class="section-form">
        <form action="">
        <table>

            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <div class="input-group flex-nowrap">
                      <input type="text" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input id="startDate" class="form-control" type="date" />
                </td>
            </tr>
            <tr>
                <td>Kelompok Umur</td>
                <td>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Pilih kelompok umur</option>
                      <option name="anak" value="anak">Anak</option>
                      <option name="remaja" value="remaja">Remaja</option>
                      <option name="dewasa" value="dewasa">Dewasa</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                        <label class="form-check-label" for="radioDefault1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                        <label class="form-check-label" for="radioDefault2">
                            Perempuan
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="checkDefault1">
                      <label class="form-check-label" for="checkDefault1">
                        Main Game
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="checkDefault2" >
                      <label class="form-check-label" for="checkDefault2">
                        Ngoding
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="checkDefault3">
                      <label class="form-check-label" for="checkDefault3">
                        Bermain Dengan Kucing
                      </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Asal Daerah</td>
                <td>
                    <div class="input-group flex-nowrap">
                      <input type="text" class="form-control" aria-describedby="addon-wrapping">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alasan Ingin Bergabung</td>
                <td>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" class="btn btn-success">Kirim Pendaftaran</button></td>
            </tr>
        </table>
        </form>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>