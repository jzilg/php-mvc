<article>
    <h1>Edit User</h1>
    <form action="<?php echo $this->formUrl; ?>" method="POST">
        <input
            type="text"
            name="id"
            value="<?php echo $this->userId; ?>"
            readonly
        >
        <input
            type="email"
            name="email"
            value="<?php echo $this->userEmail; ?>"
        >
        <button type="submit">Submit</button>
    </form>
</article>
