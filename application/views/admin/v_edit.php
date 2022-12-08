<?php foreach($user as $u) { ?>
<form action="<?php echo base_url(). 'backend/komentar' ?>" method="post">
    <table style="margin : 20px auto;">
        <tr>
            <th>Nama</th>
            <td><input type= "hidden" name="id" value="<?php echo $u->id ?>">
            <input type= "text" name="name" value="<?php echo $u->name  ?>">

        </tr>
        <tr>
            <th>Email</th>
            <td><input type= "text" name="alamat" value="<?php echo $u ->email ?>"></td>
        </tr>
        <td></td>
            <td>
                <input type="submit" value="simpan">
        </table>
</form>
<?php } ?>