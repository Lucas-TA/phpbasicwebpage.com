<?php require_once '../../private/init.php'; ?>
<?php $page_title = "Staff Menu"; ?>
<?php include SHARED_PATH.'/staff/header.php'; ?>
<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?php echo urlFor('/staff/subjects/index.php') ?>">Subjects</a></li>
            <li><a href="<?php echo urlFor('/staff/pages/index.php') ?>">Pages</a></li>
        </ul>
    </div>
</div>
<?php include SHARED_PATH.'/staff/footer.php'; ?>

