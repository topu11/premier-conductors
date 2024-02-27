  <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-5 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <?php
                foreach($menu_items as $key=>$val)
                {
                    if(get_the_title() == $val['title'])
                    {
                        $class='border-b border-DeepBlue';
                    }
                    else
                    {
                        $class='';
                    }

                if(empty($val['children']))
                {
                    ?>
                    <li class="hover:translate-y-[3px] transform-all duration-700 <?=$class;?>">
                <a href="<?=$val['url']?>" class="text-20  py-1 hover:text-LightBlack"><?=$val['title']?></a>
                </li>
                    <?php
                }else
                {
                    ?>
                    <li class="">
                    <a href="javascript:void(0)" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar_<?=$val['ID']?>" class="ett_hober_event dropdownNavbar_<?=$val['ID']?> hover:translate-y-[3px] transform-all duration-700 text-20  py-1 hover:text-LightBlack"><?=$val['title']?></a>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar_<?=$val['ID']?>" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 ett_inset_class">
                        <ul class="py-2" aria-labelledby="dropdownLargeButton">
                        <?php
                        foreach($val['children'] as $key2=>$val2)
                        {
                            ?>
                            <li class="pl-[4px] pr-3 flex justify-end">
                            <a href="<?=$val2['url']?>" class="text-20  py-1 hover:text-LightBlack hover:translate-y-[3px] transform-all duration-700 "><?=$val2['title']?></a>
                        </li>
                            <?php
                        }
                        
                        ?>
                        </ul>
                    </div>
                </li>
                    <?php
                }
                
                }
                ?>
                
            
            
            </ul>


            <li class="nav-item">
                    <a
                        class="nav-link <?php if($currentPage =='home'){echo 'active';}?>"
                        href="index.php"
                    >
                        Home
                    </a>
                    </li>
                    <li class="nav-item">
                    <a
                        class="nav-link <?php if($currentPage =='about'){echo 'active';}?>"
                        href="about.php"
                    >
                        About
                    </a>
                    </li>
                    <li class="nav-item">
                    <div class="dropdown">
                        <a
                        href="renovation.php"
                        class="nav-link <?php if($currentPage =='renovation'){echo 'active';}?>"
                        >
                        Services
                        </a>
                        <span
                        class="dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >
                        <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/menu_dropdown.png';?>" alt="" />
                        </span>
                        <ul class="dropdown-menu">
                        <li>
                            <a
                            class="dropdown-item <?php if($currentPage =='renovation'){echo 'active';}?>"
                            href="renovation.php"
                            >
                            Renovation
                            </a>
                        </li>
                        <li>
                            <a
                            class="dropdown-item <?php if($currentPage =='custom-building'){echo 'active';}?>"
                            href="custom-home-building.php"
                            >
                            Custom Home Building
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item">
                    <a
                        class="nav-link <?php if($currentPage =='properties-for-sale'){echo 'active';}?>"
                        href="properties.php"
                    >
                        Properties for sale
                    </a>
                    </li>
                    <li class="nav-item">
                    <a
                        class="nav-link <?php if($currentPage =='contact'){echo 'active';}?>"
                        href="contact.php"
                    >
                        Contact
                    </a>
                    </li>