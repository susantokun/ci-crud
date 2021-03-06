<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial CRUD CodeIgniter | SUSANTOKUN</title>
  <style>
    .header {
      text-align: center;
    }

    .content {
      text-align: center
    }

    .content table {
      margin: 6px auto;
      text-align: left;
    }

  </style>
</head>

<body>
  <div class="header">
    <h1>Tutorial CRUD CodeIgniter - SUSANTOKUN</h1>
    <h3>Update - Ubah Data</h3>
  </div>
  <div class="content">
    <?php echo anchor('person','Back'); ?>
    <form action="<?=base_url('person/update')?>" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="<?=$person->name?>"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address" value="<?=$person->address?>"></td>
        </tr>
        <tr>
          <td></td>
          <input type="hidden" name="id" value="<?=$person->id?>">
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>
