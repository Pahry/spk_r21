<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    

    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <span class="glyphicon glyphicon-home"></span>
            <span>Beranda</span>
        </a>
    </li>
   
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/user') ?>">
            <span class="glyphicon glyphicon-plus-sign"></span>
            <span>Pengguna</span>
        </a>
    </li>
    
    <li class="nav-item  <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/kriteria') ?>">         
            <span class="glyphicon glyphicon-saved"></span>
            <span>Kriteria</span>
        </a>   
    </li>
    
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/crips') ?>">
            <span class="glyphicon glyphicon-asterisk"></span>
            <span>Crips</span></a>
    </li>
    
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/alternatif') ?>">
            <span class="glyphicon glyphicon-user"></span>
            <span>Data Alternatif</span></a>
    </li>

     <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/nilai_alternatif') ?>">
            <span class="glyphicon glyphicon-pencil"></span>
            <span>Nilai Alternatif</span></a>
    </li> 
    
    
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/hasil') ?>">
            <span class="glyphicon glyphicon-th-list"></span>
            <span>Hasil Seleksi</span></a>
    </li> 
</ul>