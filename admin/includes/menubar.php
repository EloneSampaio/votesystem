<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Conectado</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">RELATÓRIOS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><span class="glyphicon glyphicon-lock"></span> <span>Votos</span></a></li>
      <li class="header">GERIR</li>
      <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Eleitores</span></a></li>
      <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Posições</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidatos</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>Posição da cédula</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Título da eleição</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>