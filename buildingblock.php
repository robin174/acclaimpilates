<?php while(has_sub_field("new_page_content")): ?>

<?php if(get_row_layout() == 'subheading'): // layout: Subheading ?>
    <h3><?php the_sub_field('heading'); ?></h3>
<?php endif; ?>

<?php if(get_row_layout() == 'introduction_full_width'): // layout: Introduction - Full Width ?>
    <p class="introduction"><?php the_sub_field('introduction'); ?></p>
<?php endif; ?>

<?php if(get_row_layout() == 'paragraph_full_width'): // layout: Paragraph - Full Width ?>
    <?php the_sub_field('paragraph'); ?>
<?php endif; ?>

<?php if(get_row_layout() == 'form_code'): // layout: Form - Code ?>
    <?php the_sub_field('form'); ?>
<?php endif; ?>

<?php if(get_row_layout() == 'image_full_width'): // layout: Image / Caption - Full Width ?>
    <div class="image-full-width">
        <figure class="white">
            <img class="white" src="<?php the_sub_field('image'); ?>" />
            <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
        </figure>
    </div>
<?php endif; ?>

<?php if(get_row_layout() == 'bullet_list'): // layout: Bulleted List 
$rows = get_sub_field('bullet_point'); //Repeater Field Name ?>

    <?php if( get_sub_field('introduction_para') ): ?>
        <p><?php the_sub_field('introduction_para'); ?></p>
    <?php endif; ?>

    <div>
        <?php if ($rows){ 
        echo '<ul>';
        foreach($rows as $row){
            echo '<li>'.$row['list_item'].'</li>'; 
        }
        echo '</ul>';
        } ?>
    </div>
    
    <?php if( get_sub_field('conclusion_para') ): ?> 
        <p><?php the_sub_field('conclusion_para'); ?></p>
    <?php endif; ?>

<?php endif; ?>

<?php if(get_row_layout() == 'callout'): // layout: Callout ?>
    <div class="callout">
        <p><?php the_sub_field('call'); ?></p>
    </div>
<?php endif; ?>

<?php if(get_row_layout() == 'page_break'): // layout: Page Break ?>
    <?php if( get_sub_field('break') )
        {
            echo "<hr />";
        }
    ?>
<?php endif; ?>

<?php if(get_row_layout() == 'footnote'): // layout: Footnote ?>
    <div class="footnote">
        <div class="break">
            <p class="note"><?php the_sub_field('note'); ?></p><!-- Tweak HTML tag from H5 -->
        </div>
    </div>
<?php endif; ?>
<?php endwhile; ?>