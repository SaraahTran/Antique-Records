<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="records form content">
            <?= $this->Form->create($record) ?>
            <fieldset>
                <legend><?= __('Add Record') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('artist');
                    echo $this->Form->control('year',[
                        'min' => 1963,
                        'max' => date('Y')
                    ]);
                    echo $this->Form->control('genre');
                    echo $this->Form->control('no_of_disc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            </br>
            </br>
        </div>
    </div>
</div>

</br>
</br>
