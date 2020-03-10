<?= view('App\Views\theme\header') ?>
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
        <h1 id="page-title"><?= $function_title ?></h1>
        <?php echo view($viewName); ?>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>
