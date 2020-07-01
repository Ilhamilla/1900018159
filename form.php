Name: <input type="text" name="nama" value="<?php echo $nama;?>">

Address: <input type="text" name="alamat" value="<?php echo $alamat;?>">

Number: <input type="text" name="telp" value="<?php echo $telp;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Laki-Laki
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Perempuan
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other

Religion:
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="islam") echo "checked";?>
value="islam">Islam
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="kristen") echo "checked";?>
value="kristen">Kristen
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="katolik") echo "checked";?>
value="katolik">Katolik
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="hindu") echo "checked";?>
value="hindu">Hindu
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="buddha") echo "checked";?>
value="buddha">Buddha
<input type="radio" name="religion"
<?php if (isset($religion) && $religion=="konghucu") echo "checked";?>
value="konghucu">Konghucu

Achievment: <textarea name="achievment" rows="5" cols="40"><?php echo $achievment;?></textarea>