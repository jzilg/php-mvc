<section>
    <h1>Users</h1>
    <ul>
        <li>
            <a href="<?php echo $this->createUserUrl; ?>">
                Create new User
            </a>
        </li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->users as $user): ?>
            <tr>
                <td>
                    <?php echo $user->id; ?>
                </td>
                <td>
                    <?php echo $user->email; ?>
                </td>
                <td>
                    <a href="<?php echo $user->editUrl; ?>">Edit</a>
                </td>
                <td>
                    <a href="<?php echo $user->deleteUrl; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
