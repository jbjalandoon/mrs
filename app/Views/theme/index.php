<?= view('App\Views\theme\header') ?>
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
        <?php if (!empty($profile)): ?>
          <div class="row mt-5">
            <div class="col-md-4">
              <a href="<?=base_url(). 'patients/show/' . $profile[0]['id']?>"><h4><?=ucfirst($profile[0]['first_name'] . ' ' . $profile[0]['middle_name'].' ' . $profile[0]['last_name'])?></h4></a>
            </div>
            <div class="col-md-1">
              <strong><?=ucfirst($profile[0]['gender'] == 'm' ? 'Male': 'Female')?></strong>
            </div>
            <div class="col-md-3">
              <?=date_diff(date_create($profile[0]['birthdate']), date_create(date('Y-m-d')))->format("%y") . 'Year(s) Old (' . date('F d, Y', strtotime($profile[0]['birthdate'])) .')'?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <strong>Address:</strong> <?=ucwords($profile[0]['address'] . ' ' . $profile[0]['city'] . ',' . $profile[0]['province'] . ' ' . $profile[0]['postal'])?>
            </div>
            <div class="col-md-4">
              <strong>Contact:</strong> <?=$profile[0]['cellphone_no']?>
            </div>
          </div>
          <hr>
        <?php endif; ?>
        <?php if (isset($function_title)): ?>
          <h1 id="page-title"><?= $function_title ?></h1>
        <?php endif; ?>
        <?php echo view($viewName); ?>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>
