<!--Page Contact-->
<h1>Contact</h1>
<div class="text-center">
    <p>Vous pouvez me contacter via les réseaux sociaux ou par e-mail.</p>
    <a href="https://www.linkedin.com/in/anaelle-mimifir/" target="_blank"> <img src="/assets/images/Linkedin.png" alt="Linkedin" width="40" height="40"></a>
    <a href="https://github.com/Aanaelle" target="_blank"> <img src="/assets/images/Github.png" alt="Github" width="40" height="40"> </a>
</div>

<?php echo form_open_multipart('contact'); ?>
<div class="form-control container w-50 mx-auto my-2" style="background-color:#F4F4F9;  border: 1px solid #320d6d;">
    <div class="row">
        <label class="form-label" for="to">Adresse mail :</label>
        <?php echo form_input('from', set_value('from'), 'required', 'email'); ?>
        <?= validation_show_error('from') ?>
    </div>
    <div class="row">
        <label for="subject">Sujet:</label>
        <?php echo form_input('subject', set_value('subject'), 'required'); ?>
        <?= validation_show_error('subject') ?>
    </div>
    <div class="row">
        <label for="message">Message :</label>

        <?php echo form_textarea('message', set_value('message'), 'required'); ?>
        <?= validation_show_error('message') ?>
    </div>
    <div class="row">
        <label for="userfile">Selectionnnez un fichier :</label>
    </div>
    <div class="row">
        <?php echo form_upload('userfile', set_value('userfile')) ;?> 
        <?= validation_show_error('userfile') ?>
    </div>
</div>

<div class="text-center">
    <?php echo form_submit('submit', 'Envoyer l\'e-mail'); ?>
    <?php echo form_close(); ?>
</div>