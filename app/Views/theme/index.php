<?= view('App\Views\theme\header') ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
     <?php if (!empty($profile)): ?>
      <!-- <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb">
          <?php
            $uri = new \CodeIgniter\HTTP\URI(current_url());
            $uri = str_replace('http://localhost', $profile[0]['first_name'] . ' ' . $profile[0]['middle_name'].' ' . $profile[0]['last_name'], $uri);
            $links = explode('/', $uri);
          ?>
          <?php foreach ($links as $link): ?>
            <li class="breadcrumb-item"><a href="#"><?=ucwords($link)?></a></li>
          <?php endforeach; ?>
        </ol>
      </nav> -->
     <div class="row mt-3">
       <div class="col-md-12">
         <div class="card flex-row flex-wrap">
            <!-- <div class="card-header border-0">
              <img id="userimage" class="img-fluid mt-2" src="<?=base_url() ?>public/img/user.png" alt="">
            </div> -->
            <div class="card-block px-3 col-md-6">
              <a href="<?=base_url().'patients/show/'.$profile[0]['id']?>"><h3 class="card-title mt-2"><?=ucfirst($profile[0]['first_name'] . ' ' . $profile[0]['middle_name'].' ' . $profile[0]['last_name'])?></h3></a>
              <p class="px-5" style="font-style: italic;"><?=ucfirst($profile[0]['gender'] == 'm' ? 'Male': 'Female') .'  <i class="fas fa-circle" style="font-size: .4rem; vertical-align: middle;"></i>  '.date_diff(date_create($profile[0]['birthdate']), date_create(date('Y-m-d')))->format("%y") . ' year(s) old'?></p>
            </div>

            <div class="col-md-6 mt-2">
              <p class="card-text"><?='<i class="fas fa-map-marker-alt"></i> '.ucwords($profile[0]['address'] . ', ' . $profile[0]['city'] . ', ' . $profile[0]['province'] . ' ' . $profile[0]['postal'])?></p>
              <div class="row">
                <div class="col-md-4">
                  <p class="card-text"><?='<i class="fas fa-phone"></i> '.' '.$profile[0]['cellphone_no']?></p>
                </div>
                <div class="col-md-6">
                  <p><?='<i class="fas fa-birthday-cake"></i> '.date('F d, Y', strtotime($profile[0]['birthdate']))?></p>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="card-footer w-100 text-muted">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <div class="nav-link" style="">
                    <i class="fas fa-clipboard-check"></i> <a href="<?= base_url(). 'visits' . '/'?><?= $visit_id != 0 ? 'end/' . $visit_id .'/'. $profile[0]['id'] : 'start/' . $profile[0]['id']?> " class="text-dark"><?= $visit_id != 0 ? 'End Visit': 'Start Visit'?></a>
                  </div>
                  <?php if ($visit_id != 0): ?>
                    <div class="nav-link" style="text-align: center;">
                      <i id="vitalsicon" data-toggle="modal" data-target=".bd-example-modal-lg" class="fas fa-heartbeat"></i> <a href="<?=base_url(). 'vitals/capture/' . $profile[0]['id']?>" class="text-dark" <?=$vital_recorded == 0 ? '': 'style="pointer-events: none"'?>>Capture Vitals</a>
                    </div>
                    <div class="nav-link">
                      <i id="notesicon" class="fas fa-notes-medical"></i> <a href="<?=base_url(). 'attachments/add/' . $profile[0]['id']?>" class="text-dark">Attachment</a>
                    </div>
                    <div class="nav-link">
                      <i id="notesicon" class="fas fa-diagnoses"></i> <a href="<?=base_url(). 'diagnosis/add/' . $profile[0]['id']?>" class="text-dark">Diagnosis</a>
                    </div>
                  <?php endif; ?>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <div class="nav-link" style="">
                    <i class="fas fa-child"></i> <a class="text-dark" href="<?=base_url().'patient-conditions/' . $profile[0]['id'] ?>">Conditions</a>
                  </div>
                  <div class="nav-link" style="">
                    <i class="fas fa-allergies"></i> <a class="text-dark" href="<?=base_url().'patient-allergies/' . $profile[0]['id'] ?>">Allergies</a>
                  </div>
                  <div class="nav-link" style="">
                    <i class="fas fa-users"></i> <a class="text-dark" href="<?=base_url().'patient-relatives/' . $profile[0]['id'] ?>">Relatives</a>
                  </div>
                  <div class="nav-link" style="">
                    <i class="fas fa-user-edit"></i> <a class="text-dark" href="<?=base_url() . 'patients/edit/' . $profile[0]['id'] ?>">Edit</a>
                  </div>
                  <div class="nav-link">
                    <i class="fas fa-trash-alt"></i> <a class="text-dark" href="#" onClick="confirmDelete('<?=base_url().'patients/delete/'?>' , <?=$profile[0]['id']?>)">Delete</a>
                  </div>
                </form>
              </div>
            </nav>
          </div>
        <?php endif; ?>
        <br>
        <?php if (isset($function_title)): ?>
          <!-- <h1 id="page-title"><?= $function_title ?></h1> -->
          <?php $data['function_title'] = $function_title ?>
          <?php echo view($viewName, $data); ?>
          <?php else: ?>
            <br>
            <?php echo view($viewName); ?>
        <?php endif; ?>
        <br>
        <br>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>
