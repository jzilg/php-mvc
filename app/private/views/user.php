<section>
    <h1>Edit User</h1>
    <ul>
        <li>
            <a href="<?php echo $this->overviewUrl; ?>">
                Back to Overview
            </a>
        </li>
    </ul>
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
</section>
