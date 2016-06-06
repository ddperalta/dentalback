<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Edit Patient') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lastname');
            echo $this->Form->input('mothersname');
            echo $this->Form->input('address');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('birthday', ['empty' => true]);
            echo $this->Form->input('patientnumber');
            echo $this->Form->input('password');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
