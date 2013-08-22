<!-- Homepage content -->
<h2><?php echo $page_title ?></h2>
You can have any content here
<?php if ($page->form_submission) {
    echo $page->site;
}else{
     $form->render();
}?>