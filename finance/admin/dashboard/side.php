<?php
  $select_username = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
  $select_username->execute([$admin_id]);
  $fetch_username = $select_username->fetch(PDO::FETCH_ASSOC);
?>

<nav>
    <div class="ava">
        <img class="avatar big" name="old_file" src="../uploads/<?php echo $fetch_username["image_profile"] ?>">
        <div class="user">
             <p><?php echo $fetch_username['username'];?></p>
             <span class="admin">(<?php echo $fetch_username['user_type'];?>)</span>
         </div>
    </div>
    <ul>
        <span class="opac">Main</span>
        <li>
            <a href="../dashboard/dash.php">
                <span class="icon"><i class="fa-solid fa-cube"></i></span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <span class="opac">Admin</span>
        <li>
            <a href="../admins/admins.php">
                <span class="icon"><i class="fa-solid fa-user-tie"></i></span>
                <span class="text">Admin</span>
            </a>
        </li>
        <span class="opac">Rao</span>
        <li class="menu">
            <span class="link">
                <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                <span class="text">Rao</span>
                <i class="fa-solid fa-angle-down right"></i>
            </span>
            <ul class="dropdown-menu">
                 <li>
                    <a href="../rao/personal.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Personal Service</span>
                    </a>
                 </li>
                 <li>
                    <a href="../rao/maintenance.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Maintenance & Other Operating Expenses</span>
                    </a>
                 </li>
                 <li>
                    <a href="../rao/capital.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Capital Outlay</span>
                    </a>
                 </li>
            </ul>
        </li>
        <span class="opac">c&d/r</span>
        <li class="menu_two">
            <span class="link">
                <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                <span class="text">C&D/R</span>
                <i class="fa-solid fa-angle-down right" id="right_two"></i>
            </span>
            <ul class="dropdown-menu_two">
                 <li>
                    <a href="../cad/cash.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Cash Books</span>
                    </a>
                 </li>
                 <li>
                    <a href="../cad/summary.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Summary of Collection and Remittances</span>
                    </a>
                 </li>
            </ul>
        </li>
        <span class="opac">Chart of accounts</span>
        <li class="menu_one">
            <span class="link">
                <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                <span class="text">COA</span>
                <i class="fa-solid fa-angle-down right" id="right"></i>
            </span>
            <ul class="dropdown-menu_one">
                 <li>
                    <a href="../coa/ledger.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Ledger</span>
                    </a>
                 </li>
                 <li>
                    <a href="../coa/liability.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Liability</span>
                    </a>
                 </li>
                 <li>
                    <a href="../coa/accessibility.php">
                        <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                        <span class="text">Accessibility</span>
                    </a>
                 </li>
            </ul>
        </li>
        <!-- <span class="opac">Settings</span>
        <li>
            <a href="../settings/settings.php">
                <span class="icon"><i class="fa-solid fa-gear"></i></span>
                <span class="text">Settings</span>
            </a>
        </li> -->
    </ul>
</nav>
