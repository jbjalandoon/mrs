<?= view('App\Views\theme\header') ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
     <?php if (!empty($profile)): ?>
       <div class="row mt-3">
         <div class="col-md-12">
           <div class="card flex-row flex-wrap">
              <div class="card-header border-0">
                <img id="userimage" class="img-fluid mt-2" src="<?=base_url() ?>public/img/user.png" alt="">
              </div>
              <div class="card-block px-3 col-md-4">
                <h3 class="card-title mt-2"><?=ucfirst($profile[0]['first_name'] . ' ' . $profile[0]['middle_name'].' ' . $profile[0]['last_name'])?></h3>
                <p class="px-5" style="font-style: italic;"><?=ucfirst($profile[0]['gender'] == 'm' ? 'Male': 'Female') .'  <i class="fas fa-circle" style="font-size: .4rem; vertical-align: middle;"></i>  '.date_diff(date_create($profile[0]['birthdate']), date_create(date('Y-m-d')))->format("%y") . ' year(s) old'?></p>
              </div>

              <div class="col-md-7 mt-2">
                <p class="card-text"><?='<i class="fas fa-map-marker-alt"></i> '.ucwords($profile[0]['address'] . ', ' . $profile[0]['city'] . ', ' . $profile[0]['province'] . ' ' . $profile[0]['postal'])?></p>
                <div class="row">
                  <div class="col-md-4">
                    <p class="card-text"><?='<i class="fas fa-phone"></i> '.' '.$profile[0]['cellphone_no']?></p>
                  </div>
                  <div class="col-md-3">
                    <p><?='<i class="fas fa-birthday-cake"></i> '.date('F d, Y', strtotime($profile[0]['birthdate']))?></p>
                  </div>
                </div>
              </div>
              <div class="w-100"></div>

        <?php endif; ?>
        <?php if (isset($function_title)): ?>
          <h1 id="page-title"><?= $function_title ?></h1>
        <?php endif; ?>
        <?php echo view($viewName); ?>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>
