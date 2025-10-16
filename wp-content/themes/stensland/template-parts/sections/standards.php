<section class="standards-section">
    <div class="container">
        
        <div class="standards-header">
            <h2 class="section-title standards-title">Standards</h2>
            <p class="standards-description">
                Experienced in implementing and auditing internationally recognized QHSE and Risk Management standards, 
                leading QHSE systems and risk management using international ISO standards.
            </p>
        </div>

        <div class="standards-grid">

            <?php
            // Define the standards data for easy iteration
            $standards_items = array(
                array(
                    'icon' => 'icon-quality.svg',
                    'title' => 'Quality',
                    'details' => array(
                        'ISO 9001:2015', 
                        'ISO 9004, ISO 10005, ISO 10002, ISO/TR 10013'
                    )
                ),
                array(
                    'icon' => 'icon-safety.svg',
                    'title' => 'Health & Safety',
                    'details' => array(
                        'ISO 45001:2018 (replacing OHSAS 18001)', 
                        'NEK IEC 61882 (HAZOP)'
                    )
                ),
                array(
                    'icon' => 'icon-environment.svg',
                    'title' => 'Environment',
                    'details' => array(
                        'ISO 14001:2015'
                    )
                ),
                array(
                    'icon' => 'icon-risk.svg',
                    'title' => 'Risk & Compliance',
                    'details' => array(
                        'ISO 31000:2018, ISO 31010', 
                        'ISO 17776, DNV-RP-F116'
                    )
                ),
                array(
                    'icon' => 'icon-auditing.svg',
                    'title' => 'Auditing & Inspection',
                    'details' => array(
                        'ISO 19011:2018'
                    )
                ),
                array(
                    'icon' => 'icon-security.svg',
                    'title' => 'Information Security',
                    'details' => array(
                        'ISO 27001:2013'
                    )
                )
            );

            // Loop through the items to generate the content
            foreach ($standards_items as $item) :
            ?>
            <div class="standards-item">
                <div class="item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($item['icon']); ?>" alt="<?php echo esc_attr($item['title']); ?> icon">
                </div>
                <h3 class="item-title"><?php echo esc_html($item['title']); ?></h3>
                <ul class="item-details">
                    <?php foreach ($item['details'] as $detail) : ?>
                    <li><?php echo esc_html($detail); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="item-separator"></div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>