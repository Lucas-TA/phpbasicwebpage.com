<?php

require_once('../../../private/init.php');

if(!isset($_GET['id'])) {
  redirectTo(urlFor('/staff/pages/index.php'));
}
$id = $_GET['id'];
$page_name = '';
$position = '';
$visible = '';

extracted();
?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/../../private/shared/staff/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo urlFor('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page edit">
    <h1>Edit Page</h1>

    <form action="<?php echo urlFor('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="page_name" value="<?php echo h($page_name); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if($position == "1") { echo " selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($visible == "1") { echo " checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/../../private/shared/staff/footer.php'); ?>
