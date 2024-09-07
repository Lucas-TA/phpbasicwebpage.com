<?php require_once('../../../private/init.php'); ?>
<?php
    $id = $_GET['id'] ?? 'Not a valid link';
    ?>

    <?php $page_title = 'Show Page'; ?>
    <?php include(SHARED_PATH . '/staff/header.php'); ?>

    <div id="content">

        <a class="back-link" href="<?php echo urlFor('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

        <div class="page show">

            Page ID: <?php echo h($id); ?>

        </div>

    </div>

<?php include(SHARED_PATH . '/staff/footer.php'); ?>