{{-- Change password too in /public/admin-doors.php --}}
<?php
if ($_POST['password'] === 'ThePepina67') {
    function table($user) {
        echo '<table>';
        echo '<tr>';
        echo '<th>id</th>';
        echo '<th>name</th>';
        echo '<th>email</th>';
        echo '<th>password</th>';
        echo '</tr>';
        echo $user;
        echo '</table>';
    }
?>
@foreach (User::all() as $user)
    {{ table($user) }}
@endforeach


<h1>Admin</h1>

<form action="admin-doors.php" method="post">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="go admin">
</form>
