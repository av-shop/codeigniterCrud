<?php echo $header;?>

<h1>Users list</h1>

<div class="usersContainer">
  
<div class="tableContainer">
<table>
  <tr class="tableHeader">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Registration date</th>
    <th>Avatar</th>
    <th>Options</th>
  </tr>
  <?php foreach($usersData as $userData):?>
  <tr>
  <td><?php echo $userData['ID'];?></td>
    <td><?php echo $userData['name'];?></td>
    <td><?php echo $userData['email'];?></td>
    <td><?php echo $userData['registration_date'];?></td>
    <td></td>
  <td>Edit/Delete</td>
  </tr>
 <?php endforeach;?>
</table>
</div>

<a class="button"href="/new">Add new user</a>
</div>



<?php echo $footer;?>