<?php include __DIR__ . '/partials/header.php'; ?>

<?php include __DIR__ . '/partials/page-header.php'; ?>

    <section class="content-section">
        <div class="tiny-container text-center">

        <p>Welcome to Laconia, <?= $this->user['username']; ?>! This is your user panel. You can create a list, view and edit your lists, or change your settings.</p>
        
        <p>
            <a class="button" href="/create">Create a List</a>
            <a class="button" href="/<?=$this->user['username']; ?>">View Profile</a>
            <a class="button" href="/settings">Edit Settings</a>
        </p>
        </div>

        <?php if (!empty($this->lists)) : ?>
        
        <div class="small-container">

            <div class="flex-list">
                <?php foreach ($this->lists as $list) : ?>
                <div class="items">
                    <div class="list-item"><?= $list['title']; ?></div>
                    <div class="list-options">
                        <a href="/edit/<?= $list['id']; ?>" class="button">Edit</a>
                        <form action="" method="post">
                            <input type="submit" name="delete" value="Delete">
                            <input type="hidden" name="list_id" value="<?= $list['id']; ?>">
                        </form>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <?php endif; ?>

    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>