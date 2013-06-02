<h2> All users </h2>

<table>
  <tr>
    <th> First Name </th>
    <th> Last Name </th>
  </tr>
  <?php foreach ($users as $user): ?>
  <tr>
    <td> <?php echo $user['User']['first_name']; ?> </td>
    <td> <?php echo $user['User']['last_name']; ?> </td>
  </tr>
  <?php endforeach ?>
</table>
