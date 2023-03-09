<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wprofile.css">
    <title>Document</title>
</head>
<body>
<section class="contact adjust" id="contact">
                    <div class="title">
                        <h1><center>CONTACT ME</center></h1>
                    </div>
                        <div class="center">
                            <form action="tugasUsia.php" method="POST" required>
                                <fieldset>
                                <legend>Message Me</legend>
                                <p>
                                    <label>Name : </label>
                                    <input type="text" name="nama" placeholder="Full Name..." value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>">
                                </p>
                                <p>
                                    <label>Username : </label>
                                    <input type="text" name="username" placeholder="Username..." value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>"/>
                                </p>
                                <p>
                                    <label>Email:</label>
                                    <input type="email" name="email" placeholder="Your email..." value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
                                </p>
                                <p>
                                    <label>Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" max="2024-01-01" />
                                </p>
                                <p>
                                    <label>Jenis Kelamin:</label>
                                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                                        <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                                </p>
                                <p>
                                    <label>Message:</label>
                                    <textarea name="message" cols="50" rows="5"></textarea>
                                </p>
                                <p>
                                    <input type="submit" name="submit" value="submit" />
                                </p>
                                </fieldset>
                            </form>                        
                        </div>                 
                </section>
</body>
</html>